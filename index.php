<?php

include "/includes/sk_calculator.php.inc";
require_once("/includes/sk_dbconnection.php.inc");

$arr_k = CalculateFightingSkills(500);
// What is it?
echo "���������� �������� ����� ���������� �������: ".$arr_k['one']."<br />";
echo "���������� �������� ����� ��������� �������: ".$arr_k['two']."<br />";

echo "����� ���������: ".CalculateOxygenStock(132)."<br />";

echo "��������� �������� ���������: ".CalculateThresholdValueOfWeariness(529)."<br />";


?>