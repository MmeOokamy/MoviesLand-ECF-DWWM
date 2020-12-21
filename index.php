<?php
    require 'src/Controller/HomeController.php';
    require 'src/Controller/AddMovieController.php';
    require 'src/Controller/AllMoviesController.php';
    require 'src/Controller/SearchMovieController.php';
    require 'src/Controller/CatController.php';
    require 'src/Controller/AddCatController.php';
    require 'src/Controller/MovieController.php';
    require 'src/Model/Model.php';
    require 'src/Data/DatabaseHandler.php';

    $youAreHere = filter_input(INPUT_GET, "page");

    $routeMapping = [
        'home' => HomeController::class,
        'movies' => AllMoviesController::class,
        'addmovie' => AddMovieController::class,
        'searchMovie' => SearchMovieController::class,
        'cat' => CatController::class,
        'addcat' => AddCatController::class,
        'movie' => MovieController::class
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