#!/bin/bash

docker compose run --rm node sass /app/src/scss/$1.scss:/app/app/view/asset/css/$1.css
