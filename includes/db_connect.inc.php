<?php

define('DB_DRIVER','mysql');
define('DB_HOST','localhost');
define('DB_NAME','sklib');
//define('DB_NAME','Forum_N');
define('DB_USER','root');
define('DB_PASSWORD','');

try
{
    $connect_str = DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME;
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
    $db = new PDO($connect_str,DB_USER,DB_PASSWORD,$options);
    
    //echo "Соединение с бд установлено!";
}
catch(PDOException $e)
{
    die("Error: ".$e->getMessage());
}

?>