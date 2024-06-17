<?php

require_once("tigger.php");

$tigger = Tigger::getInstance();

for($i = 0; $i < 5; $i++)
{
    $tigger::roar();
}

echo "He rugido " . $tigger::getCounter() . " veces." . PHP_EOL;

?>