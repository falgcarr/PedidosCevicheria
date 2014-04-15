<?php

$concc=mysql_connect("localhost", "DSproy", "DSproy") or die(mysql_error());
mysql_select_db("puntoblanco") or die(mysql_error());


// Recibimos la variable Cedula pasada mediante el metodo GET
// y depositamos el valor de esta en la variable llamada $Cedula

$LoQueBorra=$_GET['NumCom'];
$query="SELECT NumCom FROM comanda WHERE NumCom='".$LoQueBorra."'";
$result=mysql_query($query) or die("Error: ".mysql_error());

// Verificamos con la consulta SELECT si existe un registro asociado al número
// recibido concretamos la consulta DELETE, sino avisamos que fué imposible realizarla

if(mysql_num_rows($result) > 0){
	$query="DELETE FROM comanda WHERE NumCom='".$LoQueBorra."'";
	$result=mysql_query($query) or die("Error: ".mysql_error());
	echo "Se ha eliminado la comanda con NumCom ".$LoQueBorra;
}else{
	echo "No fué posible eliminar la comanda con NumCom ".$LoQueBorra;
}
// Cerramos la conexión

 
?>