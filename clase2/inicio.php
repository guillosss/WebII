<?php
/* echo " <strong> ¿Hola cómo estas? </strong>" ;

/*php es un lenguaje no tipado, pero toda variable debe empezar con el signo $ */


/* ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

/* $nombre = "Alejandro";
echo $nombre;
$nombre = 123;
echo "<br>" . $nombre; */

/* EJERCICIO ESTUDIANTE

0 -2 perdió por vago ..... NO RECUPERA
2.01 - 2.9 perdió pero puede recuperar
3 - 4 ganó
4 - 4.5 Muy bien
> 5 <Error></Error> */

/* $nombre = "Alejandro";
$nota = 3;

if ($nota < 2) {$mensaje = "Perdió por vago...NO RECUPERA";}
else if ($nota < 3)
{$mensaje = "Perdio pero puede recuperar";}
else if ($nota < 4)
{$mensaje = "Ganó";}
else if ($nota < 4.5)
{$mensaje = "Muy bien";}
else if ($nota <= 5)
{$mensaje = "Excelente";}
else {$mensaje ="Error no hay nota";}

echo "<p> <strong> Nombre Estudiante <br> </strong> " . $nombre. " <br> <strong> Tiene una nota de <br> </strong> " . $nota . " <br> <strong> Observación <br> </strong>" .  $mensaje;

*/
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

/* EJERCICIO CALCULADORA DE PESO */ 


/* 

$nombre = "Alejandro";
$peso = 80;
$estatura = 1.86;
$imc = $peso/($estatura*$estatura);
nbvkg-lhÑ
ñj]

} 
{v
l
}

if($imc < 24.9)  {$mensaje = "Peso normal";}
else if($imc < 29.9) {$mensaje = "Sobrepeso";}
else if($imc < 34.9) {$mensaje = "Obesidad grado 1";}
else if($imc < 39.9) {$mensaje = "Obesidad grado 2";}
else if($imc <= 40) {$mensaje = "Obesidad grado 3";}

echo "<p> <strong> Nombre persona <br> </strong> " . $nombre .  "<br> <strong> tiene un peso de (kg) <br> </strong> " . $peso . " <br> <strong> Tiene altura de (mts) <br> </strong> " . $estatura . "<br> <strong> Imc </strong> <br>" . $imc . " <br> <strong> Atencion <br> </stron>" . $mensaje;

*/

/* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */


/* Ejercicio tabla multiplicar de 1 a 10 */

$numero = 2;

for ($i=1; $i < 10 ; $i++) 
{
    echo "<p>" .$i. "*" . $numero . "=" . $i*$numero. "</p>";
}

?>
