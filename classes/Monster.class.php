<?php

//Класс, описывающий монстра
class Monster
{
    public $id; //идентификатор
    public $name; //название моба
    public $description; //описание моба
  
    public $min_base_damage; //мин. базовое повреждение
    public $inc_min_base_damage; //увеличение мин. базового повреждения на каждый уровень
    public $max_base_damage; //макс. базовое повреждение
    public $inc_max_base_damage; //увеличение макс. базового повреждения на каждый уровень
    
    public $level; //уровень моба
    
    public $strain; //раса (биология)
    public $health; //здоровье
    public $inc_health; //увеличение здоровья на каждый уровень
    public $attack; //атака
    public $inc_attack; //увеличение атаки на каждый уровень
    public $dodge; //уворот
    public $inc_dodge; //увеличение уворота на каждый уровень
    public $armor; //броня
    public $inc_armor; //увеличение брони на каждый уровень
    
    public function __construct($arr_property) {
        $this->id = $arr_property['id'];
        $this->name = $arr_property['name'];
        
        $this->description = $arr_property['description'];
        $this->min_base_damage = $arr_property['min_base_damage'];
        $this->inc_min_base_damage = $arr_property['inc_min_base_damage'];
        $this->min_base_damage = $arr_property['min_base_damage'];
        $this->inc_max_base_damage = $arr_property['inc_max_base_damage'];
        
        $this->level = $arr_property['level'];
        
        $this->strain = $arr_property['strain'];
        $this->health = $arr_property['health'];
        $this->inc_health = $arr_property['inc_health'];
        $this->attack = $arr_property['attack'];
        $this->inc_attack = $arr_property['inc_attack'];
        $this->dodge = $arr_property['dodge'];
        $this->inc_dodge = $arr_property['inc_dodge'];
        $this->armor = $arr_property['armor'];
        $this->inc_armor = $arr_property['inc_armor'];
    }

    /*
    //Добавляем нового моба в таблицу-справочник s_monster
    function insertIntoSMonster()
    {
        $sql = "INSERT INTO s_monster (name, description, 
                    min_base_damage, inc_min_base_damage, max_base_damage, inc_max_base_damage, 
                    level, strain, 
                    health, inc_health, attack, inc_attack, dodge, inc_dodge, armor, inc_armor)
                VALUES
                (
                    '".$this->name."',
                    ".getColumnValueByClassPropertyForQuery($this->description).",
                    '".$this->min_base_damage."',
                    '".getColumnValueByClassPropertyForQuery($this_>inc_min_base_damage)."',
                    '".$this->max_base_damage."',
                    '".getColumnValueByClassPropertyForQuery($this->inc_max_base_damage)."',
                    '".$this->level."',
                    '".$this->strain."',
                    '".$this->health."',
                    '".getColumnValueByClassPropertyForQuery($this->inc_health)."',
                    '".$this->attack."',
                    '".getColumnValueByClassPropertyForQuery($this->inc_attack)."',
                    '".$this->dodge."',
                    '".getColumnValueByClassPropertyForQuery($this->inc_dodge)."',
                    '".$this->armor."',
                    '".getColumnValueByClassPropertyForQuery($this->inc_armor)."',
                )
            )";
    }
    
    //Получение данных по мобу
    function selectFromSMonster($monster_id)
    {
        $sql = "SELECT name, description, 
                    min_base_damage, inc_min_base_damage, max_base_damage, inc_max_base_damage, 
                    level, strain, 
                    health, inc_health, attack, inc_attack, dodge, inc_dodge, armor, inc_armor
                FROM s_monster
                WHERE id = ".$monster_id;
    }
    */
}

?>