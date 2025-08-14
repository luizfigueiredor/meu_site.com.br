<?php
    $frutas = [
        "Maçã",
        "Pera",
        "Morango",
        "Banana",
        "Limão",
        "Laranja"
    ];
    //echo $frutas[0]."<br>"; //Maçã
    
    for($i = 0; $i < count ($frutas); $i ++){
        $y=$i+1;
    echo "Fruta $y: $frutas[$i]<br>";
}
?>