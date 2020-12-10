<?php
    require 'src/controller/HomeController.php';
    require 'src/controller/AddMovieController.php';
    require 'src/controller/AllMoviesController.php';
    require 'src/controller/SearchMovieController.php';
    require 'src/controller/CatController.php';
    require 'src/model/Model.php';
    require 'src/data/DatabaseHandler.php';

    $youAreHere = filter_input(INPUT_GET, "page");

    $routeMapping = [
        'home' => HomeController::class,
        'movies' => AllMoviesController::class,
        'addmovie' => AddMovieController::class,
        'searchMovie' => SearchMovieController::class,
        'cat' => CatController::class
    ];

    foreach ($routeMapping as $routeValue => $className){

        if($youAreHere === $routeValue){

            $controller = new $className;
            $controller->routeManage();
            break;
        }
    }

    if(!isset($controller)){
        $controller = new HomeController();
        $controller->routeManage();
    }