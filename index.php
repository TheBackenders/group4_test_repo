<?php 
echo "nnn";
use app\controller\FamilyController;
use app\controller\AddressController;

require(__DIR__."/app/controller/familyController.php");
require(__DIR__."/app/controller/addressController.php");
define('BASE_PATH', '/test/group4_test_repo/');
$request=$_SERVER['REQUEST_URI'] ;
if ($request === BASE_PATH) {  
    $fcontroller = new FamilyController();

         $fcontroller->all();
    }
    elseif ($request === BASE_PATH."addfamily") {  
        $fcontroller = new FamilyController();
        $acontroller = new AddressController();
    
             $fcontroller->addfamily();
             $acontroller->add_address();
        }
        elseif ($request === BASE_PATH."editfamily/"){
          $id = substr($_SERVER['REQUEST_URI'], strlen(BASE_PATH . 'editfamily/'));
          $fcontroller = new FamilyController();
          $acontroller = new AddressController();
      
               $fcontroller->editfamily($id);
               $acontroller->edit_address($id);
  
        }
   


?>