<?php

require_once('../../resources/conn.php');

$query = "DELETE ";
$query .= "FROM posts";

try {
    $stmt = $dbm->prepare($query);
    $stmt->execute();
    
}catch(PDOException $e) {
    echo "Fel:<br>"
    . $e->getMessage();
    exit;
}

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
    <form>
        <select>
            <?php foreach($ ?>
        </select>
    </form>
    
</body>
</html>