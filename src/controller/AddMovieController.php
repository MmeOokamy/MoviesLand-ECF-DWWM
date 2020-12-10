<?php


class AddMovieController
{
    private $title;
    private $model;
    public function __construct()
    {
        $this->title = "Ajouter une annonce";
        $this->model = new Model();
    }

    function routeManage(){

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $this->model->addMovie($_POST['name'],$_POST['url'],$_POST['date']);
        }

        include (__DIR__ . "./../view/addMovie.php");
    }
}