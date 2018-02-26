<?php

include_once 'buildercomputadora.php';
include_once 'computadora.php';


public class ConstructorComputadoraCompleto extends BuilderComputadora
{
	public ConstructorComputadoraCompleto() {
		
	}
	
	public colocarProcesador() {
		this.computadora.setProcesador("Colocar procesador core i7");
	}
	
	public colocarMemoria() {
		this.computadora.setMemoria("Colocar 16 GB");
	}
	
	public colocarVideo() {
		this.computadora.setVideo(true);
	}
}

?>