<?php
require_once("variaveis.php");
$usuario = ["email" => "nettorammos@hotmail.com", "senha" => '$2y$10$TZ.o9dPnSCFApJ/DqfwTweojSEeFEa0xBYhH.tEkO4F4OnFUuLUSi', 'user' => "José Ramos"];
$erros = [];
if($_POST){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($email == $usuario["email"]){
        
        if(password_verify($senha, $usuario["senha"])){
            session_start();
            $_SESSION["logado"] = true;
            $_SESSION["usuario"] = ["nome" => "José Ramos"];
            header('Location: index.php');
        }else{
            $erros = ["Senha Errada"];
        }
    }else{
        $erros = ["E-mail não confere no banco de dados"];
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $title . " Login"?></title>
</head>
<body>
    <?php require_once("header.php")?>
    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="card p-5">
            <?php
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo $erro;
                }
            }
            ?>
            <div class="form-group">
                <label for="email"> Email :</label>            
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="senha"> Senha :</label>            
                <input type="password" name="senha" id="senha" class="form-control" required>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="btn-entrar">Entrar</button>
            </div>
        </form>
    </main>
</body>
</html>