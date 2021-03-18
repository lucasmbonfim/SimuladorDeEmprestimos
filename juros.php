<!DOCTYPE html>
<html lang="pt-br">
<head>
	<style>

		body{
			text-align: center;
			background:blue;
			color: white;
		}
		td{
			text-align: center;
			width:200px;
		}

	</style>
	<meta charset="UTF-8">
	<title>Simulador</title>
</head>
<body>
	<?php

	$valor = $_POST['emprestimo'];

	echo"<center><table border='1'>";
	echo "<tr>";
	echo "<td>Parcela";
	echo "</td>";
	echo "<td>Valor";
	echo "</td>";
	echo "<td>Montante";
	echo "</td>";
	echo "<td>Taxa";
	echo "</td>";
	echo "</tr>";
	for($i=2;$i<=24;$i++){  

		$m=$valor*(1+0.0164)**$i;
		$m= number_format($m, 2, '.', '');
		$valorp=$m/$i;
		$valorp = number_format($valorp, 2, '.','');

		echo "<center><table border='1'>";     
		echo "<tr>";

		echo "<td>";
		echo " ".$i;           
		echo "</td>";

		echo "<td>";
		echo " R$ ".$valorp;
		echo "</td>";

		echo "<td>";
		echo " ".$m;
		echo "</td>"; 

		echo "<td>";
		echo "1,64%";
		echo "</td>";

		echo "</tr>";  
		echo "</table></center>"; 
	}   
	for($i=24;$i<=60;$i++){  

		$m=$valor*(1+0.0256)**$i;
		$m= number_format($m, 2, '.', '');
		$valorp=$m/$i;
		$valorp = number_format($valorp, 2, '.','');

		echo "<center><table border='1'>";     
		echo "<tr>";

		echo "<td>";
		echo " ".$i;           
		echo "</td>";

		echo "<td>";
		echo " R$ ".$valorp;
		echo "</td>";

		echo "<td>";
		echo " ".$m;
		echo "</td>"; 

		echo "<td>";
		echo "2,56%";
		echo "</td>";

		echo "</tr>"; 

		echo "</table></center>"; 
	} 
	echo "</table></center>";

	?>
</body>



</html>
