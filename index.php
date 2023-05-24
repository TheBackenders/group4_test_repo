<?php 
echo "nnn";
use app\controller\FamilyController;
require(__DIR__."/app/controller/familyController.php");
define('BASE_PATH', '/test/group4_test_repo/');
$request=$_SERVER['REQUEST_URI'] ;
if ($request === BASE_PATH) {  
    $fcontroller = new FamilyController();

         $fcontroller->all();
    }
  
   


?>