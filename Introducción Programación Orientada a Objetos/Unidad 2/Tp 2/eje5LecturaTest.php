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

//

//array Libros
$coleccionLibros = [];

$coleccionLibros [0] ["libro1"] = $libro1;
$coleccionLibros [0] ["estadoLectura"] = 

$coleccionLibros [1] ["libr02"] = $libro2;
$coleccionLibros [1] ["estadoLectura"] = 

$coleccionLibros [2] ["libro3"] = $libro3;
$coleccionLibros [2] ["estadoLectura"] = 

$coleccionLibros [3] ["libro1"] = $libro4;
$coleccionLibros [3] ["estadoLectura"] = 


//creacion de la clase
$lectura = new Lectura($coleccionLibros);


//prueba de los metodos
$siguientePagina = $lectura -> siguientePagina();

echo $lectura;

$paginaAnterior = $lectura -> retrocederPagina();

echo $lectura;

$nuevaPagina = $lectura -> irPagina("70");

echo $lectura;