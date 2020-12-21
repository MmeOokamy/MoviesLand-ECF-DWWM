<?php


class SearchMovieController
{

    private $title;
    private $model;


    public function __construct()
    {
        $this->title = "La recherche:";
        $this->model = new Model();
    }

    function routeManage()
    {

        include (__DIR__ . "./../Views/search.php");

    }
}