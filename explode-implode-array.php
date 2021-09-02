<?php

$cars = "Anila|40|2|Audi";
$part = explode("|", $cars);

echo $part[0] . " is " . $part[1] . " years old. <br \>";
echo $part[0] . " has ". $part[2] . " dogs";
?>