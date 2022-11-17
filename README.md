## SOLID ENGINEERING - EXAMPLES FOR SOLID
 Docker with PHP 8.0.5 fpm alpine, Nginx, Composer, PhpUnit and MariaDB

## GOOGLE SLIDES PRESENTATION
https://docs.google.com/presentation/d/1VYBi4i42no_HBMKWgzPndhjGG3rn-PbarSSXNAmKCWY

## Starting app
docker-compose up -d

## Main page - localhost
http://localhost:8080/

## Php info
http://localhost:8080/php_info.php

## Xdebug info
http://localhost:8080/xdebug_info.php

## Running tests
docker-compose run php vendor/bin/phpunit

## Using PhpUnit in PhpStorm
1. Add Php Interpreter from Docker 
2. Add Test Framework:
   1. Add PhpUnit by Remote Interpreter
   2. Provide full docker path to autoloader.php: setting/opt/project/vendor/autoload.php

### Pro publico bono by Grzegorz Bielski