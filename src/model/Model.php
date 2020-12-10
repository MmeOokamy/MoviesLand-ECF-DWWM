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

    public function addMovie($name, $url, $date)
    {
        try {
            $request = $this->handle->prepare('
            INSERT INTO `movies`(`movies_name`, `movies_url`, `movies_date`) 
            VALUES (?, ?, ?)');

            $request->execute([
                $name,
                $url,
                $date
            ]);
        } catch (PDOException $e){
            var_dump( 'Erreur lors de la requête SQL :' . $e->getMessage());
        }
    }


}