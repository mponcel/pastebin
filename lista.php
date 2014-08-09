

<?php
error_reporting(E_ALL);ini_set("display_errors", 1);
include("conf/conexion.php");

$sql = "SELECT * from codigos";
$result = mysql_query($sql);

 
echo '<table width="90%" border="0" cellspacing="3" cellpadding="3" align="center">
  <tr>
    <td bgcolor="#FFFFFF" class="labelcenter">Nombre</td>
    <td bgcolor="#FFFFFF" class="labelcenter">Autor</td>
    <td bgcolor="#FFFFFF" class="labelcenter">Descripción</td>
    <td bgcolor="#FFFFFF" class="labelcenter">Lenguaje</td>
    <td bgcolor="#FFFFFF" class="labelcenter">Creado</td>
	<td bgcolor="#FFFFFF" class="labelcenter">Edición</td>
  </tr>';
  while($row = mysql_fetch_array($result)) {
	echo "<tr>
    <td class='texto'><a href='codigo.php?id=$row[id_codigo]' class='modal'>$row[nombre]</a></td>
    <td class='texto'>$row[autor]</td>
    <td class='texto'>$row[descripcion]</td>
    <td class='texto'>$row[lenguaje]</td>
    <td class='texto'>$row[fecha]</td>
	<td class='texto'><form name='form1' method='post' action='editar.php'>
  <input type='submit' name='editar' id='editar' value='Editar'>
  <input name='id' type='hidden' value='$row[id_codigo]'>
</form>
</td>
  </tr>";
  }
echo '</table>';
?>


  
