<!DOCTYPE html>
<?php

        $title = "Fruit Phones";
        $user = [
            "name"  => "José Ramos",
            "email" => "nettorammos@hotmail.com",
        ];
        $produtos = [
            ["nome" => "Iphone 8", "price" => 3000],
            ["nome" => "Iphone 8 Plus", "price" => 3300],
            ["nome" => "Iphone 7  Plus", "price" => 2600],
        ];
    ?>
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
    <header class="bg-light navbar">
            <h1 class="h5 text-dark"><?php echo $title ?></h1>
            <nav>
                <ul class="nav"> 
                <?php 
                if(isset($user) && $user != []){                
                ?>
                <li class="nav-item p-3"><a href="" class="link-item text-dark">Cursos</a></li>
                <li class="nav-item p-3"><a href="" class="link-item text-dark">Olá <?php echo $user["name"];?></a></li>
                <?php }else {?>
                <li class="nav-item p-3"><a href="" class="link-item text-dark">Login</a></li>
                <li class="nav-item p-3"><a href="" class="link-item text-dark">Cadastro</a></li>
                <?php }?> 
                </ul>
            </nav>
</header>
    <main>
    <section class="container mt-4">
        <div class="row justify-content-around">

        <?php foreach($produtos as $produto ) { ?>
            <div class="col-lg-3 card col-md-3 d-flex justify-content-flex text-center">
                <div class="card-body">
                <div class="card-title text-center font-weight-bold"><?php  echo $produto["nome"] ?></div>
                <img src="img/iphone_xr.jpg"  class="img-fluid" alt="">
                <div class="card-text text-center mt-2 font-weight-bold"> R$ <?php  echo $produto["price"] ?> Reais</div>
                <a href="#" class="btn btn-primary mt-3 me-5">Comprar</a>
                </div>
            </div>
        <?php } ?>
        </div>
    </section>
    </main>

</body>
</html>