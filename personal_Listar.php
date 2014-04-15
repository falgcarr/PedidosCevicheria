<html>
<head>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">

    <!-- 3.0 -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

</head>
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
<H1>Listado de Personal</H1>
<?php
include 'conecta.php';
$result = mysql_query("select CodPer, NomPer, TelPer, DniPer, CargoPer, ComPer from personal",$connect);
?>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR>
<TD>&nbsp;Codigo</TD>
<TD>&nbsp;Nombre&nbsp;</TD>
<TD>&nbsp;Telefono&nbsp;</TD>
<TD>&nbsp;DNI&nbsp;</TD>
<TD>&nbsp;Cargo&nbsp;</TD>
<TD>&nbsp;Comentario&nbsp;</TD>
</TR>

<?php
//LA VARIABLE $REG GUARDA LOS REGISTROS DE LA CONSULTA REALIZADA
while($reg = mysql_fetch_array($result))
{
printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td></tr>",
$reg["CodPer"],$reg["NomPer"],$reg["TelPer"],$reg["DniPer"],$reg["CargoPer"],$reg["ComPer"]);
}
mysql_free_result($result);
?>
</table>
</body>
</html>