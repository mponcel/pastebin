<?php
error_reporting(E_ALL);ini_set("display_errors", 1);
include("conf/conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$codigo = $_POST['codigo'];
$lenguaje = $_POST['lenguaje'];
$descripcion = $_POST['descripcion'];
$opcion = $_POST['opcion'];

$codigo=htmlentities(addslashes($codigo));
switch ($opcion) {
    case "Nuevo":
        echo "Nuevo";
		
		$sql="INSERT INTO codigos (nombre, autor,lenguaje,descripcion,codigo) VALUES ('$nombre', '$autor','$lenguaje','$descripcion','$codigo')";
		mysql_query($sql);
		header ("Location: index.php");
        break;
    case "Editar":
        echo "Editar";
		$sql = "UPDATE codigos SET nombre='$nombre', autor='$autor', codigo='$codigo', lenguaje='$lenguaje', descripcion='$descripcion' WHERE id_codigo = $id";
		echo $sql;
		mysql_query($sql);
		//echo "se ha actualizado";
		header ("Location: index.php");
        break;
    default:
		echo "Otro";
		break;
	
}
?>