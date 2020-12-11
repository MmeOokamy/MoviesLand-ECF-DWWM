<?php


class AddCatController
{
    private $title;
    private $model;
    private $alerte;

    public function __construct()
    {
        $this->title = "Ajouter une categorie";
        $this->model = new Model();
    }

    function routeManage()
    {

        if (isset($_POST['name']) && !empty($_POST['name'])) {
           $request = $this->model->addCat($_POST['name']);

            if($request === true){
                $alerte = '<div class="alert alert-success mt-5">
            Votre catégorie a été sauvegardé !</div>';
            } else {
                $alerte = '<div class="alert alert-warning mt-5">
            Votre catégorie n\'a pas été sauvegardé !</div>';
            }
        }


        include(__DIR__ . "./../view/addcat.php");
    }
}