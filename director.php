<?php

include_once 'buildercomputadora.php';

class Director
{
	public Director() {
		
	}
	
	public construir(BuilderComputadora builder)
	{
		builder.armarNuevaComputadora();
		
		builder.colocarProcesador();
		builder.colocarMemoria();
		builder.colocarVideo();
	}
}

?>