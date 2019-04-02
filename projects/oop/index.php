<?php

require_once('CasinoDice.php')

$d1 = new CasinoDice();
$d1->roll(5);
var_dump($d1);