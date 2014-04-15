<?php
	include_once("header.php");
?>

<table width=100%>
<tr>
	<td align="right">
		<?php
				include_once("cliente.php");
		?>
	</td>
	<td align="right">
		<?php
			include_once("sucursal.php");
		?>
	</td>
</tr>

<tr>
	<td colspan="2">
		<b>Factura Nro:</b> <?php echo "12456";?> <br>
		<b>Fecha de la factura:</b> <?php echo "30/11/2012";?> <br>
		<b>Fecha de la vencimiento:</b><?php echo "29/12/2012";?> <br>
	</td>	
</tr>
<tr>
	<td colspan="2">
		<table align="center" class="table table-condensed">
		<tr>
			<td>
				<b>Num.</b>
			</td>
			<td>
				<b>Descripci&oacute;n</b>
			</td>
			<td>
				<b>Cost. Uni</b>
			</td>
			<td>
				<b>Cantidad</b>
			</td>
			<td>
				<b>Importe</b>
			</td>
		</tr>
		<?php
		include_once("detalle.php");
		?>
		<tr>
			<td align="right" colspan="4"><b>Sub Total:</b></td><td><?php echo $total; ?></td>			
		</tr>
		<tr>
			<td align="right" colspan="4"><b>18.00 % IGV:</b></td><td><?php echo $total*0.18;?></td>
		</tr>
		<tr>
			<td align="right" colspan="4"><b>Total:</b></td><td><?php echo $total+ $total*0.18; ?></td>
		</tr>
		</table>
		<div align="center">
		<form name="categorias" action="imprimir.php" method="post">
			<button type="submit" class="btn btn-success">Imprimir Factura </button>
    	</form>
		</div>
	</td>	
</tr>
</table>

