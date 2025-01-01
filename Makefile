default: help

# Perl Colors, with fallback if tput command not available
GREEN  := $(shell command -v tput >/dev/null 2>&1 && tput -Txterm setaf 2 || echo "")
BLUE   := $(shell command -v tput >/dev/null 2>&1 && tput -Txterm setaf 4 || echo "")
WHITE  := $(shell command -v tput >/dev/null 2>&1 && tput -Txterm setaf 7 || echo "")
YELLOW := $(shell command -v tput >/dev/null 2>&1 && tput -Txterm setaf 3 || echo "")
RESET  := $(shell command -v tput >/dev/null 2>&1 && tput -Txterm sgr0 || echo "")

# Add help text after each target name starting with '\#\#'
# A category can be added with @category
HELP_FUN = \
    %help; \
    while(<>) { push @{$$help{$$2 // 'options'}}, [$$1, $$3] if /^([a-zA-Z\-]+)\s*:.*\#\#(?:@([a-zA-Z\-]+))?\s(.*)$$/ }; \
    print "usage: make [target]\n\n"; \
    for (sort keys %help) { \
    print "${WHITE}$$_:${RESET}\n"; \
    for (@{$$help{$$_}}) { \
    $$sep = " " x (32 - length $$_->[0]); \
    print "  ${YELLOW}$$_->[0]${RESET}$$sep${GREEN}$$_->[1]${RESET}\n"; \
    }; \
    print "\n"; }

help:
	@perl -e '$(HELP_FUN)' $(MAKEFILE_LIST)

SHELL=/bin/bash

DOCKER_COMPOSE = docker compose

########################################
#               INFRA                  #
########################################
up: down ##@Infra restart containers
	$(DOCKER_COMPOSE) up -d

down: ##@Infra stop containers
	$(DOCKER_COMPOSE) down --remove-orphans

sandbox-shell: ##@Infra enter sandbox container
	$(DOCKER_COMPOSE) exec sandbox ash

########################################
#               TOOLS                  #
########################################
install: ##@Tools install deps
	composer install

update: ##@Tools update deps
	composer update

jane-all: ##@Tools (re)-generate all clients
		@if [ -d generated ]; then rm -rf generated; fi
		find ./config -name '*.php' -exec sh -c 'make jane CONFIG=$$1' _ {} \;

jane: ##@Tools generate a client (make jane CONFIG=config/jane-rpc-openapi.php)
	vendor/bin/jane-openapi generate --config-file=$(CONFIG)
	composer dumpautoload

########################################
#                 QA                   #
########################################
cs-check: ##@QA run fixer (check)
	vendor/bin/php-cs-fixer fix --dry-run

cs-fix: ##@QA run fixer
	vendor/bin/php-cs-fixer fix

test: ##@QA run tests
	vendor/bin/phpunit --testdox

test-u: ##@QA run unit tests
	vendor/bin/phpunit --testdox --testsuite unit
