#!/usr/bin/env bash

alias docker-compose-prod='docker-compose -f docker-compose.yml -f docker-compose.prod.yml'

git pull

sh stop.sh
echo y | docker-compose-prod rm
docker-compose-prod build
docker-compose-prod up -d

echo "Allow MariaDB to initialize"
sleep 10

docker-compose-prod exec --user 1000 php /bin/sh reset.sh
