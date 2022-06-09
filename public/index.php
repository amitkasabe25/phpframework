<?php 

include '../systems/init.php';
include '../settings/db.php';
if(file_exists('../settings/config.php')){
    include '../settings/config.php';  
}
else 
{
    echo "not";
}
?>