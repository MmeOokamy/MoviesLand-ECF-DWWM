<?php


class Model
{
    private $handle;

    public function __construct()
    {
        $dbh = DatabaseHandler::getInstance();
        $this->handle = $dbh->getHandle();
    }

    public function allMovies()
    {
        try {
            $request = $this->handle->prepare('SELECT * FROM `movies`');
            $request->execute();
            return $request->fetchAll();


        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }

    public function addMovie($name, $url, $date, $category)
    {

        try {

            $request = $this->handle->prepare('
            INSERT INTO `movies`(`movies_name`, `movies_url`, `movies_date`, `id_category`) 
            VALUES (?, ?, ?, ?)');

            $request->execute([
                $name,
                $url,
                $date,
                $category
            ]);

            echo'<div class="alert alert-success mt-5">
            Votre film a été sauvegardé !</div>';


        } catch (PDOException $e){

            echo'<div class="alert alert-warning mt-5">
            Votre film n\'a pas été sauvegardé !</div>';

        }
    }


}