<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css" type="text/css" />
    <title>Document</title>
</head>

<body>
    <?php
        $names = ['Göran', 'Gunnar', 'Anders', 'Kurt'];

                // foreach($names as $val){
                //     echo "$val <br>";
                // };

                // "<br>";

                // for($i = 0; $i < count($names)+1; $i++){
                //     echo "$names[$i]<br>";
                // }

                // "<br>";

                // $i=0;
                // while($i < count($names)+1){
                //     echo "$names[$i]<br>";
                //     $i++;
                // }

                // "<br>";

                // sort($names);
                // foreach($names as $name){
                //     echo "$name <br>";
                // }

                // shuffle($names);
                // foreach($names as $name){
                //     echo "$name <br>";
                // }

                // array_push ($names, "Klars");
                // echo "$names[4] <br>";

                // $namesOld = array_pop ($names);

                // var_dump ($names[4])+"<br>";

                // array_unshift($names, "Klars");
                // echo "$names[0]<br>";

                // $namesNew = array_shift($names);
                // echo "$names[0]<br>";

        foreach ($imgs = glob('gallery/img/*.jpg') as $img) {
            echo "<img src='$img' class='img-thumbnail img-size' title=$img><br>";
        }

    ?>
    
    <style>
        .img-size {
            display: flex;
            max-width: 300px;
            max-height: 300px;
            
        }
    </style>

<script type="text/javascript" src="../../js/bootstrap.bundle.js"></script>
</body>

</html>