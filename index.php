<?php 
echo "nnn";
use app\controller\UserController;
require(__DIR__."/app/controllers/userController.php");
define('BASE_PATH', '/darbni/newbranch/11/test');
$request=$_SERVER['REQUEST_URI'] ;
if ($request === BASE_PATH) {  
    $fcontroller = new FamilyController();

         
    }
  
   


?>