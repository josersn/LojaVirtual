<!DOCTYPE html>
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
    <?php require "header.php" ?>
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
    <section class="container mt-4">
        <div class="row justify-content-around">
        <?php if(isset($produtos) && $produtos != []) { ?>
        <?php foreach($produtos as $produto ) { ?>
            <div class="col-lg-3 card col-md-3 d-flex justify-content-flex text-center">
                <div class="card-body">
                <div class="card-title text-center font-weight-bold"><?php  echo $produto["nome"] ?></div>
                <img src= "<?php echo $produto["img"] ?>"   class="img-fluid" alt="">
                <div class="card-text text-center mt-2 font-weight-bold"> R$ <?php  echo $produto["price"] ?> Reais</div>
                <a href="car.php?nomeProduto=<?php echo $produto["nome"] ?> " class="btn btn-primary mt-3 me-5">Comprar</a>
                </div>
            </div>
        <?php } ?>
        <?php } else { ?>
            <h5 class="h1 text-danger">Não há produtos :( </h5>
        <?php } ?>
        </div>
    </section>
    </main>

</body>

 
</html>
