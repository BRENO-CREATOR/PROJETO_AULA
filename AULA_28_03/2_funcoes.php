<?php 
    //função sem retorno e sem parametro
    function contar1()
    {
        echo 'Breno <br>'; 
    }

    //função com paramentro e sem retorno
    function contar2($j){
        for ($i=0; $i < $j; $i++) { 
            echo $i . " ";
        }
        echo '<br>';
    }

    //functon com paramentros e com retorno
    function contar3($j,$k){
        return $j+$k;
    }

    echo contar1();
    contar2(5);
    echo contar3(7,8);
?>