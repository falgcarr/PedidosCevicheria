
<html>
<head>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">

    <!-- 3.0 -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<body>
	<div class="navbar navbar-inverse ">
      <div class="navbar-inner"> 
            <a  class="brand"  href="herophp.php">Mis Pedidos por Cobrar o Cancelar</a>
            <a  class="brand"  href="hero.html">Mis historial de facturas </a>
         
            <a  class="brand"  href="personal_Insertar.php">Nuevo Usuario</a>
            <a  class="brand"  href="personal_Buscar.php">Busqueda Usuarios</a>
            <a  class="brand"  href="personal_Listar.php">Lista Usuarios</a>
            <a  class="brand"  href="VentasDelDia.php">Lista Usuarios</a>
			<a  class="brand"  href="VentasMozo.php">Lista Usuarios</a>
            <a   class="brand"  href="logout.php"> Salir</a>
        </div>
    </div>
<H1>Reportes de Ventas</H1>

<FORM method = "post" ACTION="VentasDelDia.php">
Desde : <input type="date" name="inicio"> Hasta : <input type="date" name="fin"> <input type="submit" >
		
</FORM>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR>
<TD>&nbsp;Numero Recibo</TD>
<TD>&nbsp;Fecha&nbsp;</TD>
<TD>&nbsp;Tipo Recibo&nbsp;</TD>
<TD>&nbsp;Tipo Pago&nbsp;</TD>
<TD>&nbsp;Descuento&nbsp;</TD>
<TD>&nbsp;Total&nbsp;</TD>
</TR>
<?php

include 'Funciones.php';
if ($_POST){
	mostrarVentasDia();
	echo "El total de ventas es : S/".$total;
	echo "</br>";
	echo "El total de ventas con tarjeta es : S/".$tarjeta;
	echo "</br>";
	echo "El total de ventas con efectivo es : S/".$efectivo;
}
?>
</body>
</html>