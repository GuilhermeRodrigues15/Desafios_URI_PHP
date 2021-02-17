<?php
    $raio = fgets(STDIN);
    $pi = 3.14159;

    $area = pow($raio, 2) * $pi;

    printf("A=%.4f\n", $area);
?>