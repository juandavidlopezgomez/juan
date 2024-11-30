<?php
function calcular($a, $b) {
    return ($a * $b) / calculartem($a, $b);
}

function calculartem($a, $b) {
    while ($b != 0) {
        $tiempo = $b;
        $b = $a % $b;
        $a = $tiempo;
    }
    return $a;
}

function calcularCoincidencia($tiempoA, $tiempoB, $vueltas) {

    $salida = calcular($tiempoA, $tiempoB);
    
 
    $vueltasA = $salida / $tiempoA;
    $vueltasB = $salida / $tiempoB;

    if ($vueltasA <= $vueltas && $vueltasB <= $vueltas) {
        echo "<p>Ambos corredores coincidirán en el punto de salida después de:</p>";
        echo "<p>Corredor A: " . $vueltasA . " vueltas.</p>";
        echo "<p>Corredor B: " . $vueltasB . " vueltas.</p>";
        echo "<p>Tiempo para que ambos se encuentren en el punto de salida: " . $salida . " minutos.</p>";
    } else {
        echo "<p>No es posible que ambos corredores coincidan en el punto de salida dentro del rango de " . $vueltas . " vueltas.</p>";
    }
}
?>
