<?php 

include("conf/conexion.php");
$id = $_REQUEST['id'];
//echo $id;
$sql = "SELECT codigo from codigos WHERE id_codigo=$id";
//echo $sql;
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
echo "<pre>".$row['codigo']."</pre>";
?>
