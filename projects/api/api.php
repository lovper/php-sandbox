<?php
header('content-type: application/json');
header('Access.Control.Allow-Origin: *');
require_once '../../vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create();

// echo $faker->name;
// echo $faker->address;

$data = array
    (
    array(1,2,3),
    array('name'=>$faker->name),
    array("hello","good bye","oh no","oh yes")
);

$json = json_encode($data);
echo $json;
?>