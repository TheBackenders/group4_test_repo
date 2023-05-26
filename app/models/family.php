<?php 
declare(strict_types=1);
namespace app\models;

require_once(__DIR__."/baseModel.php");
// use app/models/connection;
class Family extends baseModel{
    public int $fam_id;
    public string $fullname;
    public string $status;
    public string $member;
    public string $phone;
    

function __construct(){
    parent::__construct();
}
public  function setname($name){
     $this->fullname=$name;
}
public  function setstatus($status){
    $this->status=$status;
}
public  function setphone($phone){
    $this->phone=$phone;
}
public  function setmembers($members){
     $this->member=$members;
}
public  function famId($famId){
    $this->fam_id=$famId;
}
public function getname(){
    return $this->fullname;
}
 public  function getstatus(){
    return $this->status;
}
public function getmember(){
    return $this->member;
}
public function getphone(){
    return $this->phone;
}
public function getfamId(){
    return $this->fam_id;
}
public  function setid($id){
     $this->fam_id=$id;
}
public function getid(){
    return $this->fam_id;
}




}


?>