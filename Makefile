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

UID = $(shell id -u)
GID = $(shell id -g)

RUN_PHP =
ifneq ($(GITHUB_ACTIONS),true)
	RUN_PHP = docker compose exec -u dev php
endif

DOCKER_COMPOSE = docker compose

########################################
#               INFRA                  #
########################################
up: down ##@Infra restart containers
	if [ ! -f .env -a -f .env.dist ]; then sed "s,#UID#,$(UID),g;s,#GID#,$(GID),g" .env.dist > .env; fi
	$(DOCKER_COMPOSE) up -d

down: ##@Infra stop containers
	$(DOCKER_COMPOSE) down --remove-orphans


php-shell: ##@Infra enter php container
	$(RUN_PHP) bash

sandbox-shell: ##@Infra enter sandbox container
	$(DOCKER_COMPOSE) exec sandbox ash

########################################
#               TOOLS                  #
########################################
install: ##@Tools install deps
	$(RUN_PHP) composer install

update: ##@Tools update deps
	$(RUN_PHP) composer update

jane: ##@Tools generate a client (make jane CONFIG=config/jane-rpc-openapi.php)
	$(RUN_PHP) vendor/bin/jane-openapi generate --config-file=$(CONFIG)
	$(RUN_PHP) composer dumpautoload

########################################
#                 QA                   #
########################################
cs-check: ##@QA run fixer (check)
	$(RUN_PHP) vendor/bin/php-cs-fixer fix --dry-run

cs-fix: ##@QA run fixer
	$(RUN_PHP) vendor/bin/php-cs-fixer fix

test: ##@QA run tests
	$(RUN_PHP) vendor/bin/phpunit --testdox

test-i: ##@QA run integration tests
	$(RUN_PHP) vendor/bin/phpunit --testdox --group integration

test-u: ##@QA run unit tests
	$(RUN_PHP) vendor/bin/phpunit --testdox --exclude-group integration
