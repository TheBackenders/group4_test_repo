<?php

declare(strict_types=1);
namespace app\controller;
require(__DIR__."/baseController.php");
class UserController extends baseController
{
    public function __construct()
    {
        $this->creatModel
        (__DIR__."/../models/user.php","app\models\User");
    }
    public function all(){
        $result= $this->model->all($table_name,$col);
         $arg=[];
         while($row=mysqli_fetch_assoc ($result))
         {
             $this->model->setid((int)$row['id']);
             $this->model->setname($row['full_name']);
             $this->model->setemail($row['status']);
             $this->model->setemail($row['members']);
             $this->model->setemail($row['phone']);
             $arg[]=$this->model;
           }
        $arg=[];
        $result=$this->model->all("family","*");
        while ($obj = $result -> fetch_object())
        {
               $arg[]=$obj;
        }
       $this->loadView("allfamily.html",$arg);
    }


/*
    public function searchuser(){
        $this->loadView("search.html",'');
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $searchkey=$_POST['searchKey'];
            $this->model->setname('');
            $this->model->setemail('');
            $arg=[]; 
            $result=$this->model->search("users",$searchkey,$this->model);
            while ($obj = $result -> fetch_object()){
                $arg[]=$obj;
            }
           $this->loadView("searchres.html",$arg);
        }
    
        }
*/
        public function addfamily(){
            $this->loadView("addfamily.html",'');
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                // var_dump($_POST);
                $this->model->setname($_POST['full_name']);
                $this->model->setemail($_POST['status']);
                $this->model->setemail($_POST['members']);
                $this->model->setemail($_POST['phone']);
                // echo ($this->model->getname());
                
                $this->model->adduser('families',$this->model);
            }
        }

  /*      public function edituser($id){
            $arg=$this->model->getOne('users',$id);
            // var_dump($arg);
            $this->loadview("edituser.html",$arg);
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $this->model->setname($_POST['name']);
                $this->model->setemail($_POST['email']);
                $this->model->setid((int)$id);
            if($this->model->edituser('users',$this->model))
                header("Location:/darbni/newproject/public/");
               
            }
            
        }
      */  public function deletfamily($id){
            $this->model->setid((int)$id);
            $this->model->deletfamily($this->model,'families');
            header("Location:/darbni/newproject/public/");
               
            
            
        }

}


?>