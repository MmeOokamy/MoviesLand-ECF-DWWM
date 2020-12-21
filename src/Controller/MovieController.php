<?php


class MovieController
{
    private $movie;
    private $model;
    private $title;





    public function __construct()
    {
        $this->title = "";
        $this->model = new Model();
    }

    function routeManage()
    {

        $this->movie = $this->model->getMovie($_GET['id']);

        include (__DIR__ . "./../Views/movie.php");

    }
}