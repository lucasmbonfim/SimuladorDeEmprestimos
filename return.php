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

<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

echo "<h1>".$nome. " <br>CPF do usuário: ".$cpf. "<br></h2>";

	function isCpf($cpf){
		$cpf = preg_replace('/[^0-9]/','',$cpf); // pegando somente os numeros do cpf 

		$dig1 = 0;
		$dig2 = 0;

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
		echo " Tente novamente. Revise o CPF inserido";
	}

/*
Para validar o CPF
Considere uma string de 11 caracteres para armazenar sem pontos ou traço, apenas números.
A verificação do CPF está em calcular os dois dígitos de controle e comparar com os digitados, se os dois calculados forem iguais aos dois digitados, o CPF digitado é válido, caso contrário, o CPF é inválido.
Cálculo do 1º dígito: Soma os 9 primeiros números do CPF multiplicados de 1 a 9 e calcula-se o resto desta soma por 11. Se o resto for igual a 10, então o dígito é 0.
Cálculo do 2º dígito: Soma os 9 primeiros números do CPF multiplicados de 9 a 1 e calcula-se o resto desta soma por 11. Se o resto for igual a 10, então o dígito é 0.
Após o cálculo, compara-se com as respectivas posições da string e informe se o CPF é válido ou inválido.
Colocar um link para voltar para nova simulação.
*/


?>
<html>
<br><br>

<a id="retornar" href = "/POO2021_4termo/simuemp/index.html"> <h2>Retornar</h2></a>

</html>
