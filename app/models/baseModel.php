<?php
namespace app\models;
require_once(__DIR__."/../../config/connection.php");
use app\database\Connection;

class baseModel{
    public $connection;
    public function __construct(){
        $db= new Connection();
        $this->connection=$db->getConnection();
    }


    public function all($table_name,$args){
        $query="SELECT ".$args." FROM ".$table_name."";
        $result=$this->connection->query($query);
        return $result;
    }
  
}



?>