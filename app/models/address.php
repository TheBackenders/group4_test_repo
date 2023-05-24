<?php 
declare(strict_types=1);
namespace app\models;
require(__DIR__."/baseModel.php");
// use app/models/connection;
class address extends baseModel{
    public int $id;
    public string $fam_id;
    public string $address;

function __construct(){
    parent::__construct();
}
public  function setid($id){
     $this->id=$id;
}
public  function set_fam_id($fam_id){
     $this->fam_id=$fam_id;
}
public function getid(){
    return $this->id;
}
 public  function get_fam_id(){
    return $this->fam_id;
}
public  function setadrr($addr){
     $this->addr=$addr;
}
public function getadd(){
    return $this->id;
}




}


?>