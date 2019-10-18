<?php
$nomeArquivo = __DIR__."/../produtos.json";
$usuario = ["email" => "nettorammos@hotmail.com", "senha" => '$2y$10$TZ.o9dPnSCFApJ/DqfwTweojSEeFEa0xBYhH.tEkO4F4OnFUuLUSi', 'user' => "José Ramos"];

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
    