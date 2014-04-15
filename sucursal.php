<?php
	$result = mysql_query("SELECT NomSuc, DirSuc, RucSuc, TelSuc, MailSuc FROM sucursal WHERE CodSuc=1001", $connect);
	$row = mysql_fetch_array($result);
	echo "<table>";
    echo "<tr><td align='right'><b>Nombre :</b></td><td>".$row["NomSuc"]."</td></tr>";
	echo "<tr><td align='right'><b>Direcci&oacute;n :</b></td><td>".$row["DirSuc"]."</td></tr>";
	echo "<tr><td align='right'><b>RUC :</b></td><td>".$row["RucSuc"]."</td></tr>";
	echo "<tr><td align='right'><b>Tel&eacute;fono :</b></td><td>".$row["TelSuc"]."</td></tr>";
	echo "<tr><td align='right'><b>E - MAIL :</b></td><td>".$row["MailSuc"]."</td></tr>";
    echo "</table>";	
	mysql_free_result($result);
?>