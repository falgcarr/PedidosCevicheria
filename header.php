<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">

    <!-- 3.0 -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <!-- 2.3.2
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.js"></script>
    -->
    <script language="JavaScript"  type="text/javascript">
        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });

            // $('.selectpicker').selectpicker('hide');
        });

	function redirige(obj){
	var opcion=obj[obj.selectedIndex].value;
	if (opcion!=0){
		switch (opcion){
			case "2":
			    document.location.href="factura.php?Tipo=E";
			break;
			case "3":
			    document.location.href="boleta.php?Tipo=P";
			break;
		}
	}
}
</script>
</head>
<body>
<?php
    $connect = mysql_connect('localhost','root',''); //REALIZA LA CONEXION
    mysql_select_db("puntoblanco",$connect);//SELECCIONA LA BASE DE DATOS "USUARIOS"
	mysql_query("SET NAMES 'utf8'"); 	
?>
<div align="right">
<form action="">
		<select class="selectpicker" data-style="btn-primary" id="select" onChange="redirige(this)">
			<option value="1">Tipo Pago</option>
			<option value="2">Pago con factura</option>
			<option value="3">Pago con boleta</option>
		  </select>
</form>
</div>