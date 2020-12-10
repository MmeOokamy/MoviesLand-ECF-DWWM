<?php


class AllMoviesController
{

    private $title;
    private $model;
    private $moviesList;

    public function __construct()
    {
        $this->title = "Tous mes Films";
        $this->model = new Model();
    }

    function routeManage()
    {

        $this->moviesList = $this->model->allMovies();
        include (__DIR__ . "./../view/allMovies.php");

    }
}