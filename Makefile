SHELL=/bin/bash

UID = $(shell id -u)
GID = $(shell id -g)

help: ## show Help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

RUN_PHP =
ifneq ($(GITHUB_ACTIONS),true)
	RUN_PHP = docker-compose exec -u dev php
endif

DOCKER_COMPOSE = docker-compose

.PHONY: up
up: down ## restart containers
	if [ ! -f .env -a -f .env.dist ]; then sed "s,#UID#,$(UID),g;s,#GID#,$(GID),g" .env.dist > .env; fi
	$(DOCKER_COMPOSE) up -d

.PHONY: down
down: ## stop containers
	$(DOCKER_COMPOSE) down --remove-orphans

.PHONY: install
install: ## install deps
	$(RUN_PHP) composer install

.PHONY: update
update: ## update deps
	$(RUN_PHP) composer update

.PHONY: test
test: ## run tests
	$(RUN_PHP) vendor/bin/phpunit --testdox

.PHONY: test-i
test-i: ## run integration tests
	$(RUN_PHP) vendor/bin/phpunit --testdox --group integration

.PHONY: test-u
test-u: ## run unit tests
	$(RUN_PHP) vendor/bin/phpunit --testdox --exclude-group integration

.PHONY: shell
shell: ## enter php container
	$(RUN_PHP) bash

.PHONY: jane
jane: ## generate a client (make jane CONFIG=config/jane-rpc-openapi.php)
	$(RUN_PHP) vendor/bin/jane-openapi generate --config-file=$(CONFIG)
	$(RUN_PHP) composer dumpautoload

.PHONY: cs-check
cs-check: ## run fixer (check)
	$(RUN_PHP) vendor/bin/php-cs-fixer fix --dry-run

.PHONY: cs-fix
cs-fix: ## run fixer
	$(RUN_PHP) vendor/bin/php-cs-fixer fix
