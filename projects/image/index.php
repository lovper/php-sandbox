<?php

require '../../vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = new ImageManager(array('driver' => 'gd'));

$image = $manager->make('assets/mince.jpg');

$image->save('mince-original.jpg');

$image->crop(100,100,144,144);

$image->save('mince-crop.jpg');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <img src="mince-crop.jpg">
    
</body>
</html>