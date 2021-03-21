<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo!</title>
</head>
<body>
    <form action="index.php" method="get">
    <p>Escreva o número secreto aqui > <input type="text" name="num" id="Um número aqui">
    <input type="submit" value="Enviar"></p>
    
</form>

<?php 

$número = @$_GET['num'];
$certo = 5;

if ($número == $certo) { 
    echo "Parabéns você acertou o número secreto!";
} elseif ($número != $certo) { 
    echo "Você não acertou o número secreto"; 
}




?>


</body>
</html>