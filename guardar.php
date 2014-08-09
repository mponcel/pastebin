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
$correo = $_POST['correo'];
$destinatario = $_POST['destinatario'];


$codigo=htmlentities(addslashes($codigo));
switch ($opcion) {
    case "Nuevo":
        echo "Nuevo";
		
		$sql="INSERT INTO codigos (nombre, autor,lenguaje,descripcion,codigo) VALUES ('$nombre', '$autor','$lenguaje','$descripcion','$codigo')";
		mysql_query($sql);
		header ("Location: msg.php");
        break;
    case "Editar":
        echo "Editar";
		$sql = "UPDATE codigos SET nombre='$nombre', autor='$autor', codigo='$codigo', lenguaje='$lenguaje', descripcion='$descripcion' WHERE id_codigo = $id";
		echo $sql;
		mysql_query($sql);
		//echo "se ha actualizado";
		header ("Location: msg.php");
        break;
	case "Mail":
		$sql = "SELECT * FROM codigos WHERE id_codigo = $id";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		echo "Se manda el MAil";
		$para      = $correo;
		$titulo    = 'Código desde PasteBin: Manuel Ponce';
		$mensaje   = 'Hola '.$destinatario."\r\n"."Te han enviado desde el sitio WEB  de Pastebin un código"."\r\n";
		
		$mensaje  .= 'Nombre del código: '.$row['nombre']."\r\n";
		$mensaje  .= 'Autor: '.$row['autor']."\r\n";
		$mensaje  .= 'Lenguaje: '.$row['lenguaje']."\r\n";
		$mensaje  .= 'Descripción: '.$row['descripcion']."\r\n";
		$mensaje  .= 'Fecha de creación: '.$row['fecha']."\r\n"."\r\n";
		
		$mensaje  .= 'Codigo: '.$row['codigo']."\r\n";
		
		$cabeceras = 'From: mponcel@gmail.com' . "\r\n" . 'Reply-To: mponcel@gmail.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
		mail($para, $titulo, $mensaje, $cabeceras);
		header ("Location: msg.php");
		//echo $destinatario."<br>".$correo."<br>";
		//echo $row['nombre'];
		break;
    default:
		echo "Otro";
		break;
	
}
?>