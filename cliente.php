<?php
		$Tipo=$_REQUEST["Tipo"];
		$result = mysql_query("SELECT ruc,nombrecliente, direccion FROM cliente WHERE codcli=1", $connect);
		$row = mysql_fetch_array($result);
		if($Tipo=="E"){
			if($row!=null){
				echo "<table>";
				echo "<tr><td align='right'><b>Nombre :</b></td><td>".$row["nombrecliente"]."</td></tr>";
				echo "<tr><td align='right'><b>Direcci&oacute;n :</b></td><td>".$row["direccion"]."</td></tr>";
				echo "<tr><td align='right'><b>RUC :</b></td><td>".$row["ruc"]."</td></tr>";
				echo "</table>";
			}
		}
		if($Tipo=="C"){
			if($row!=null){
				echo "<table>";
				echo "<tr><td align='right'><b>Nombre :</b></td><td>".$row["nombrecliente"]."</td></tr>";
				echo "<tr><td align='right'><b>Direcci&oacute;n :</b></td><td>".$row["direccion"]."</td></tr>";
				echo "</table>";
			}
		}
		mysql_free_result($result);
?>