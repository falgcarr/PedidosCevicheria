<?php
include 'conecta.php';

$sql="DELETE personal WHERE CodPer='".$_POST['codigo']."'";

echo "<center><font color='RED'>DATOS ELIMINADOS CORRECTAMENTE</font><br></br><a
href='personal_Insertar.php'>Volver</a>";
mysql_query($sql,$connect);
?>