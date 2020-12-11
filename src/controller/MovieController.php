<?php


class MovieController
{
    private $movie;
    private $model;




    public function __construct()
    {

        $this->model = new Model();
    }

    function routeManage()
    {

        $this->movie = $this->model->getMovie($_GET['movies_id']);



        include (__DIR__ . "./../view/movie.php");

    }
}