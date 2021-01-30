UID = $(shell id -u)
GID = $(shell id -g)

help: ## show Help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

########################################
#               DEV                    #
########################################
dev: ## open a shell session as dev:dev in the php container
	docker-compose exec -u dev php bash

dev-setup: ## launch setup script
	docker-compose exec -u dev php bash -c '~/setup.sh'

########################################
#              INFRA                   #
########################################
infra-clean: ## stop and remove containers, networks, images
	docker-compose down --rmi all

infra-rebuild: ## clean and up all
	UID=$(UID) make infra-clean infra-up

infra-show-containers: ## show all the containers
	docker-compose ps

infra-show-images: ## show all the images
	docker images -a

infra-show-logs: ## show logs from containers, specify "c=service_name" to filter logs by container
	docker-compose logs -ft ${c}

infra-stop: ## stop all the containers
	docker-compose stop

infra-up: ## create and start all the containers
	UID=$(UID) GID=$(GID) docker-compose up -d 
