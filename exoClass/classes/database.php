<?php

class Databases
{
//Nos constantes
const DB_HOST = 'mysql:host=localhost;dbname=fabrice;';
const DB_USER = 'fabrice';
const DB_PASS = 'fabrice2021';

private $connection;

private function checkConnection()
{
    //Vérifie si la connexion est nulle et fait appel à getConnection()
    if($this->connection === null) {
        return $this->getConnection();
    }
    //Si la connexion existe, elle est renvoyée, inutile de refaire une connexion
    return $this->connection;
}

    //Méthode de connexion à notre base de données
public function getConnection(){
    //Tentative de connexion à la base de données
    try{
        $this->connection = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //On renvoie un message avec le mot-clé return
        // return 'Connexion OK';
        //On renvoie la connexion
        return $this->connection;
    }
    //On lève une erreur si la connexion échoue
    catch(Exception $errorconn){
        die ('Erreur de connection :'.$errorconn->getMessage());
    }

}
protected function createQuery($sql, $parameters = null)
    {
        if($parameters)
        {
            $result = $this->checkConnection()->prepare($sql);
            // $result->setFetchMode(PDO::FETCH_CLASS, Post::class);
            $result->execute($parameters);
            return $result;
        }
        $result = $this->checkConnection()->query($sql);
        // $result->setFetchMode(PDO::FETCH_CLASS,  Post::class);
        return $result;
    }

}