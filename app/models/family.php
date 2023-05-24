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
     $this->name=$name;
}
public  function setemail($email){
     $this->email=$email;
}
public function getname(){
    return $this->name;
}
 public  function getemail(){
    return $this->email;
}
public  function setid($id){
     $this->id=$id;
}
public function getid(){
    return $this->id;
}




}


?>