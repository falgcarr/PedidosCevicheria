<?php
$total=0;
$tarjeta=0;
$efectivo=0;
function mostrarVentasDia(){
	
	if ($_POST['inicio']<=$_POST['fin']){
		include 'conecta.php';
		$result=mysql_query("SELECT NumRec, FecRec, TipoRec, TipoPag, DesRec, TotalRec 
							FROM recibo 
							WHERE FecRec BETWEEN '".$_POST['inicio']."' AND '".$_POST['fin']."'" ,$conexion);
		echo "<br/>";
		echo "Resultado de las ventas entre el ".$_POST['inicio']." y el ".$_POST['fin'];
		echo "<br/>";
		while($reg = mysql_fetch_array($result))
		{
			global $total,$tarjeta,$efectivo;
			printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td></tr>",
			$reg["NumRec"],$reg["FecRec"],$reg["TipoRec"],$reg["TipoPag"],$reg["DesRec"],$reg["TotalRec"]);
			$total=$total+$reg["TotalRec"];
			if ($reg["TipoPag"]=='T'){
				$tarjeta=$tarjeta+$reg["TotalRec"];
			}
			else {
				$efectivo=$efectivo+$reg["TotalRec"];
			}
		}
	
		mysql_free_result($result);
	}
	else {
		echo "<br/>";
		echo "Seleccione fechas validas";
		echo "<br/>";
		
	}
}

function mostrarVentasMozo(){
	if ($_POST['inicio']<=$_POST['fin']){
		include 'conecta.php';
		$result=mysql_query("SELECT CodPer, NomPer, COUNT(CodPer) AS Numero , SUM(TotalRec) AS Total 
							FROM recibo  NATURAL JOIN personal 
							WHERE FecRec BETWEEN '".$_POST['inicio']."' AND '".$_POST['fin']."' 
							GROUP BY CodPer ORDER BY Numero DESC" ,$conexion);
		echo "<br/>";
		echo "Resultado de las ventas del Personal entre el ".$_POST['inicio']." y el ".$_POST['fin'];
		while($reg = mysql_fetch_array($result))
		{
			printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td></tr>",
			$reg["CodPer"],$reg["NomPer"],$reg["Numero"],$reg["Total"]);
			
		}
		mysql_free_result($result);
	}
	else {
		echo "<br/>";
		echo "Seleccione fechas validas";
		echo "<br/>";
		
	}
}



?>