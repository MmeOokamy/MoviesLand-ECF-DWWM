<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./src/public/css/style.css"">
    <link rel="stylesheet" href="./src/public/css/ookamy.css"">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">


    <script src="./src/public/js/js.js"></script>
    <script src="./src/public/js/navbar.js"></script>
    <title><?php echo $this->title; ?></title>

</head>
<body>
<header>
    <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="?page=home">
                Home
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="?page=movies">
                    Ma liste de film
                </a>
                <a class="navbar-item" href="?page=addmovie">
                    Ajouter un film
                </a>

                <a class="navbar-item" href="?page=cat">
                    Category
                </a>
                <a class="navbar-item" href="?page=addcat">
                    Ajout Category
                </a>
            </div>
            <div class="navbar-end">
                <a class="navbar-item" href="?page=searchMovie">
                    Rechercher un film
                </a>
            </div>
        </div>




    </nav>
</header>

<div class="container">
    <h1 class="title is-1"><?php echo $this->title; ?></h1>

