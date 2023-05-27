<?php

declare(strict_types=1);
namespace app\controller;

require_once(__DIR__."/baseController.php");
require_once  __DIR__. '/../models/family.php';
use app\models\Family;
class FamilyController extends BaseController
{
    public function __construct()
    {
    $this->model=new Family();
    }

    public function all(){

        $result= $this->model->all('families','*');
         $arg=[];
         while($row=mysqli_fetch_assoc ($result))
         {
            echo "<br>";
             $this->model->setid((int)$row['fam_id']);
             $this->model->setname($row['fullname']);
             $this->model->setstatus($row['status']);
             $this->model->setmembers($row['member']);
             $this->model->setphone($row['phone']);
            //  $arg[]=$this->model;
            $arg[]=$row;
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
                $this->model->setname($_POST['name']);
                $this->model->setstatus($_POST['status']);
                $this->model->setmembers($_POST['num']);
                $this->model->setphone($_POST['phone']);
                
                $this->model->insert('families',$this->model);
               
               

                // header("Location:/test/group4_test_repo/");
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
    //   */ 
    //  public function deletfamily($id){
    //         $this->model->setid((int)$id);
    //         $this->model->deletfamily($this->model,'families');
    //         header("Location:/darbni/newproject/public/");
               
            
            
    //     }

    public function editfamily($id){
        $this->loadView("editfamily.html",[]);
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->model->setname($_POST['name']);
            $this->model->setstatus($_POST['status']);
            $this->model->setmembers($_POST['num']);
            $this->model->setphone($_POST['phone']);
            
            $this->model->update('families',$id ,$this->model);
           
           

            // header("Location:/test/group4_test_repo/");
        }
    }


}


?>