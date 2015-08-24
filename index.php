<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Audi Challenge</title>
</head>

<body>
<style>
h1{background-color:#900;}
</style>
<h1>Audi Challenge</h1>
<form name="form-audi" id="form-audi">
	<input type="hidden" name="accion" value="guardar" />
    <label>Nombre</label><input type="text" name="nombre" id="nombre" /><br />
    <label>Apellido</label><input type="text" name="apellido" id="apellido" /><br />
    <label>Correo</label><input type="text" name="correo" id="correo" /><br />
    <label>Celular</label><input type="text" name="celular" id="celular" /><br />
    <label>¿Tienes celular?</label><input type="radio" name="celular" value="SI" /><input type="radio" name="celular" value="NO" /><br />
    <label>Universidad</label><select name="universidad" id="universidad">
    						  	<option value="U. Central">U. Central</option>
                              </select><br />
    <label>Marca</label><input type="text" name="marca" id="marca" /><br />                          
   	<a href="javascript:;" id="enviar-form">Enviar</a>
</form>

</body>
</html>
