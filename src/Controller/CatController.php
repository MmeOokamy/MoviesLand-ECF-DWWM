<?php


class CatController
{
    private $title;
    private $model;
    private $catList;

    public function __construct()
    {
        $this->title = "Mes categories";
        $this->model = new Model();
    }

    function routeManage(){
        $this->catList = $this->model->allCat();
        include (__DIR__ . "./../Views/cat.php");
    }

}