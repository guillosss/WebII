<?php

/* Vectores o arrrays
Un vector es una variable que puede contener varios elementos.
Un vector debe contener un nombre
Los vectores indexados comienzan en la posición cero.
Para representear la posición se utiliza corchetes
 */

$Estudiantes = array('Daniel', 'Kevin', 'Santiago', 'Michel', 'Manuela');

// Ver elemento del vector
// nombre

echo "<p>  Estudiante en la posición 2 " . $Estudiantes[2] . "</p>";

echo "<p> El tamaño del vector estudiantes es de " . count($Estudiantes) . "</p>";

echo "<p> El contenido de la última posición es de " . $Estudiantes[count($Estudiantes) - 1] . "</p>";

// Una cosa es el tamaño y otra cosa es la posición
// Siempre que hay corchetes es para observar el tamaño de algo

// Insertar un elemento... en la última posición

$Estudiantes[] = "Alejandro";

echo "<p> El tamaño del vector estudiantes es de " . count($Estudiantes) . "</p>";
echo "<p> El contenido de la última posición es de " . $Estudiantes[count($Estudiantes) - 1] . "</p>";

// Ordenar un array o vector sort
sort($Estudiantes);

echo "<p> LISTADO DE ESTUDIANTES </P>";

for ($i = 0; $i < count($Estudiantes); $i++) {
    echo "<p> " . $i . " -> " . $Estudiantes[$i] . "</P>";
}

/* para i = 0 (cero porque siempre arranca en cero) menor que todo el contenido del array
y luego entre corchetes imprimo con echo todos los estudiantes y especifico la posición con $i */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* ARRAY ASOCIATIVOS van de esta forma $Nombre =[ 'Clave' => 'Contenido'] */

$Modulos = [
    'Introduccion' => 'Html5',
    'BaseDatos' => 'Sql Server',
    'Logica' => 'Logica Programcion',
];

//Imprimir array asociativos con la instrución var_dump

var_dump($Modulos);

// Otra forma de imprimir es con foreach, ciclo para imprimir el vector como lo debería ver el cliente, este simbolo es => concatenar con

foreach ($Modulos as $key => $contenido) {
    echo "<p> La key es " . $key . " y su contenido es " . $contenido . "</p>";
}
