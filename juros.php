<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>

        h1{
            color: blue;
            font-family: sans-serif
        }

    </style>
    <meta charset="UTF-8">
    <title>Simulador</title>
</head>
<body>
<?php
$capital = $_POST['valor'];
$parc =$_POST['parc'];


if($parc == 0){ 
    $parc = 1;
}
$tx  = (3.5/100);
$m = 0;
$valpar = 0;
if($capital == 'Clique e escolha'){
    echo "<h1>Opção inválida. Favor, selecione uma opção válida! </h1>";
    include("C:/xampp/htdocs/POO2021_4termo/simuemp/simulador.php");
    }
    else{ 
        // calculo do montante M= C *(1+tx)**Parc.
$m = ($capital*((1+$tx)**$parc));
$valpar = $m/$parc;
$tx=($tx*100);

$resultvalor = number_format($m, 2);
$resultpar = number_format($valpar, 2);
//Resumo da Simulação
echo "<h1>Empréstimo:</h1><br>";
echo "<b>Total R$ :</b>".$resultvalor."<br><br>";
echo "<b>Valor da(s) parcela(s) : </b>".$resultpar;
echo "<br><br>Taxa de serviço : ".$tx."<br><br>";
    }
?>
</body>



</html>