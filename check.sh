#!/usr/bin/env bash

php-cs-fixer fix src
security-checker security:check
vendor/bin/behat
vendor/bin/simple-phpunit
node_modules/.bin/psi endroid.nl --threshold=75
