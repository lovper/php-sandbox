<?php

if(empty($_GET['url'])){
    $_GET['url'] = "";
}

$trim = rtrim($_GET["url"]);
$trim = filter_var($trim,FILTER.SANITIZE.URL);
$url = explode("/",$trim);

$page = array_shift($url);
$param = array_shift($url);

var_dump($url);

switch($page){
    case '' :
        echo "/";
        break;
    case 'users' :
        require "api.php";
        getUsers($param);
        break;
    default:
        echo '404 Hurr Durr';
}

?>