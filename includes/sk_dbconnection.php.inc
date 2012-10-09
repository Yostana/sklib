<?php

require_once("sk_config.php.inc");

try
{
  $connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME;
  $db = new PDO($connect_str,DB_USER,DB_PASS);
  
  //echo "Соединение с бд установлено!";

}
catch(PDOException $e)
{
  die("Error: ".$e->getMessage());
}

?>