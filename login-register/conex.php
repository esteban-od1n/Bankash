














































<?php
    $conexion=new mysqli("localhost","root", "","bankash");
    $database = 'bankash';
    $server = 'localhost';
    $username = 'root';
    $password = '';


    try {
        $conn = new PDO("mysql: host=$server; dbname=$database;", $username, $password);
    }   catch (PDOException $e) {
        die ('Connection Failed: '.$e->getMessage());
    }
    if($conexion){
        echo " ";
    }
    else{
        echo "Conexion no exitosa";
    }
?>