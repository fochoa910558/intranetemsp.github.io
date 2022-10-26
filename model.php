<?php

//modelo 

class Model
{
    var $id;
    var $usuario;
    var $clave;

    function __construct(){

    }

    function Logear(){

        //variables conexion
        $cadenaCnx="sqlsrv:Server=EMSP-L7308\SQLEXPRESS;Database=EMSP2";
        $user="soporte";
        $pass="123";  

        $cnx= new PDO($cadenaCnx,$user,$pass);


        try {

            $consulta=$cnx->prepare("SELECT*FROM usuario WHERE username=:parametro1 AND clave=(SELECT dbo.fun_encriptar(:parametro2))");            

            $consulta->bindValue(":parametro1",$this->usuario);
            $consulta->bindValue(":parametro2",$this->clave);

            $consulta->execute();

            $filaModel=$consulta->fetch();

            return $filaModel;


        }catch(PDOException $e){

            echo "Error en la conexion->".$e;

        }

    }

}

?>