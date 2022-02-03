<?php //Ejemplo aprenderaprogramar.com

$numero = $_GET['nombre'];

echo "<p> Número binario introducido : ".$numero;

$numerodec= bindec($numero);
echo "<p>Traducido a decimal : $numerodec</p>";

$nombrehex= dechex($numerodec);
echo "<p>Traducido a hexadecimal : $nombrehex</p>";

$nombreoct= decoct($numerodec);
echo "<p>Traducido a octal : $nombreoct</p>";
?>
