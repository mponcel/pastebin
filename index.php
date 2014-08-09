<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="estilo.css" rel="stylesheet" type="text/css" />
<link href="colorbox/colorbox.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery_min.js"></script>
<script type="text/javascript" src="colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
    /** Script necesario para el paso 7*/
	$(document).ready(function(){
        
        $(".modal").colorbox({rel:'modal',width:"30%"});
		
		  });
		  
		</script>
<title>Pastebin :: Manuel Ponce</title>
</head>

<body>
<table width="1024" border="0" align="center">
  <tr>
    <td><table width="1024" border="0">
      <tr>
        <td><img src="imagen.png" alt="" width="313" height="57" /></td>
        <td bgcolor="#732378" class="titulo">Maestría en Software Libre</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFF9FE">
      <p class="cnter">Desarrollo de aplicaciones WEB</p>
    <p class="cnter">Pastebin</p>
    </td>
  </tr>
  <tr>
    <td class="blanco"><div align="center">
      <form action="nuevo.php" method="post" name="form1" id="form1">
        <input type="submit" name="nuevo" id="nuevo" value="Nuevo código" />
      </form>
    </div></td>
  </tr>
  <tr>
    <td class="blanco"><table width="90%" border="0" align="center" cellpadding="3" cellspacing="3">
  <tr>
    <td><fieldset><?php include ('lista.php')?></fieldset></td>
  </tr>
</table>
      <br />
        
    </td>
  </tr>
  <tr>
    <td bgcolor="#732378" class="blanco">José Manuel Ponce López</td>
  </tr>
</table>
</body>
</html>
