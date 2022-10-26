<?php

class Cconexion{

    public static function ConexionBD(){

        $host='localhost';
        $dbname='EMSP';
        $username='soporte';
        $pasword ='123';
        $puerto=1433;


        try{
            $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
            echo "Se conectó correctamen a la base de datos";
            header("refresh:2; url=http://localhost:8080/portal/CargarFicheros.php");
        }
        catch(PDOException $exp){
            echo ("No se logró conectar correctamente con la base de datos: $dbname, error: $exp");
            header("refresh:2; url=http://localhost:8080/Portal/login.html?");
        }

        return $conn;
    }

}

?>