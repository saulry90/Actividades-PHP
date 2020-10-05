<?php
class Habitacion
{
	//Atributos o propiedades
	private $numero;
	private $camas;
	private $disponible;
	private $limpia;
	private $capacidad;

	
	function __construct()
	{
		$this->numero=1;
		$this->camas=3;
		$this->disponible=true;
		$this->limpia=true;
		$this->capacidad=3;
	}


	//Métodos
	//Obtener el dato
	public function getNumero()
	{
		return $this->numero;
		
	}
	//Modifica el dato
	public function setNumero($numero)
	{
		$this->numero=$numero;
		
	}

	//Obtener el dato
	public function getCamas()
	{
		return $this->camas;
		
	}
	//Modifica el dato
	public function setCamas($camas)
	{
		$this->camas=$camas;
		
	}
	
	//Obtener el dato
	public function getDisponible()
	{
		return $this->disponible;
		
	}
	//Modifica el dato
	public function setDisponible($disponible)
	{
		$this->disponible=$disponible;
		
	}
	
	//Obtener el dato
	public function getLimpia()
	{
		return $this->limpia;
		
	}
	//Modifica el dato
	public function setLimpia($limpia)
	{
		$this->limpia=$limpia;
		
	}

	//Obtener el dato
	public function getCapacidad()
	{
		return $this->capacidad;
		
	}
	//Modifica el dato
	public function setCapacidad($capacidad)
	{
		$this->capacidad=$capacidad;
		
	}
	
}

//Crear nuevo objeto Habitacion
$habitacion1= new Habitacion();
$habitacion1->setNumero(101);
$habitacion1->setCamas(3);
$habitacion1->setDisponible(true);
$habitacion1->setLimpia(true);
$habitacion1->setCapacidad(3);

//Crear nuevo objeto Habitacion
$habitacion2= new Habitacion();
$habitacion2->setNumero(102);
$habitacion2->setCamas(2);
$habitacion2->setDisponible(true);
$habitacion2->setLimpia(true);
$habitacion2->setCapacidad(2);

//Crear nuevo objeto Habitacion
$habitacion3= new Habitacion();
$habitacion3->setNumero(103);
$habitacion3->setCamas(1);
$habitacion3->setDisponible(true);
$habitacion3->setLimpia(true);
$habitacion3->setCapacidad(2);

?>