<!DOCTYPE html>
<head>

	<style>
		
		#retornar{
			color: white;
            font-family: sans-serif
		}

        body{
            text-align: center;
            background:blue;
            color: white;
        }


	</style>

</head>

<body>
<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

echo "<h1>".$nome. " | CPF do usuário: ".$cpf. "<br></h2>";

	function isCpf($cpf){
		$cpf = preg_replace('/[^0-9]/','',$cpf); // pegando somente os numeros do cpf 

		$dig1 = 0;
		$dig2 = 0;

		$limite=strlen($cpf);
		if ($limite<11 || $limite>14)
		{
			return false;
			echo "<h1>Quantidades de digitos do CPF inválida!</h1>";
		}

		for ($i=0, $x=10; $i<=8;$i++,$x--){
			$dig1 += $cpf[$i] * $x;
		}

		for ($i=0, $x=11; $i<=9; $i++, $x--){
			if (str_repeat($i, 11) == $cpf){
				return false;
				echo " <br>CPF inválido. Digitos todos iguais!";
				break;
			}

			$dig2 += $cpf[$i] * $x;
		}

		$calculo1 = (($dig1%11)<2) ? 0 : 11-($dig1%11);
		$calculo2 = (($dig2%11)<2) ? 0 : 11-($dig2%11);

		if ($calculo1 <> $cpf[9] || $calculo2 <> $cpf[10]){

			return false;
		}
			return true;
	}

	

	if (isCpf($cpf)){

		include("C:/xampp/htdocs/POO2021_4termo/simuemp/simulador.php");
	
	}else{
		echo "<h2>Tente novamente. Revise o CPF inserido</h2>";
	}

?>
</body>
<html>
<br><br>

<a id="retornar" href = "/POO2021_4termo/simuemp/index.html"> <h2>Retornar</h2></a>

</html>
