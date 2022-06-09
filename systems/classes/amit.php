<?php 

class amit{
    public function show($viewName , $data = [])
    {
        if(file_exists("../app/views/".$viewName.".php"))
        {
            include_once "../app/views/$viewName.php";
        }
        else{echo "view not found";}
        
    }
    public function model($modelName)
    {
        if(file_exists("../app/models/".$modelName.".php"))
        {

            include_once "../app/models/$modelName.php";
            return new $modelName;
        }
        else{echo "Model not found";}
    }
    public function input($inputName){
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
            return trim($_POST[$inputName]);
        }
        else if ($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get"){
            return trim($_GET[$inputName]);
        }
    }
    
}


?>