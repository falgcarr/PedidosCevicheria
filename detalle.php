<?php

	$result = mysql_query("select p.NomPro, dr.Cant, p.PrecioPro from (producto as p inner join detallerecibo as dr on p.CodPro=dr.CodPro) inner join recibo as r on r.NumRec=dr.NumRec where r.FecRec='2013-12-15' and r.NomClie='Juan Torres'", $connect);
	
	$cont=1;
	$total=0;
	while($row = mysql_fetch_array($result))
	{
		echo "<tr><td>".$cont."</td>";
		echo "<td>".$row["NomPro"]."</td>";
		echo "<td>".$row["Cant"]."</td>";
		echo "<td>".$row["PrecioPro"]."</td>";
		echo "<td>".$row["Cant"]*$row["PrecioPro"]."</td></tr>";
		$cont=$cont+1;
		$total=$total+$row["Cant"]*$row["PrecioPro"];
	}	
	mysql_free_result($result);
	

?>