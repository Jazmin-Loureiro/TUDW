<?php
include_once("eje1Persona.php");
include_once("eje3Libro.php");
include_once("eje5Lectura.php");

//libro 1
$autor1 = new persona("jazmin", "loureiro", "dni", "43155996");

$libro1 = new Libro("2501", "La Ola", "2001", "Logo", $autor1, "200", "jajajajjajajajajjajajajajjajajajajajaj");

//libro2
$autor2 = new persona("salvador", "wiggenhauser", "dni", "11111111");

$libro2 = new Libro("2803", "Scary Movie", "1997", "Planeta", $autor2, "230", "kskskksksasjojoadjsdknvdkvdkdcank");

//libro3
$autor3 = new persona("dario", "loureiro", "dni", "22521244");

$libro3 = new Libro("2905", "Pesca", "1972", "Logo", $autor3, "150", "papappapapapapapapapaapappapapapapa");

//libro4 
$autor4 = new persona("dario", "loureiro", "dni", "22521244");

$libro4 = new Libro("1111", "Pesca en rios", "1995", "Logo", $autor4, "170", "pppppppppppppppppppppppppppppppppp");

//libro5
$autor5 = new persona("silvana", "yensen", "dni", "2569984");

$libro5 = new Libro("1411", "Telenovelas", "1972", "planeta", $autor5, "300", "ssssssssssssssssssssssssssssssssssssssss");

//libro6
$autor6 = new persona("lucas", "loureiro", "dni", "46029980");

$libro6 = new Libro("2504", "cumple", "2005", "Logo", $autor6, "100", ";llllllllllllllllllll;ljlkkkkkkl");

//array LibrosLeidos
$coleccionLeidos = [];

$coleccionLeidos [0] = $libro1;
$coleccionLeidos [1] = $libro2;
$coleccionLeidos [2] = $libro3;
$coleccionLeidos [3] = $libro4;
$coleccionLeidos [4] = $libro5;

$lectura = new lectura1($libro6, 99, $coleccionLeidos);

$leido = $lectura -> estado($libro6);

if ($leido == "true") {
    echo "\nleido";
}
else {
    echo "\nno leido";
}

$pagAct = $lectura -> siguientePagina();

$leido = $lectura -> estado($libro6);

if ($leido == "true") {
    echo "\nleido\n";
}
elseif ($leido = "false") {
    echo "\nno leido\n";
}

echo $sinopsisLibro = $lectura -> darSinopsis($libro5);
