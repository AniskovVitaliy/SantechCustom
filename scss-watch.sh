#!/bin/bash

docker compose run --rm node sass --watch /app/src/scss/index.scss:/app/app/view/asset/css/index.css