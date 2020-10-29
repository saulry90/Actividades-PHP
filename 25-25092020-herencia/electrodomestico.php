<?php

	class Electrodomestico{
		
		private $preciobase;
        private $peso;
        private $color;
        private $consumoEnergetico=array(
            'A'=>100,
            'B'=>80,
            'C'=>60,
            'D'=>50,
            'E'=>30,
            'F'=>10
			);

		
        function __construct()
	{
		$this->preciobase=100;
		$this->peso=5;
		$this->color=array('blanco','negro','rojo','azul','gris');
		$this->consumoEnergetico='F';
	}
	
		
 		public function getPreciobase()
		{
			return $this->preciobase;
		}
		public function setPreciobase($preciobase)
		{
			$this->preciobase=$preciobase;
		}
	/*	public function getColor()
		{
			return $this->color;
		}
		public function setColor($color)
		{
			$this->color=$color;
        }
        public function getConsumoEnergetico()
		{
			return $this->consumoEnergetico;
		}
		public function setConsumoEnergetico($consumoEnergetico)
		{
            $this->consumoEnergetico=$consumoEnergetico;
        }
        public function getPeso()
		{
			return $this->peso;
		}
		public function setPeso($peso)
		{
			$this->peso=$peso;
		}
 */		
	}


	
/* $electrodomestico1=new Electrodomestico();
$electrodomestico1->setPreciobase(100);
$electrodomestico1->setColor('blanco');
$electrodomestico1->setConsumoEnergetico('K');
$electrodomestico1->setPeso(5);



echo "Precio".$electrodomestico1->getPreciobase()."<br>";
echo "Consumo Energetico".$electrodomestico1->getConsumoEnergetico()."<br>";

    
if ($electrodomestico1->getConsumoEnergetico()=="K") 
{
   echo "KKK"."<br>";
} 
else
{
	echo "-----"."<br>";
}  */

$mi_electrodomestico = new Electrodomestico();

//$vars_electrodomestico = get_class_vars(get_class($mi_electrodomestico));

var_dump($mi_electrodomestico);
//echo "<br>";
//echo $mi_electrodomestico->color[0];

$electrodomestico1=new Electrodomestico();
$electrodomestico1->setPreciobase(2000);
echo "<br>";
var_dump($electrodomestico1);


//echo $mi_electrodomestico->consumoEnergetico[0];


?>