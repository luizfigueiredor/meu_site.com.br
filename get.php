<?php
    
    $valor1 =  $_GET['valor1'];
    $valor2 =  $_GET['valor2'];
    $sinal =  $_GET['sinal'];
    $resultado = $valor1.$sinal.$valor2;
    
    $resultado= $valor1.$sinal.$valor2;
    echo $resultado;
    if($sinal == "*"){
    echo "<br> $valor1 * $valor2";
    }
    if($sinal == "+"){ //%2b
    echo "<br> $valor1 + $valor2";
    }
    if($sinal == "-"){
    echo "<br> $valor1 - $valor2";
    }
    if($sinal == "/"){
    echo "<br> $valor1 / $valor2";
    }

    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $sinal  = $_GET['sinal'];


//meu_site.com.br/get.php?valor1=15&valor2=33&sinal=+

?>

