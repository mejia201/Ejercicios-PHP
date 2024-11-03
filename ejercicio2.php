
<!-- 
 
Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no. 
Un número primo es aquel que solo es divisible por 1 y por sí mismo. 

-->


<?php


function esPrimo($numero) {
    // Casos especiales: números menores que 2 no son primos
    if ($numero <= 1) return false;

    // Comprobar divisores desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si es divisible, no es primo
        }
    }
    return true; // Si no tiene divisores, es primo
}

// Prueba de la función con operador ternario
echo esPrimo(4) ? "Es primo" : "No es primo";


?>
