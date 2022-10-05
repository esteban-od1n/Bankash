<?php

class Database{

    static private $host = 'localhost';
    static private $db = 'bankash';
    static private $user = 'root';
    static private $password = '';
    static private $charset = 'utf8';

    static function connect(){
        try{
            $connection = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, self::$user, self::$password, $options);
    
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }

}

?>