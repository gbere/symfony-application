composer install
bin/console doctrine:database:drop --force
bin/console doctrine:database:create
bin/console doctrine:schema:update --force