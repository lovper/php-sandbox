<?php
$hits = 0;
$arr = [
    [1,"A",true],
    [3,"B",true]
    ];
    
for ($i = 0; $i < count($arr); $i++) {
    $b=0;
    while($b<3){
        $arr[$b][$b]=0;
        $b++;
    }
    
    if($arr[1][2]){
        $hits++;
    }
}

