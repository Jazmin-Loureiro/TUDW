<?php
include_once("eje1Persona.php");
include_once("eje3Libro.php");
include_once("eje4Lectura.php");

echo "Ingrese el ISBN del libro: ";
$isbnLibro = trim(fgets(STDIN));
echo "Ingrese el titulo del libro: ";
$tituloLibro = trim(fgets(STDIN));
echo "Ingrese el anio de edicion: ";
$anioEdicion = trim(fgets(STDIN));
echo"Ingrese la editorial: ";
$editorialLibro = trim(fgets(STDIN));
echo "Ingrese el nombre del autor: ";
$nombreP = trim(fgets(STDIN));
echo "Ingrese el apellido del autor: ";
$apellidoP = trim(fgets(STDIN));
echo "Ingrese el tipo de documento del autor: ";
$tipoP = trim(fgets(STDIN));
echo "Ingrese el numero de documento del autor: ";
$docP = trim(fgets(STDIN));
echo "Ingrese la cantidad de paginas del libro: ";
$cantidad = trim(fgets(STDIN));
echo "Ingrese la sinopsis del libro: ";
$sinopsisLibro = trim(fgets(STDIN));
echo "Ingrese el numero de la pagina que se encuentra leyendo: ";
$paginaAct = trim(fgets(STDIN));

$autor = new persona($nombreP, $apellidoP, $tipoP, $docP);

$libro = new Libro($isbnLibro, $tituloLibro, $anioEdicion, $editorialLibro, $autor, $cantidad, $sinopsisLibro);

$lectura = new Lectura($libro, $paginaAct);

$siguientePagina = $lectura -> siguientePagina();

echo $lectura;

$paginaAnterior = $lectura -> retrocederPagina();

echo $lectura;

$nuevaPagina = $lectura -> irPagina("70");

echo $lectura;

