<?php

$Val1 = $_POST['valor1'];
$Val2 = $_POST['valor2'];
$tipo = $_POST['tipo'];


    switch($tipo)

    {
        case 'Somar' : $resultado = $Val1 + $Val2; break;
        case 'Subtrair' : $resultado = $Val1 - $Val2; break;
        case 'Multiplicação' : $resultado = $Val1 * $Val2; break;
        case 'Divisão' : $resultado = $Val1 / $Val2; break;
    }

    echo $resultado;



?>
