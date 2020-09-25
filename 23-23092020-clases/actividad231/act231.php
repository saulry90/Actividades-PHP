<?php
class Persona
{
	//Atributos o propiedades
	private $nombre;
	private $altura;
	private $edad;
	
	function __construct()
	{
		$this->nombre="Pepe";
		$this->altura=1.75;
		$this->edad=75;
	
	}
	//Métodos
	//Obtener el dato
	public function getNombre()
	{
		return $this->nombre;
		
	}
	//Modifica el dato
	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
		
	}
	//Obtener el dato
	public function getEdad()
	{
		return $this->edad;
		
	}
	//Modifica el dato
	public function setEdad($edad)
	{
		$this->edad=$edad;
		
	}
	//Obtener el dato
	public function getAltura()
	{
		return $this->altura;
		
	}
	//Modifica el dato
	public function setAltura($altura)
	{
		$this->altura=$altura;
		
	}
	
	
	
}

?>