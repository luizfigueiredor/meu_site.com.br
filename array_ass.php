<?php
    $pessoa = ["nome"=> "João", "idade" => 30];
    echo $pessoa["nome"];

?>
<p> Olá aqui é um HTML </p>
<?php

    $idade = 16;
    $ano_atual = date('Y'); // ano atual completo
    $aluno = ["Nome" => "Marcelo", "Idade" => 16, "Nota" => 100];

    echo "Olá " . $aluno["Nome"] . 
         ", você tem " . $aluno["Idade"] . 
         " anos e sua nota é " . $aluno["Nota"] . ".<br>";

    echo "Você nasceu no ano de " . ($ano_atual - $idade) . ".<br>"; 

    echo "Hoje é " . date("d-m-Y") . "<br>";

    echo "Hoje, " . date("d") . " é dia  Dia Mundial do Engenheiro. <br>";
    date_default_timezone_set("America/Sao_Paulo"); 
    echo "São exatamente " . date("H:i:s");
?>

