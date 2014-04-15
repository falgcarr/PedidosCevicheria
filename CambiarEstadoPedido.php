<?php

$concc=mysql_connect("localhost", "DSproy", "DSproy") or die(mysql_error());
mysql_select_db("puntoblanco") or die(mysql_error());


// Recibimos la variable Cedula pasada mediante el metodo GET
// y depositamos el valor de esta en la variable llamada $Cedula

$CodigoComanda=$_GET['NumCom'];
$CodigoPlato=$_GET['CodPro'];
$CantidadPlatos=$_GET['Cant'];




//echo $numplatos;
$querya="UPDATE `puntoblanco`.`detallecomanda` SET `estadoComanda`='S' WHERE `detallecomanda`.`NumCom`='".$CodigoComanda."' AND `detallecomanda`.`CodPro`='".$CodigoPlato."' ";
$result=mysql_query($querya) or die("Error: ".mysql_error());

//echo "Se ha eliminado un plato".$CodigoPlato." de la comanda con NumCom ".$CodigoComanda."quedando".$numplatos."platos";


?>
