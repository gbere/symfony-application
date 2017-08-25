#!/usr/bin/env bash

vendor/bin/simple-phpunit

node_modules/.bin/psi endroid.nl --threshold=80
