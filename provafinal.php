!DOCTYPE html>
<html>
<head>

<?php
// Solicita o raio do usuário
echo "Digite o raio do círculo: ";
$raio = readline();

// Calcula o perímetro (circunferência)
$perimetro = 2 * M_PI * $raio;

// Calcula a área
$area = M_PI * pow($raio, 2);
// Exibe os resultados
echo "O perímetro do círculo é: " . $perimetro . "\n";
echo "A área do círculo é: " . $area . "\n";
?>


#CALCULAR A MEDIA#
<?php

// Solicita as três notas
echo "Digite a primeira nota: ";
$nota1 = readline();
echo "Digite a segunda nota: ";
$nota2 = readline();
echo "Digite a terceira nota: ";
$nota3 = readline();

// Calcula a média
$media = ($nota1 + $nota2 + $nota3) / 3;

// Exibe a média
echo "A média é: " . $media . "\n";
?>


# MEDIR A TEMPERATURA#
<?php
// Solicita a temperatura em Fahrenheit
echo "Digite a temperatura em Fahrenheit: ";
$fahrenheit = readline();

// Converte para Celsius
$celsius = ($fahrenheit - 32) * 5/9;

// Exibe a temperatura em Celsius
echo "A temperatura em Celsius é: " . $celsius . "\n";
?>