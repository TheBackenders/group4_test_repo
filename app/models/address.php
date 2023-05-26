<?php 
declare(strict_types=1);
namespace app\models;

require_once(__DIR__."/baseModel.php");

// use app/models/connection;
class Address extends baseModel{
    public int $addid;
    public string $famid;
    public string $address;

function __construct(){
    parent::__construct();
}
public  function setid($id){
     $this->addid=$id;
}
public  function set_fam_id($fam_id){
     $this->famid=$fam_id;
}
public function getid(){
    return $this->addid;
}
 public  function get_fam_id(){
    return $this->famid;
}
public  function setaddress($addr){
     $this->address=$addr;
}

public function getaddress(){
    return $this->address;
}




}


?>