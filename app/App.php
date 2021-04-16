<?php
namespace App;

class App{

    const DB_NAME = 'website';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';

    private static $database;

    public static function getDB(){
        // initialiser la connection à la base de donnée
        // sauvegarder l'instance de la base de donnée dans la prsopriété $database
        if(self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        
        return self::$database;
    }
}