<?php 
    require_once "5_classes.php";

    $d = [1, 2, 3, 4];

    for ($i=0; $i < count($d); $i++) { 
        echo "$d[$i]<br>";
    }

    echo "<br>";

    foreach ($d as $value) {
        echo "$value <br>";
    }

    echo "<br>";

    $a = 0;

    while ($a <= 10) {
        echo $a . '<br>';
        $a++;
    }

    echo "<br>";
    $a--;

    do {
        echo $a . '<br>';
        $a--;
    } while ($a >= 0);
    

?>