<?php
namespace app\controller;

class baseController
{
    public $model;
    
    public function loadView($file,$arg)
    {
        require(__DIR__."/../../views/".$file);
    }
  

}
?>