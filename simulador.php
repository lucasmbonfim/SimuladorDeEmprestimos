<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
      
        #x{
            color: white;
            font-family: sans-serif
        }
        #botao{
            width: 150px;
            color: blue;
            background-color: white;
        }
        #botao:hover{
            cursor: pointer;
            box-shadow: 2px 2px 5px white;
        }
        body{
            text-align: center;
            background:blue;
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <title>Simulador</title>
</head>
<body>
    <h2>Simulador</h2>
    
<form method="POST" action="juros.php">
    <label for="emprestimo">Valor do empréstimo:</label>
    <input type="text" name="emprestimo" min="1" required>   
    <br>
    <br>
    <input id="botao" type="submit" value="Simular" >
    <br>
    <input id="botao" type="reset" value="Limpar">
    <br>
    <p id="x"> * Taxa de 3,5% a.m. </p>
    <p id="x"> * Valores acima de R$ 5000 sujeito a analise presencial de documentos. </p>
    <p id="x"> * Credito sujeito a alteração sem aviso prévio. </p>
</form>
</body>
</html>
