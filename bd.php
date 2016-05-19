<?php

define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');   

//function connection to the bd
function connect(){
    $db= mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD)
    or die ("<p>Ошибка подключения к базе данных " .mysql_error()."</p>");
    mysql_select_db("stud")
    or die ("<p>Ошибка выбора базы данных " .mysql_error(). "</p>");
}



?>