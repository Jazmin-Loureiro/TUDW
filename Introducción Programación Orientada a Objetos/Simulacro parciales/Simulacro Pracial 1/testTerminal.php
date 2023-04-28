<?php
include_once("responsable.php");
include_once("viaje.php");
include_once("empresa.php");
include_once("terminal.php");

//Viaje 1 empresa 1
$responsable1 = new Responsable("Julian", "Lopez", 33675985, "Buenos Aires 123", "JuliLopez@gmail.com", 2995275219);

$villaLaAngostura = new Viaje("Villa la Angostura", "18:30", "23:45", 1234, 8000, "12/01/23", 100, 60, $responsable1);

//Viaje 2 empresa 1
$responsable2 = new Responsable("Pedro", "Martinez", 28903657, "Santa Fe 746", "PedriM@gmail.com", 2998573480);

$buenosAires = new Viaje("Buenos Aires", "15:15", "12:40", 4321, 12000, "25/04/23", 150, 100, $responsable2);

//Arreglo de viajes empresa 1
$viajesEmpresa1 = [];
$viajesEmpresa1 [0] = $villaLaAngostura;
$viajesEmpresa1 [1] = $buenosAires;

//Empresa 1
$flechaBus = new Empresa("Transportes.SA", 1111, $viajesEmpresa1);

//Viaje 1 empresa 2
$responsable3 = new Responsable("Cecilia", "Sandoval", 30483652, "Las Camelias 23", "CeciSando@gmail.com", 2996735678);

$santaFe = new Viaje("Santa Fe", "20:20", "00:15", 7898, 5000, "25/09/23", 68, 24, $responsable3);

//Viaje 2 empresa 2
$responsable4 = new Responsable("Carla", "Perez", 40298631, "Jujuy 198", "CarlaPerez@gmail.com", 2998734610);

$cordoba = new Viaje("Cordoba", "10:00", "16:25", 7746, 6780, "12/02/23", 95, 30, $responsable4);

//Arreglo de viajes empresa 2
$viajesEmpresa2 = [];
$viajesEmpresa2 [0] = $santaFe;
$viajesEmpresa2 [1] = $cordoba;

//Empresa 2
$viaBariloche = new Empresa("Viajes.SA", 2222, $viajesEmpresa2);

//Arreglo de empresas
$arregloEmpresas = [];
$arregloEmpresas [0] = $flechaBus;
$arregloEmpresas [1] = $viaBariloche;

//Terminal
$terminal = new Terminal("123456", "Salta 298", $arregloEmpresas);

//Prueba metodo venta automatica
$ventaAuto = $terminal -> ventaAutomatica(3, "24/09/23", "Santa Fe", $viaBariloche);
echo $ventaAuto;

//Prueba metodo de empresa de mayor recaudacion
$recaudacion = $terminal -> empresaMayorRecaudacion();
echo $recaudacion;

//Prueba metodo que busca responsable de cierto viaje
$responsable = $terminal -> responsableViaje(7746);
echo $responsable;



