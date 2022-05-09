<?php
    $a = 'Breno';
    $b = 18;

    if($b >= 18){
        echo "$a é maior de idade perante a lei brasileira.<br>";
    } else {
        echo "$a é menor de idade perante a lei brasileira.<br>";
    }

    switch ($b) {
        case 17:
            echo "A idade de $a é: 17.<br>";
            break;
        
        default:
            echo "Idade indefinida.<br>";
            break;
    }
?>
