<?php

require_once 'model.php';

//instancia
$model= new Model();

$model->usuario=$_POST['txtUsuario'];
$model->clave=$_POST["txtClave"];

$filaController=$model->Logear();

if ($filaController>0) {

    header("refresh:0; url=http://localhost:8080/Portal/CargarFicheros.html");
   
}else{

    echo "<script>alert('Usuario o contraseña incorrectos');</script>";
    header("refresh:0; url=http://localhost:8080/Portal/login.html");
}

?>