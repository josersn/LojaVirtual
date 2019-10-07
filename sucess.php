<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
include("header.php");
include("config/validacoes.php");



$nome = $_POST["nome_completo"];
$cpf = $_POST["cpf"];
$cartao = $_POST["cartao"];

validation_nome($nome);
validation_cpf($cpf);

if(count($erros)==0){
    echo "Parabéns ". $nome ." compra com sucesso";
}else {
    foreach($erros as $erro){
        echo "<h2>$erro</h2>";
    }
}
?>
</body>
</html>

