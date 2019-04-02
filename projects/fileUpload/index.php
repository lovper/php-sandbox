<?php
require_once('../../resources/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>
    <form method="post" action="fileUpload.php" enctype="multipart/form-data">
        <input type="file" id="photo" name="photo" required>
        <input type="submit" name="action">
    </form>
</body>
</html>