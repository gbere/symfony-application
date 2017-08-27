#!/usr/bin/env bash

vendor/bin/simple-phpunit
vendor/bin/behat
node_modules/.bin/psi endroid.nl --threshold=75
