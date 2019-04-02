<?php
if(!isset($_FILES['photo'])||$_FILES['photo']['error']!=0){
    echo 'Error: '.$_FILES['photo']['error'];
    exit;
}

$uploadDir = 'upload/';

$allowed = array(
    'jpg' => 'image/jpg',
    'jpeg' => 'image/jpeg',
    'png' => 'image/png',
    'gif' => 'image/gif',
);

$filename = $_FILES['photo']['name'];
$filetype = $_FILES['photo']['type'];
$filesize = $_FILES['photo']['size'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!arrey_key_exists($ext, $allowed)){
    echo 'Error: Not a valid fileformat.';
    exit();
}

$maxsize = 10 * 1024 * 1024;

if($filesize > $maxsize){
    echo 'Files must be 10 mb or less';
    exit;
}

if(!in_array($filetype, $allowed)){
    echo 'Photo must be jpg, jpeg, png or gif';
    exit;
}

if(file_exists($uploadDir.'/'.$_FILES['photo']['name'])){
    echo 'File already exists ya cunt'
}

?>