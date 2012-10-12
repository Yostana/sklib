<?php

/*
Получение значение поля по свойству класса для запроса вида:
insert into <tbl_name> (<columns>) values (<column_values>)
*/
function getColumnValueByClassPropertyForQuery($property)
{
  if (empty($property))
    $column_value = 'NULL';
  else
    $column_value = "'".$property."'";
    
  return $column_value;
}

?>