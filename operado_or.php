<?php 
    $feriado = false;
    $fim_de_semana = true;

    if($feriado || $fim_de_semana) {
        echo "Pode descansar. ";
    } else {
        echo "Dia útil de trabalho. ";
    }
    ?>