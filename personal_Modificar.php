<?php
include 'conecta.php';
//$link=Conectarse();
$sql="UPDATE personal SET CodPer='".$_POST['codigo']."',
NomPer='".$_POST['nombre']."', TelPer='".$_POST['telefono']."', DniPer='".$_POST['dni']."',
CargoPer='".$_POST['cargo']."', ComPer= '".$_POST['comentario']."' WHERE CodPer='".$_POST['codigo']."'";

/*$sql = "INSERT INTO personal VALUES  (null,'".$_POST['codigo']."','".$_POST['nombre']."','"
.$_POST['telefono']."','".$_POST['dni']."','".$_POST['cargo']."','".$_POST['comentario']."')";
*/
echo "<center><font color='RED'>DATOS MODIFICADOS CORRECTAMENTE</font><br></br><a
href='personal_Insertar.php'>Volver</a>";
mysql_query($sql,$connect);
?>