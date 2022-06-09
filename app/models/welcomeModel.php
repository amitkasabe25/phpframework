<?php 

    class welcomeModel extends database{
        public function index($first_name , $last_name)
        {
            $data = [
                'first_name' => $first_name,
                'last_name'  => $last_name
            ];
            $insert  = $this->insert("demo" , $data);
            
        }
    }

?>