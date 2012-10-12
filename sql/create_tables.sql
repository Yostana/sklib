CREATE TABLE `sklib`.`s_monster`( 
   `id` INT NOT NULL AUTO_INCREMENT UNIQUE , 
   `name` VARCHAR(255) NOT NULL , 
   `description` TEXT , 
   `min_base_damage` FLOAT NOT NULL , 
   `inc_min_base_damage` FLOAT , 
   `max_base_damage` FLOAT NOT NULL ,
   `inc_max_base_damage` FLOAT , 
   `level` INT NOT NULL , 
   `strain` VARCHAR(255) NOT NULL , 
   `health` FLOAT NOT NULL , 
   `inc_health` FLOAT , 
   `attack` FLOAT NOT NULL , 
   `inc_attack` FLOAT , 
   `dodge` FLOAT NOT NULL , 
   `inc_dodge` FLOAT , 
   `armor` INT NOT NULL ,
   `inc_armor` FLOAT  
 ) ENGINE=INNODB CHARSET=utf8 COLLATE=utf8_general_ci