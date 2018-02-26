<?php

include_once 'director.php';
include_once 'computadora.php';

Director objEquipoComputacion = new Director();

BuilderCoche basico = new ConstructorComputadoraBasica();
BuilderCoche estandar = new ConstructorComputadoraEstandar();
BuilderCoche completo = new ConstructorComputadoraCompleto();

objEquipoComputacion.construir(basico);
Computadora computadoraBasica = basica.getComputadora()

objEquipoComputacion.construir(estandar);
Computadora computadoraEstandar = estandar.getComputadora()

objEquipoComputacion.construir(completo);
Computadora computadoraCompleto = completo.getComputadora()



public static mostrarComputadoras(Computadora computadora)
{
	echo "Computadora: <br>";
	echo "  - Procesador: " . computadora.getProcesador() . " <br>";
	echo "  - Memoria: " . computadora.getMemoria() . " <br>";
	echo "  - Video: " . computadora.getVideo() . " <br>";
	echo "<hr><br>";
}

?>