<!DOCTYPE html>
<?php
        $title = "Fruit Phones";
        $user = [
            "name"  => "José Ramos",
            "email" => "nettorammos@hotmail.com",
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
            <h1 class="h5 me-3"><?php echo $title ?></h1>
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
            <div class="col-lg-3 card col-md-3 d-flex justify-content-flex text-center">
                <div class="card-body">
                <div class="card-title text-center font-weight-bold">Iphone 11</div>
                <img src="img/iphone_xr.jpg"  class="img-fluid" alt="">
                <div class="card-text text-center mt-2 font-weight-bold"> R$ 4.300</div>
                <a href="#" class="btn btn-primary mt-3 me-5">Comprar</a>
                </div>
            </div>

            <div class="col-lg-3 card col-md-3 d-flex justify-content-flex text-center">
                <div class="card-body">
                <div class="card-title text-center font-weight-bold">Iphone 11</div>
                <img src="img/iphone_xr.jpg"  class="img-fluid" alt="">
                <div class="card-text text-center mt-2 font-weight-bold"> R$ 4.300</div>
                <a href="#" class="btn btn-primary mt-3 me-5">Comprar</a>
                </div>
            </div>

            <div class="col-lg-3 card col-md-3 d-flex justify-content-flex text-center">
                <div class="card-body">
                <div class="card-title text-center font-weight-bold">Iphone 11</div>
                <img src="img/iphone_xr.jpg"  class="img-fluid" alt="">
                <div class="card-text text-center mt-2 font-weight-bold"> R$ 4.300</div>
                <a href="#" class="btn btn-primary mt-3 me-5">Comprar</a>
                </div>
            </div>

          
        </div>
    </section>
    </main>

</body>
</html>