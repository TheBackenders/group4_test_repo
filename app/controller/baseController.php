<?php
namespace app\controller;

class BaseController
{
    public $model;
    
    public function loadView($file,$arg)
    {
        require(__DIR__."/../../views/".$file);
    }
  

}
?>