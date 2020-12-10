<?php


class AddCatController
{
    private $title;
    private $model;

    public function __construct()
    {
        $this->title = "Ajouter une categorie";
        $this->model = new Model();
    }

    function routeManage()
    {

        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $this->model->addCat($_POST['name']);
        }

        include(__DIR__ . "./../view/addcat.php");
    }
}