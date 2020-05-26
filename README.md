# i3 waiver collection thing

Docker dev environment set up from http://www.inanzzz.com/index.php/post/zpbw/creating-a-simple-php-fpm-nginx-and-mysql-application-with-docker-compose

Just run docker-compose up, it will init the db with `db-structure/init.sql`.
Then connect to http://localhost and it will show up.
Edited files do not require reloading docker.


Expects a `password.php` with stuff like
```
<?php
$mysqlUser = 'root';
$mysqlPass = 'root';
$mysqlHost = "mysql";
$mysqlDB = "visitor_data";
```
