
<!-- 
 
Problema de Palíndromos:
Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. 
Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones. 

-->


<?php

function esPalindromo($cadena) {

    // Convertir a minúsculas y eliminar espacios para ignorar diferencias de mayúsculas y espacios
    $cadena = strtolower(str_replace(' ', '', $cadena));
    
    // Verificar si la cadena es igual a su reverso con funcion strrev
    return $cadena == strrev($cadena);
}

// Pruebas de la función siempre usando operador ternario

//Prueba 1 

//echo esPalindromo("Anita lava la tina") ? "Es palíndromo" : "No es palíndromo";

//Prueba 2

echo esPalindromo("Juan Mecanico") ? "Es palíndromo" : "No es palíndromo";

?>
