<?php 
declare(strict_types=1);
namespace app\models;
require(__DIR__."/baseModel.php");
// use app/models/connection;
class User extends baseModel{
    public int $fam_id;
    public string $fullname;
    public string $status;
    public string $member;
    public string $phone;
    

function __construct(){
    parent::__construct();
}
public  function setname($name){
     $this->full_name=$name;
}
public  function setstatus($status){
    $this->status=$status;
}
public  function setphone($phone){
    $this->phone=$phone;
}
public  function setmembers($members){
     $this->members=$members;
}
public  function setphone($phone){
    $this->phone=$phone;
}
public function getname(){
    return $this->full_name;
}
 public  function getstatus(){
    return $this->status;
}
public function getstatus(){
    return $this->status;
}
public function getphone(){
    return $this->phone;
}
public  function setid($id){
     $this->fam_id=$id;
}
public function getid(){
    return $this->fam_id;
}




}


?>