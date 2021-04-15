SHELL=/bin/bash

UID = $(shell id -u)
GID = $(shell id -g)

help: ## show Help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

RUN_PHP:=docker-compose exec php
DOCKER_COMPOSE:=docker-compose

.PHONY: up
up: down ## restart containers
	${DOCKER_COMPOSE} up -d

.PHONY: down
down: ## stop containers
	${DOCKER_COMPOSE} down --remove-orphans

.PHONY: test
test: ## run tests
	${RUN_PHP} ./vendor/bin/phpunit

.PHONY: shell
shell:
	${DOCKER_COMPOSE} exec -u dev php bash
