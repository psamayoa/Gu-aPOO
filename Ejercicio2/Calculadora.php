<?php

class Calculadora {
    // Método para sumar dos números
    public function sumar($num1, $num2) {
        $total = $num1 + $num2;
        echo "La suma de $num1 y $num2 es  $total. <br>";
    }

    // Método para restar dos números
    public function restar($num1, $num2) {
        $total = $num1 - $num2;
        echo "La resta de $num1 y $num2 es  $total. <br>";
    }

    // Método para multiplicar dos números
    public function multiplicar($num1, $num2) {
        $total = $num1 * $num2;
        echo "La multiplicación de $num1 y $num2 es  $total. <br>";
    }

    // Método para dividir dos números
    public function dividir($num1, $num2) {
        // Verificar si el divisor es cero para evitar divisiones por cero
        if ($num2 != 0) {
            $total = $num1 / $num2;
        echo "La división de $num1 y $num2 es  $total. <br>";
        } else {
            return "Error: División por cero";
        }
    }

    // Método para calcular la potencia de un número
    public function potencia($num1, $num2) {
        $total = pow($num1, $num2);
        echo "La potencia de $num1 con exponente $num2 es  $total. <br>";
    }

    // Método para calcular el factorial de un número
    public function factorial($num1) {
        if ($num1 < 0) {
            return "Error: No se puede calcular el factorial de un número negativo";
        } elseif ($num1 == 0) {
            echo "El factorial es: ";
            return 1;
        } else {
            return $num1 * $this->factorial($num1 - 1);
        }
    }
}
 
?>