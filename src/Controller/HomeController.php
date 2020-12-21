<?php

class HomeController
{
    private $title;

    public function __construct()
    {
        $this->title = "Ma base de Données de Film!";
    }

    function routeManage(){
        include (__DIR__ . "./../Views/home.php");
    }
}