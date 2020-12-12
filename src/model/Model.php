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
            $request = $this->handle->prepare('SELECT * FROM movies LEFT JOIN category ON category.category_id = movies.id_category');
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
            return true;



        } catch (PDOException $e){
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            return false;


        }
    }
    public function allCat()
    {
        try {
            $request = $this->handle->prepare('SELECT * FROM `category`');
            $request->execute();
            return $request->fetchAll();


        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }

    public function addCat($category)
    {

        try {

            $request = $this->handle->prepare('
            INSERT INTO `category`(`category_name`) 
            VALUES (?)');

            $request->execute([
                $category
            ]);
            return true;


        } catch (PDOException $e){
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            return false;


        }
    }

    public function getCategory(int $id)
    {

        try {
            //Créer une méthode dans le model permettant la récupération des annonces
            $request = $this->handle->prepare('SELECT * FROM `category` WHERE `category_id`= :id');
            $request->execute([':id' => $id]);

            return $request->fetch();

        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }

    public function getMovie(int $id)
    {

        try {

            $request = $this->handle->prepare('SELECT * FROM `movies` WHERE `movies_id`= :id');
            $request->execute([':id' => $id]);

            return $request->fetch();

        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }
    public function deleteMovie(int $id)
    {

        try {

            $request = $this->handle->prepare('DELETE FROM `movies` WHERE `movies_id`= :id');
            $request->execute([':id' => $id]);

            return true;

        } catch (PDOException $e) {
            var_dump('erreur lors de la requête sql :' . $e->getMessage());
            die();
        }
    }



}