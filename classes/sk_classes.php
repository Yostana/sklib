<?php

class Skill
{
  var $name; //название навыка
  var $level; //значение (уровень) навыка
  var $description; //описание навыка
}

class Monster
{
  var $name; //название моба
  var $description; //описание моба
  
  var $base_damage; //базовое повреждение
  
  var $level; //уровень моба

  var $strain; //раса (биология)
  var $health; //здоровье
  var $attack; //атака
  var $dodge; //уворот
  var $armor; //броня
}

class Character
{
  var $name; //ник персонажа
  var $level; //уровень персонажа
  var $strain; //раса (биология)
  
  //основные характеристики персонажа
  var $strength; //сила
  var $dexterity; //ловкость
  var $intelligence; //интеллект
  var $wisdom; //мудрость
  
  //физические характеристики (производные от основных)
  var $health; //здоровье
  var $physical_attack; //физическая атака
  var $dodge; //уворот
  var $armor; //броня
  var $carrying_capacity; //грузоподъемность
  
  //магические характеристики (производные от основных)
  var $magic_attack; //магическая атака
  var $magic_energy; //магическая энергия (мана)
  
  /*
  function __construct()
  {
    $this->name = "MyDestructableClass";
  }
  */

  
  //Расчет кол-ва успешных атак для поднятия боевого навыка на 1.
  function CalculateFightingSkills($skill)
  {
    $arr_k = Array(
      "one" => $skill * 10,
      "two" => $skill * 5,
    );
    
  
    return $arr_k;
  }
  
  //Расчет запаса кислорода; 2с за 1 навыка
  function CalculateOxygenStock($skill)
  {
    $oxygen_stock = 120 + ($skill * 2);
    $oxygen_stock = date("H:i:s", $oxygen_stock);
    
    return $oxygen_stock;
  }
  
  //Расчет усталости; 5 с за 1 уровень
  function CalculateThresholdValueOfWeariness($level)
  {
    $threshold_value = 120 + ($level * 7);
    $threshold_value = date("H:i:s", $threshold_value);
    
    return $threshold_value;
  }
}

?>