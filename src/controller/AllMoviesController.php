<?php


class AllMoviesController
{

    private $title;
    private $model;
    private $moviesList;
    private $cat;



    public function __construct()
    {
        $this->title = "Tous mes Films";
        $this->model = new Model();
    }

    function routeManage()
    {

        $this->moviesList = $this->model->allMovies();


        if($this->moviesList === false) {
            $alerte = '<div class="alert alert-danger mt-5">Il y a un problème!</div>';
        } elseif (count($this->moviesList) === 0 ){
            $alerte = '<div class="alert alert-warning mt-5">
            Il n\'y a pas de film !</div>';
        } else {
            $alerte = '<div class="alert alert-info mt-5">' . count($this->moviesList) . ' film(s) enregistré(s)!</div>';
        }


        include (__DIR__ . "./../view/allMovies.php");

    }
}