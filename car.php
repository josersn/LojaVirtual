<!DOCTYPE html>
<?php require('config/variaveis.php')?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    <?php echo $title ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
   <?php require("header.php"); ?>
<div class="row justify-content-center bg-primary   ">
             <nav>
                 <ul class="nav">
                    <?php if(isset($categorias) && $categorias != []) {?>
                        <?php for( $i = 0; $i < count($categorias); $i++) { ?>
                            <li class="nav-item">
                                <a href="#" class="link-item p-4 text-white">
                                    <?php echo $categorias[$i] ?>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } else { ?>
                        <h3 class="h3 text-center">
                            Não há categorias
                        </h3>
                    <?php } ?>
                </ul>
             </nav>
</div>
    <main>
        <section class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <h1 class="h3">Carrinho de compras</h1>
                </div>
                <div class="col-12">
                    <div class="row card ">
                        <div class="col-12">
                            <h2 class="h3">Você está comprando  <?php echo $_GET["nomeProduto"] ?></h2>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form method="post" action="sucess.php" class="d-flex flex-column p-3">
                                <input type="text" name="nome_completo" placeholder="Insira Nome Completo"/>
                                <input type="text" name="cpf" placeholder="Insira CPF"/>
                                <input type="number" name="cartao" placeholder="Insira Cartão"/>
                                <input type="date" name="validade_cartao" placeholder="MM/AAAA"/>
                                <input type="number" name="codigo_cartao" placeholder="Insira código de cartao"/>
                                <button type="submit" class="btn btn-success">Finalizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
