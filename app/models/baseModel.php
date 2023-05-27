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

    public function insert($table_name,$model){
        $modelArr=(array)$model;
        $query="INSERT INTO ".$table_name." (";
        foreach($modelArr as $col=>$value){
            if ($col=='connection' )
            continue;
            $query=$query.$col.",";
        }
       $query= substr($query,0,-1);
        $query=$query.") VALUES (";
        foreach($modelArr as $col=>$value){
            if ($col=='connection')
            continue;
            $query=$query."'".$value."',";
        }
        $query=substr($query,0,-1);
        $query=$query.")";
        echo $query;
        $result=$this->connection->query($query);


    }
    public function lastId($tablename){
        $query="SELECT MAX(fam_id) FROM ".$tablename;
        return $this->connection->query($query);

        
    }

    public function update($table_name, $id, $model){
        $modelArr=(array)$model;
        $query="UPDATE ".$table_name." SET ";
        foreach($modelArr as $col=>$value){
            if ($col=='connection' )
            continue;
            $query=$query.$col. "=" . $query=$query."'".$value."',";
        }
        $query=substr($query,0,-1);
        $query=$query." WHERE fam_id = " ."'". $id ."'". "";
        echo $query;
        $result=$this->connection->query($query);


    }
  
}




?>