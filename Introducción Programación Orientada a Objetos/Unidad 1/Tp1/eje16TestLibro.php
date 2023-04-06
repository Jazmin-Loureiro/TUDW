<?php
include 'eje16Libro.php';

echo "Ingrese el ISBN del libro: ";
$isbnLibro = trim(fgets(STDIN));
echo "Ingrese el titulo del libro: ";
$tituloLibro = trim(fgets(STDIN));
echo "Ingrese el anio de edicion: ";
$anioEdicion = trim(fgets(STDIN));
echo"Ingrese la editorial: ";
$editorialLibro = trim(fgets(STDIN));
echo "Ingrese el nombre del autor: ";
$nAutor = trim(fgets(STDIN));
echo "Ingrese el apellido del autor: ";
$aAutor = trim(fgets(STDIN));

$libro = new Libro($isbnLibro, $tituloLibro, $anioEdicion, $editorialLibro, $nAutor, $aAutor) ;

echo "Ingrese la editorial del libro: ";
$editorialL = trim(fgets(STDIN));
$libro -> perteneceEditorial($editorialL);

echo $libro -> aniosDesdeEdicion();

echo $libro;

//Array de libros
$libros = [];
$libros [0] ["titulo"] = "Lunes";
$libros [0] ["editorial"] = "Logo";
$libros [1] ["titulo"] = "Martes";
$libros [1] ["editorial"] = "Planeta";
$libros [2] ["titulo"] = "Miercoles";
$libros [2] ["editorial"] = "Sexto Piso";
$libros [3] ["titulo"] = "Jueves";
$libros [3] ["editorial"] = "Planeta";
$libros [4] ["titulo"] = "Viernes";
$libros [4] ["editorial"] = "Logo";
$libros [5] ["titulo"] = "Sabado";
$libros [5] ["editorial"] = "Sexto Piso";
$libros [6] ["titulo"] = "Domingo";
$libros [6] ["editorial"] = "Planeta";

/**
* Indica si el libro esta adentro del array.
* @param string $pLibro 
* @param array $pArreglo
* @return string
*/
function iguales($pLibro, $pArreglo) {
    $n = count($pArreglo);
    $i = 0;
    while ($i  < $n && $pLibro <> $pArreglo [$i]["titulo"]) {
        $i = $i + 1;
    }
    if ($i >= $n) {
    echo "\nEl libro no se encuentra en el arreglo\n";
    }
    else {
        echo "\nEl libro se encuentra en el arreglo.\n";
    }
}

$libro = "Lunes";
$l = iguales($libro, $libros);


/**
* Retorna un arreglo asociativo con todos los libros publicados por la editorial dada.
* @param $arregloLibros
* @param $pEditorial
* @return array
*/
function libroDeEditoriales($arregloLibros, $pEditorial) {
    $arregloEditorial = [];
    $n = count($arregloLibros);
    $j = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($pEditorial == $arregloLibros [$i] ["editorial"]) {
            $arregloEditorial [$j] = $arregloLibros [$i] ["titulo"];
            $j = $j + 1;
        }
    }
    return $arregloEditorial;
}

$editorial = "Planeta";
$e = libroDeEditoriales($libros, $editorial);
print_r($e);

echo "Ingrese el ISBN del libro: ";
$isbnLibro2 = trim(fgets(STDIN));
echo "Ingrese el titulo del libro: ";
$tituloLibro2 = trim(fgets(STDIN));
echo "Ingrese el anio de edicion: ";
$anioEdicion2 = trim(fgets(STDIN));
echo"Ingrese la editorial: ";
$editorialLibro2 = trim(fgets(STDIN));
echo "Ingrese el nombre del autor: ";
$nAutor2 = trim(fgets(STDIN));
echo "Ingrese el apellido del autor: ";
$aAutor2 = trim(fgets(STDIN));

$libro2 = new Libro($isbnLibro2, $tituloLibro2, $anioEdicion2, $editorialLibro2, $nAutor2, $aAutor2) ;

echo "Ingrese el ISBN del libro: ";
$isbnLibro33 = trim(fgets(STDIN));
echo "Ingrese el titulo del libro: ";
$tituloLibro3 = trim(fgets(STDIN));
echo "Ingrese el anio de edicion: ";
$anioEdicion3 = trim(fgets(STDIN));
echo"Ingrese la editorial: ";
$editorialLibro3 = trim(fgets(STDIN));
echo "Ingrese el nombre del autor: ";
$nAutor3 = trim(fgets(STDIN));
echo "Ingrese el apellido del autor: ";
$aAutor3 = trim(fgets(STDIN));

$libro3 = new Libro($isbnLibro3, $tituloLibro3, $anioEdicion3, $editorialLibro3, $nAutor3, $aAutor3) ;