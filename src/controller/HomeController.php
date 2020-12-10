<?php

class HomeController
{
    private $title;

    public function __construct()
    {
        $this->title = "Mon appli qui déchire pour répertorier mes films!";
    }

    function routeManage(){
        include (__DIR__ . "./../view/home.php");
    }
}