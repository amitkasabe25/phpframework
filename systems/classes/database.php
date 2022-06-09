<?php 

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','test');

class database {
    
    public function __construct()
    {
        $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

        if($conn->connect_error)
        {
            die ("<h1>Database Connection Failed</h1>");
        }
        return $this->conn;
    }
    public function select($table)
    {
       $select = "SELECT * FROM ".$table;
       $query = $this->conn->query($select);
       if($query){
          return $query;
       }
    }
    public function insert($table_name , $params = array())
    {
        
        $columns = implode(',',array_keys($params));
        $values = implode("','" , $params);
        $insert = "INSERT INTO ".$table_name. " (" .$columns ." ) VALUES ("."'$values'".")";
        $insert_fire = $this->conn->query($insert);
        
    }
    
    public function delete($table , $where){
        $delete = "DELETE FROM ".$table." WHERE " . $where;
        $delete_exe = $this->conn->query($delete);
        
    }
}

    




?>