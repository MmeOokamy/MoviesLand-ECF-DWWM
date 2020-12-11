<?php


class AddMovieController
{
    private $title;
    private $model;
    private $catList;



    public function __construct()
    {
        $this->title = "Ajouter une annonce";
        $this->model = new Model();
    }

    function routeManage()
    {
        $this->catList = $this->model->allCat();


        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $request = $this->model->addMovie($_POST['name'], $_POST['url'], $_POST['date'], $_POST['category']);
                if($request === true){
                   $alerte = '<div class="alert alert-success mt-5">
            Votre film a été sauvegardé !</div>';
                } else {
                    $alerte = '<div class="alert alert-warning mt-5">
            Votre film n\'a pas été sauvegardé !</div>';
                }
        }


        include(__DIR__ . "./../view/addMovie.php");
    }
}