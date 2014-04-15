<html>
<body>

<?php
if ($_POST['nombre']!="" AND $_POST['dni']!="" AND $_POST['password']!=""){
	include 'conecta.php';

	$sql = "INSERT INTO personal (ClaPer,NomPer,TelPer,DniPer,CargoPer,ComPer) VALUES  ('".$_POST['password']."','".$_POST['nombre']."','"
	.$_POST['telefono']."','".$_POST['dni']."','".$_POST["cargo"]."','".$_POST['comentario']."')";				

	$result = mysql_query($sql);

	if (! $result){
		echo "La consulta SQL contiene errores.".mysql_error();
		exit();

	}
	else {
		echo "<center><font color='RED'>DATOS INSERTADOS CORRECTAMENTE</font><br></br><a
		href='personal_Insertar.php'>Volver</a>";
	}
}

else {
		echo "<center><font color='RED'>LLENE LOS CAMPOS OBLIGATORIOS</font><br></br><a
		href='personal_Insertar.php'>Volver</a>";
}
?>

</body>
</html>