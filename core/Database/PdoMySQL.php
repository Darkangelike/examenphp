<?php

namespace Database;

class PdoMySQL
{
    /**
     * Return a PDO object to interact with the database
     * To use the PDO methods, we will need to do
     * $this->pdo-><PDOmethodName>
     * 
     * @return PDO
     * 
     * !!! remember to change the database name, username, and the password !!!
     */
    static function getPdo():\PDO{
    $pdo = new \PDO ("mysql:host=localhost;dbname=magasinVelo;charset=utf8", "bikeadmin", "mountainbike", [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
    ]);

    return $pdo;

    }
}