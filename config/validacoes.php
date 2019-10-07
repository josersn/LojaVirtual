<?php  
$erros = [];
    function validation($area){
        global $erros;
        if( strlen($area) == 0 ){
            array_push($erros, "Preencha o nome corretamente");
        }
    }

    // cpf = 11
    // cartao = 16
?>