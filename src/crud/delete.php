<?php 
    require "../conexion.php";
    $con = Database::connect();


        $id_cliente=$_GET['id_cliente']; //cuando existe un valor es necesario utilizar GET

        $sql="DELETE FROM cliente WHERE id_cliente=$id_cliente";
        $query=$con->query($sql);

        if($query){
            header("Location: crud.php");
            die;
        }else {
            echo 'error';
        }
