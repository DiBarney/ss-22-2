<?php
$connBD = new mysqli("localhost","root","barneyEsAdmin","imagenes") or die("Sin Conexion".mysqli_connect_error());
$nombreArchivo = $_FILES['archivo']['name'];
$sql = "INSERT INTO slider(rutaImg) VALUES ('$nombreArchivo');";

$directorio = "img/";
$archivo = $directorio . basename($_FILES['archivo']['name']);


if(move_uploaded_file($_FILES['archivo']['tmp_name'],$archivo)) {
    mysqli_query($connBD,$sql);
    echo "Archivo Subido";
}else{
    echo "Error al subir archivo";
}
?>