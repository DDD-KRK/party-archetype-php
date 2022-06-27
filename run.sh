#!/bin/bash

docker run -v $(pwd):/xxx -w /xxx alexwijn/docker-git-php-composer php composer.phar install
