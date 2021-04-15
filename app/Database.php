<?php
namespace App;
use \PDO;
class Database{

    private $db_name;
    private $db_host;
    private $db_user;
    private $db_pass;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
    {   
        // initialisation des parametres dans le constructeur
        $this->$db_name = $db_name;
        $this->$db_host = $db_host;
        $this->$db_user = $db_user;
        $this->$db_pass = $db_pass;
    }

    private function getPDO(){
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=website; host=localhost', 'root', '');
            // stocker ceci dans l'instance $pdo
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $pdo;
    }

    // recuperer les résultats

    public function query($statement){
        $req = $this->getPDO()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }
}