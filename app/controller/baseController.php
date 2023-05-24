<?php
namespace app\controller;

class baseController
{
    public $model;
    public function creatModel($file,$model)
    {
        require($file);
        $this->model=new $model();
        return $this->model;
    }
    public function loadView($file,$arg)
    {
        require(__DIR__."/../../views/".$file);
    }
    public function all(){ 
        $result = $this->model->all('families', '*'); 
        while($row = $result->fetch_object()){ 
            $user = new User(); 
            $user->id = $row->id; 
            $user->full_name = $row->full_name; 
            $user->status = $row->status;
            $user->members = $row->members;
            $user->phone = $row->phone;
            $users[] = $user; 
        } 
        return $users; 
    }

}
?>