#!/usr/bin/env bash

security-checker security:check
vendor/bin/behat
vendor/bin/simple-phpunit
node_modules/.bin/psi endroid.nl --threshold=75
php-cs-fixer fix src --rules=@Symfony --allow-risky=yes
php-cs-fixer fix vendor/endroid --rules=@Symfony --allow-risky=yes
