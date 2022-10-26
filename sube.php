<?php 

$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		echo "<script>alert('Archivo guardado con exito');</script>";
		header("refresh:0; url=http://localhost:8080/Portal/CargarFicheros.html");
	}else{
		echo "<script>alert('Archivo no se pudo guardar');</script>";
		header("refresh:0; url=http://localhost:8080/Portal/CargarFicheros.html");
	}
}

?>



