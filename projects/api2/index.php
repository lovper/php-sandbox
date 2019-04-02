<!--FC-->
<?php

if(empty($_GET['url'])){
    $_GET['url'] = "";
}

$urlArray = explode("/",$_GET['url']);

$page = array_shift($urlArray);
$param = array_shift($urlArray);

switch($page){
    case '/' :
        require 'views/index.php';
        break;
        
    case '' :
        require "views/index.php";
        break;
        
    case 'about' :
        require 'views/about.php';
        break;
        
    default:
        require 'views/404.php';
        break;
}

?>