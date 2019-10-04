<!DOCTYPE html>
<?php

        $title = "Fruit Phones";
        $user = [
            "name"  => "José Ramos",
            "email" => "nettorammos@hotmail.com",
        ];
      
        $categorias = [
            "Celulares",
            "Acessorios",
            "Assistencia Técnica",
        ]
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
        <section></section>
    </main>

</body>

 
</html>
