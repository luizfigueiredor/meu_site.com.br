<?php
if(isset($_POST['nota'])){
    $nota = floatval($_POST['nota']);
}
if ($nota >= 7){
echo"Você está aprovado";
}
elseif ($nota >= 5 && $nota< 7){
echo"Você está de recuperação";
}else {
    echo"Você está reprovado";
}
?>