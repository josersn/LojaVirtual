<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "José";
        $idade = 18;
        $sobrenome = "Ramos";
        $mochila = [
            "Óculos",
            "Estojo",
            "Caderno"
            
        ];
        $cliente = [
            "nome" => "Julia",
            "sobrenome" => "Soares",
            "idade" => "123",
            "saldo" => "-870"

        ];


         var_dump( $mochila) ;
         echo $cliente["saldo"];
    ?>

</body>
</html>