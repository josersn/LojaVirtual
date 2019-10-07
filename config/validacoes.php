<?php  
$erros = [];
    function validation_nome($nome){
        global $erros;
        if( strlen($nome) == 0 ){
            array_push($erros, "Preencha o nome corretamente");
        }
    }
    function validation_cpf($cpf){
        global $erros;
        if(strlen($cpf) != 11){
            array_push($erros, "Preencha o CPF corretamente");
        }
    }

    $teste = 123456789;

    // cpf = 11
    // cartao = 16
?>