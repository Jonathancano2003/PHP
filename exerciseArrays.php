<?php
echo "<h1>Ejercicio 1</h1>";
$personas = array(
    "nombre" => "Sara",
    "Apellido" => "Martinez",
    "edad" => "23",
    "ciudad" => "Barcelona"
);


echo "Dato 1º: " . $personas["nombre"] . "<br>"; 
echo "Dato 2º: " . $personas["Apellido"] . "<br>"; 
echo "Dato 3º: " . $personas["edad"] . "<br>"; 
echo "Dato 4º: " . $personas["ciudad"] . "<br>"; 

//ejercicio 2 

echo "<h1>Ejercicio 2</h1>";

echo "Nombre " . $personas["nombre"] . "<br>"; 
echo "Apellido" . $personas["Apellido"] . "<br>"; 
echo "edad " . $personas["edad"] . "<br>"; 
echo "ciudad: " . $personas["ciudad"] . "<br>"; 
//ejercicio 3
echo "<h1>Ejercicio 3</h1>";
$personas["edad"]=24;

echo "Nombre " . $personas["nombre"] . "<br>"; 
echo "Apellido" . $personas["Apellido"] . "<br>"; 
echo "edad " . $personas["edad"] . "<br>"; 
echo "ciudad: " . $personas["ciudad"] . "<br>"; 
//ejercicio 4
echo "<h1>Ejercicio 4</h1>";
unset($personas["ciudad"]);
var_dump( $personas );

//Ejercicio  5 
echo "<h1>Ejercicio 5</h1>";
$letters="a,b,c,d,e,f";

$delimitador=",";

$letras=explode( $delimitador, $letters ) ;

print_r( $letras );

//Ejercicio 6
echo "<h1>Ejercicio 6</h1>";
$notas = [
    "Miguel" => 5,
    "Luís" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];

asort( $notas );

echo 
var_dump( $notas );

//Ejercicio 7 

echo "<h1>Ejercio 7</h1>";

$suma = array_sum($notas);

$numero_estudiantes = count($notas);

$media = $suma / $numero_estudiantes;
echo "La media de las notas es: $media\n";

echo "Alumnos con nota por encima de la media:\n";
foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo "$nombre: $nota\n";
    }
}

//Ejercicio 8

echo "<h1>Ejercicio 8</h1>";
$notaMaxima=max($notas);

echo "La nota maxima es de $notaMaxima";

