#!/usr/bin/env bash

rm -rf var/cache/dev/*
rm -rf var/cache/prod/*

composer install
yarn

bin/console doctrine:database:drop --force
bin/console doctrine:database:create
bin/console doctrine:schema:update --force

bin/console doctrine:fixtures:load -n --fixtures=src/DataFixtures/ORM
