<?php

function outputImg()
{
    $xs = 12;
    $sm = 12 / 2;
    $md = 12 / 3;
    $lg = 12 / 4;
    $xl = 12 / 4;

    $imgs = glob('img/*.*');

    foreach ($imgs as $img) {
        echo "<div class='p-0 m-3 col-$xs col-sm-$sm col-md-$md col-lg-$lg col-xl-$xl'>";
        echo "<a href='$img'><img src='$img'  class='img-fluid img-thumbnail' title='$img' alt='$img'></a>";
        echo '</div>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
    
    <h1 class="text-center">Bildgalleri</h1>
    <div class="container">
        <div class="row">
            
            <?php outputImg(); ?>
                
            </div>
            
            
        </div>
    </div>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>