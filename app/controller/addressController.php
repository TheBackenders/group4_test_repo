<?php
declare(strict_types=1);
// use app\controller\BaseController;
namespace app\controller;
require_once(__DIR__."/baseController.php");
require_once  __DIR__. '/../models/address.php';
use app\models\Address;
class AddressController extends BaseController
{
    public function __construct()
    {
    $this->model=new Address();
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
        public function add_address(){

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
               
               $lastfamily=$this->model->lastID('families');
               $familyId=$lastfamily->fetch_assoc()['MAX(fam_id)'];
               $this->model->set_fam_id($familyId);
               $this->model->setaddress($_POST['address']);
               $this->model->insert("address",$this->model);

                header("Location:/test/group4_test_repo/");
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
    public function edit_address($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           
           $this->model->setaddress($_POST['address']);
           $this->model->update("address",$id, $this->model);

            header("Location:/test/group4_test_repo/");
        }
    }


}


?>