<?php 
   include("variaveis.php");
   function cadastroProduto ($nome, $descricao, $img, $price) {
       $nomeArquivo = "produtos.json";
       
       if(file_exists($nomeArquivo)){
           //essa função devolve um objeto, adicionando true ele devolve um array.
           $produtos = json_decode(file_get_contents($nomeArquivo), true);
           $produtos[] = [
                "nome" => $nome,
                "descricao"=> $descricao,
                "img"=> $img,
                "price"=> $price,
            ];
            $certo = file_put_contents($nomeArquivo, json_encode($produtos));
            if($certo){
                return "<h2 class='h3 text-center'>Produto Cadastrado</h2>";
            }else{
                return "Produto não Cadastrado";
            }
       }else{
           $produtos = [];
        //    array_push() mais custoso do que ação abaixo;
        $produtos[] = [
            "nome" => $nome,
            "descricao"=> $descricao,
            "img"=> $img,
            "price"=> $price,
        ];
        $json = json_encode($produtos);
        // FILE_APPEND 
        $certo = file_put_contents($nomeArquivo, $json);
        if($certo){
            return "Produto Cadastrado";
        }else{
            return "Produto não Cadastrado";
        }
       }
   }
   if($_POST){
    $nomeImg = $_FILES["img"]["name"];
    $nomeImgTmp = $_FILES["img"]["tmp_name"];
    $nomeImgPath = "img/". $nomeImg;
    $certo = move_uploaded_file($nomeImgTmp, $nomeImgPath);

    echo cadastroProduto($_POST["nome"], $_POST["descricao"], $nomeImgPath, $_POST["price"]);
   };
   
?>

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
<body >
<?php include("header.php") ?>
<main class="container mt-3" >
<div class="row">
 <div class="col-md-8 col-lg-8 ">
     <h2 class="h3">
         Todos os Produtos
     </h2>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">categoria</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
       <?php
        foreach($produtos as $produto){ ?>
    <tr>
        <td> <?php   echo $produto["nome"];?> </td>
        <td> <?php   echo $produto["descricao"];?> </td>
        <td> <?php   echo $produto["price"];?> </td>
    </tr>
           <?php
        }
      ?> 
  </tbody>
</table>
 </div>
 <div class="col-md-4 col-lg-4">
     <h2 class="h3">Cadastrar Produto</h2>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
         <label for="nome">Nome:</label>
         <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Produto">
     </div>
     <div class="form-group">
         <label for="categoria">Categorias:</label>
         <select class="form-control" id="categoria">
            <?php
                foreach($categorias as $categoria) {
                    ?>
                    <option><?php echo $categoria ?></option>
      
                    <?php
                }
            ?>
        </select>
     </div>
     <div class="form-group">
         <label for="descricao">Descrição:</label>
         <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição do Produto" >
     </div>
     <div class="form-group">
         <label for="price">Preço:</label>
         <input type="text" name="price" id="price" class="form-control" placeholder="Preço do Produto">
     </div>
     <div class="form-group">
         <label for="img">Foto do Produto:</label>
         <input type="file" name="img" id="img" class="form-control" >
     </div>
     <button type="submit" class="btn btn-success">Cadastrar Produto</button>
     </form>
 </div>
</div>
</main>
</body>
</html>