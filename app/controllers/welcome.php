<?php 

class welcome extends amit{
    public function index()
    {
        $this->show('index');   
    }
    public function signup()
    {
        $first_name = $this->input('name');
        $last_name = $this->input('last_name');
        
        $myModel = $this->Model('welcomeModel');
        $myModel->index($first_name , $last_name);

    }
}



?>