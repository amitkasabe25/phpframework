<?php 

spl_autoload_register(function($className){
    error_reporting(0);
    include_once "classes/$className.php";
});

$rout = new rout;
$amit = new amit;



?>