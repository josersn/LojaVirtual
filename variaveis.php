<?php
$nomeArquivo = "produtos.json";
$produtos = json_decode(file_get_contents($nomeArquivo), true);
        session_start();
        $user = isset($_SESSION['nome']) ? $_SESSION["nome"] : [];
        $title = "Fruit Phones";
        $categorias = [
            "Celulares",
            "Acessorios",
            "Assistencia Técnica",
        ];
    ?>
    