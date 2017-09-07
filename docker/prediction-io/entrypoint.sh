#!/usr/bin/env bash

cd RecommendationEngine
pio-start-all
cat /access_key > /docker/access_key
chmod 777 /docker/access_key
service cron start
pio deploy --ip 0.0.0.0
