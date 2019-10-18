<?php require_once('config/variaveis.php') ?>
<header class="bg-light navbar">
            <h1 class="h5 text-dark">
            <a href="index.php" class="text-dark text-decoration-none">
            <?php echo $title ?>
            </a>
            </h1>
            <nav>
                <ul class="nav"> 
                <?php 
                if(isset($user) && $user != []){                
                ?>
                <li class="nav-item p-3"><a href="" class="link-item text-dark">Cursos</a></li>
                <li class="nav-item p-3"><a href="" class="link-item text-dark">Olá <?php echo $user;?></a></li>
                <li class="nav-item p-3"> <a href="sair.php" class="link-item text-dark">Sair</a></li>
                <?php }else {?>
                <li class="nav-item p-3"><a href="login.php" class="link-item text-dark">Login</a></li>
                <li class="nav-item p-3"><a href="" class="link-item text-dark">Cadastro</a></li>
                <?php }?> 
                </ul>
            </nav>
</header>