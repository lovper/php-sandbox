<?php

$interstellar = [
    "genre" => "Adventure/drama/scifi",
    "premier" => "5/11-2014",
    "rating" => "8,6/10 (imdb)",
    "director" => "Christopher Nolan",
    "lead" => "Matthew McConaughey as Cooper",
    "playtime" => "2h49m"
    
    ];

foreach($interstellar as $dtItem => $ddItem){
    echo "<dl><dt> $dtItem</dt><dd>$ddItem</dd></dl>";
    
}


?>