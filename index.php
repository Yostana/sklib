<?php

require_once("/includes/db_connect.inc.php");
require_once("/classes/Monster.class.php");
?>
<html>
<header>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</header>
<body>
<?

$sth = $db->prepare("SELECT * FROM s_monster");
$sth->execute();
$result = $sth->fetchAll();


$arrMonster = new ArrayObject(array_map(function($row){return new Monster($row);},$result));

?>
    <table border = 1>
        <tr>
        <?
        foreach($arrMonster as $Monster)
        {
            foreach($Monster as $property)
            {
                ?>
                <td><? echo $property ?></td>
                <?
            }
        }    
        ?>
        </tr>
    </table>
<body>
</html>
<?


?>