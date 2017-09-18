#!/usr/bin/env bash

rm -rf var/cache/*

yarn
composer install
yarn build

bin/console doctrine:database:drop --force
bin/console doctrine:database:create
bin/console doctrine:schema:update --force

bin/console doctrine:fixtures:load -n --fixtures=src/DataFixtures/ORM

# Import / data sanitize demo commands
bin/console endroid:import-demo:generate-data
bin/console endroid:data-sanitize-demo:generate-data

# Metrics
vendor/bin/phpmetrics --report-html=public/metrics .
