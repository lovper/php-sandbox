<?php

require_once('../../resources/conn.php');

$query = "SELECT * ";
$query .= "FROM posts";

try {
    $stmt = $dbm->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll();
    
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
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css" type="text/css" />
</head>
<body>

<?php for($i = 0; $i < count($results); $i++){ ?>
    
<div class='p-2 col-12 col-md-6 col-lg-4 col-xl-3'>
    <div class='card'>
        <div class='card-body'>
            <h5 class='card-title'> <?php echo $results[$i]['title'] ?> </h5>
            <h6 class='card-subtitle text-muted'> <?php echo $results[$i]['author'] ?> </h6>
            <p class='card-text'> <?php echo $results[$i]['text'] ?> </p>
        </div>
    </div>
</div>
<?php } ?>
<a href="deleteForm.php" class="btn btn-secondary">Delet a post</a>

    
</body>
</html>