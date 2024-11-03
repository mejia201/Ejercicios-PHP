<!-- 
 
Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci que reciba un número n como parámetro 
y genere los primeros n términos de la serie Fibonacci. La serie comienza con 0 y 1, y cada término 
subsiguiente es la suma de los dos anteriores. 

-->


<?php

function generarFibonacci($n) {
    $fibonacci = [0, 1]; // Los primeros dos términos de la serie

    // Si n es menor o igual a 0, no se generan términos
    if ($n <= 0) return [];
    // Si n es 1, solo devuelve el primer término
    if ($n == 1) return [0];
    
    // Genera la serie hasta el n cantidad de numeros a generar
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Prueba de la función
print_r(generarFibonacci(10));

?>
