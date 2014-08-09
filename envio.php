<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/livevalidation.js"></script>
<title>Pastebin :: Manuel Ponce</title>
</head>

<body>
<table width="1024" border="0" align="center">
  <tr>
    <td><table width="1024" border="0">
      <tr>
        <td><img src="img/imagen.png" alt="" width="313" height="57" /></td>
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
    <td class="blanco"><table width="80%" border="0" align="center" cellpadding="3" cellspacing="3">
      <tr>
        <td><fieldset>
          <legend>Envío de código</legend>
          <form id="form1" name="form1" method="post" action="guardar.php">
            <table width="100%" border="0" cellspacing="3" cellpadding="3">
              <tr>
                <td width="15%" class="labelder">Nombre</td>
                <td width="85%" class="labelizq"><input name="nombre" type="text" id="nombre" size="40"  class="LV_valid_field" />
                  <input type="hidden" name="opcion" id="opcion" value="Mail" />
                  <input type="hidden" name="id" id="id"  /></td>
              </tr>
              <tr>
                <td class="labelder">Correo</td>
                <td class="labelizq"><input name="correo" type="text" id="correo" size="40"  /></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                  <input type="button" name="regresar" id="regresar" value="Regresar" onclick="history.back()" />
                  <input type="submit" name="registrar" id="registrar" value="Enviar" />
                  </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form>
        </fieldset></td>
      </tr>
    </table><br />
<br />
<script type="text/javascript">
						
						
						var nombre = new LiveValidation('nombre');
						var correo = new LiveValidation('correo');
					
						
						nombre.add(Validate.Presence);
						nombre.add( Validate.Length, { minimum: 3 } );
						correo.add(Validate.Presence);
						
						
	
					</script>   
    </td>
  </tr>
  <tr>
    <td bgcolor="#732378" class="blanco">José Manuel Ponce López</td>
  </tr>
</table>
</body>
</html>
