<?php 
    //Esta é uma função
    //Inicio da função saudação
    
    function saudacao($nome) {
    return "Olá, $nome!";
    }
    // fim da função saudação

    echo saudacao("Maria");
    //Definição da função
function nomeDaFuncao($parametro1, $parametro2) {
    //Código que será executado
    $resultado = $parametro1 + $parametro2;
    return $resultado; //retorna um valor
    }
    //chamando função
    $soma = nomeDaFuncao(5,10);
    echo " O resultado é: " . $soma;
?>