<?php

include "/includes/sk_calculator.php.inc";
require_once("/includes/sk_dbconnection.php.inc");

$arr_k = CalculateFightingSkills(500);
echo "Необходимо успешных аттак одноручным оружием: ".$arr_k['one']."<br />";
echo "Необходимо успешных аттак двуручным оружием: ".$arr_k['two']."<br />";

echo "Запас кислорода: ".CalculateOxygenStock(132)."<br />";

echo "Пороговое значение усталости: ".CalculateThresholdValueOfWeariness(529)."<br />";


?>