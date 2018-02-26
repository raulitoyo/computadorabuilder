<?php

include_once 'computadora.php';

public abstract class BuilderComputadora
{
	protected Computadora computadora;
	
	public Computadora getComputadora() {
		return this.computadora;
	}
	
	public armarNuevaComputadora() {
		this.computadora = new Computadora();
	}
	
	public abstract colocarProcesador();
	public abstract colocarMemoria();
	public abstract colocarVideo();
}

?>