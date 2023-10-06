<?php
function calcularMCD($a, $b) {
    if ($b == 0) {
        return $a; // Caso base: cuando b llega a 0, a es el MCD.
    } else {
        return calcularMCD($b, $a % $b); // Llamada recursiva con a=b y b=a%b.
    }
}

$a = 18;
$b = 12;
$mcd = calcularMCD($a, $b);
echo "El MCD de " . $a . " y " . $b . " es " . $mcd;
?>