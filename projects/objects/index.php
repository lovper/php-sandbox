<?php

require "../../vendor/autoload.php";
require "Dice.php";

$d1 = new Dice(8);
$d1->roll(200);
var_dump($d1);