<html>
<body>
<?php
include 'conecta.php';
//$link=Conectarse();
//$sql="select * from personal where NomPer like '%$nombre%'";
//$nombre = isset($_POST['nombre']);

$sql="select * from personal where CodPer = '".$_POST['codigo']."'";
/*
$sql = "INSERT INTO personal VALUES  (null,'".$_POST['codigo']."','".$_POST['nombre']."','"
.$_POST['telefono']."','".$_POST['dni']."','".$_POST['cargo']."','".$_POST['comentario']."')";
*/
$result=mysql_query($sql,$connect);
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

<form name="form1" method="post" action="personal_Modificar.php">
<INPUT TYPE="submit" NAME="accion" VALUE="Modificar">
<?php
while($reg = mysql_fetch_array($result))
{
printf("<tr><td><INPUT TYPE='text' NAME='codigo' SIZE='20'
MAXLENGTH='30' value='%s'></td><td>&nbsp;<INPUT TYPE='text'
NAME='nombre' SIZE='20' MAXLENGTH='30'
value='%s'>&nbsp;</td><td>&nbsp;<INPUT TYPE='text'
NAME='telefono' SIZE='20' MAXLENGTH='30'
value='%s'>&nbsp;</td><td>&nbsp;<INPUT TYPE='text'
NAME='dni' SIZE='20' MAXLENGTH='30'
value='%s'>&nbsp;</td><td>&nbsp;<INPUT TYPE='text'
NAME='cargo' SIZE='20' MAXLENGTH='30'
value='%s'>&nbsp;</td><td>&nbsp;<INPUT TYPE='text'
NAME='comentario' SIZE='20' MAXLENGTH='30'
value='%s'>&nbsp;</td></tr>",
$reg["CodPer"],$reg["NomPer"],$reg["TelPer"],$reg["DniPer"],$reg["CargoPer"],$reg["ComPer"]);
}
mysql_free_result($result);
?>

</body>
</html>