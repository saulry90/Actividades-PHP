<?php
class Cuenta
{
	//Atributos o propiedades
	private $nombre;
	private $apellidos;
	private $dni;
	private $saldo;
	private $activa;

	
	function __construct()
	{
		$this->nombre="Saul";
		$this->apellidos="Roldan Yusta";
		$this->dni="50908826M";
		$this->saldo=101;
		$this->activa=true;
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
	public function getApellidos()
	{
		return $this->apellidos;
		
	}
	//Modifica el dato
	public function setApellidos($apellidos)
	{
		$this->apellidos=$apellidos;
		
	}
	
	//Obtener el dato
	public function getDni()
	{
		return $this->dni;
		
	}
	//Modifica el dato
	public function setDni($dni)
	{
		$this->dni=$dni;
		
	}
	
	//Obtener el dato
	public function getSaldo()
	{
		return $this->saldo;
		
	}
	//Modifica el dato
	public function setSaldo($saldo)
	{
		$this->saldo=$saldo;
		
	}

	//Obtener el dato
	public function getActiva()
	{
		return $this->activa;
		
	}
	//Modifica el dato
	public function setActiva($activa)
	{
		$this->activa=$activa;
		
	}
	
}

//Crear nuevo objeto cuenta
$cuenta1= new Cuenta();
$cuenta1->setNombre('Saul');
$cuenta1->setApellidos('Roldan Yusta');
$cuenta1->setDni("50908826M");
$cuenta1->setSaldo(101);
$cuenta1->setActiva(true);

?>