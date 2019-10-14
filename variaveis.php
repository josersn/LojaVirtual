<?php
function beJson() {
    return "josé";
}
$nomeArquivo = "produtos.json";
$produtos = json_decode(file_get_contents($nomeArquivo), true);

        $title = "Fruit Phones";
        $user = [
            "name"  => "José Ramos",
            "email" => "nettorammos@hotmail.com",
        ];
        $categorias = [
            "Celulares",
            "Acessorios",
            "Assistencia Técnica",
        ];



        // $produtos = [
        //     [
        //     "nome" => "Iphone XR",
        //     "price" => 4000, "img" =>
        //     "img/iphone_xr.jpg",
        //     "quantidade" => 5,
        //     "descricao"=> "none",
        //     "categoria" => "Celulares"
        //         ],
        //     ["nome" => "Iphone X", "price" => 3300, "img" => "img/iphone_xr.jpg", "quantidade" => 5,"descricao"=> "none", "categoria" => "Celulares"],
        //     ["nome" => "Iphone 7 ", "price" => 2600, "img" => "img/iphone-7.jpg", "quantidade" => 5,"descricao"=> "none", "categoria" => "Celulares"],
        // ];
    ?>
    