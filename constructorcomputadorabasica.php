<?php

include_once 'buildercomputadora.php';
include_once 'computadora.php';


public class ConstructorComputadoraBasica extends BuilderComputadora
{
	public ConstructorComputadoraBasica() {
		
	}
	
	public colocarProcesador() {
		this.computadora.setProcesador("Colocar procesador core i5");
	}
	
	public colocarMemoria() {
		this.computadora.setMemoria("Colocar 4 GB");
	}
	
	public colocarVideo() {
		this.computadora.setVideo(false);
	}
}

?>