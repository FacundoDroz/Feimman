<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'b392626e679c8d');
define('DB_PASSWORD', '6412e2c1');
define('DB_DATABASE', 'heroku_01cc4159cc2dbc7');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>
