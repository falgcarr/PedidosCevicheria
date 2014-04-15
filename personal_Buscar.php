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
<H1>Consulta de registros</H1>
<FORM ACTION="busquedaPersonal.php" method = "post">
Codigo:
<INPUT NAME="codigo" id="codigo" SIZE="20" MAXLENGTH="30">
<INPUT TYPE="submit" NAME="accion" VALUE="Buscar">

</FORM>
</body>
</html>