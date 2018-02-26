<?php

include_once 'buildercomputadora.php';
include_once 'computadora.php';


public class ConstructorComputadoraEstandar extends BuilderComputadora
{
	public ConstructorComputadoraEstandar() {
		
	}
	
	public colocarProcesador() {
		this.computadora.setProcesador("Colocar procesador core i7");
	}
	
	public colocarMemoria() {
		this.computadora.setMemoria("Colocar 8 GB");
	}
	
	public colocarVideo() {
		this.computadora.setVideo(false);
	}
}

?>