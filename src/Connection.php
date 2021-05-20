<?php
namespace App;
use PDO;
use PDOException;

 //do connect to DataBase

class Connection{

    public $mysql; 

    public function __construct()
    {
        try {
            $this->mysql = $this->getConnection();
        } catch (PDOException $ex) {
            echo $ex->getMessage('hola');
        }
    }
    


    private function getConnection()
    {
        $host = "eu-cdbr-west-01.cleardb.com";
        $user = "b28289f4320a87";
        $password = "4625dee7";
        $database = "heroku_348df0dfb69122b";
        $charset = "utf-8";

        /* $host = "localhost";
        $user = "root";
        $password = "";
        $database = "coolders";
        $charset = "utf-8"; */

        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO("mysql:host={$host};dbname={$database};charset{$charset}", $user, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}

?>