<?php
echo "OPERADORES ARITMETICOS<BR>";
echo "5 Y 3<BR>";
echo "SUMA= ".(5 + 3)."<br>";       
echo "RESTA= ".(5 - -3)."<br>";          
echo "MODULO= ".(-5 % 3)."<br>";          
echo "DIVISION= ".(-5 / -3)."<br>";         
echo "MULIPLICACION= ".(-5 * -3)."<br>";         
echo "EXPONENCIACION= ".(-5 ** -3)."<br>";         

//Operadores de asignacion

$x = 10;
$y = 5;

$x += $y;   // $x = $x + $y;
echo "x += y: " . $x . "<br>";
$x -= $y;   // $x = $x - $y;
echo "x -= y: " . $x . "<br>";
$x *= $y;   // $x = $x * $y;
echo "x *= y: " . $x . "<br>";
$x /= $y;   // $x = $x / $y;
echo "x /= y: " . $x . "<br>";
$x %= $y;   // $x = $x % $y;
echo "x %= y: " . $x . "<br>";


//Operadores de comparacion
$a = 10;
$b = 5;



echo "Igual a: " . ($a == $b) . "<br>";  // Igual a
echo "Diferente de: " . ($a != $b) . "<br>";  // Diferente de
echo "Mayor que: " . ($a > $b) . "<br>";  // Mayor que
echo "Menor que: " . ($a < $b) . "<br>";  // Menor que
echo "Mayor o igual que: " . ($a >= $b) . "<br>";  // Mayor o igual que
echo "Menor o igual que: " . ($a <= $b) . "<br>";  // Menor o igual que


//Operadores logico
$condicion1 = true;
$condicion2 = false;

echo "AND lógico: " . ($condicion1 && $condicion2) . "<br>"; // AND lógico
echo "OR lógico: " . ($condicion1 || $condicion2) . "<br>"; // OR lógico
echo "NOT lógico: " . (!$condicion1) . "<br>";              // NOT lógico

//OPERADORES DE CONCATENACION
$nombre = "Juan";
$apellido = "Pérez";

echo "Nombre completo: " . $nombre . " " . $apellido . "<br>"; // Concatenación de cadenas

//OPERACION TERNEARIA
$edad = 18;
$mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
echo $mensaje;
?>