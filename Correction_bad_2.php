<?php

class Wheel
{
    public $state = true;
    
    public function getState()
    {
        return $this->state;
    }
    
    public function setState($state)
    {
        $this->state = $state;
    }
}

class Car
{
	private $Reference;
	private $Wheels;
	private $Broken;
	private $Brand;


	public function NewCar($Reference, array $Wheels, bool $Broken, string $Brand)
    {
        $this->Reference = $Reference;
        $this->Wheels = $Wheels;
        $this->Broken = $Broken;
        $this->Brand = $Brand;
    }

	public function state($MyCar)
	{
  		if($MyCar->Broken = false)
  		{
  			$MyCar->Broken = true;
  			echo '$MyCar is now fixed';
  		}
  		else 
  		{
  			$MyCar->Broken = false;
  			echo '$MyCar is now broken';
  		}
	}
}


class Parking
{
	public $MyParking = array();

	private function add(Car $MyCar)
		{
			$MyParking.add($MyCar);
		}
}

	$Wheel1 = new Wheel;
	$Wheel2 = new Wheel;
	$Wheel3 = new Wheel;
	$Wheel4 = new Wheel;
	$Wheel5 = new Wheel;
	$Wheel6 = new Wheel;
	$Wheel7 = new Wheel;
	$Wheel8 = new Wheel;
	$MyParking = new Parking;

	$Wheels1 = 
	[
		$Wheel1, $Wheel2, $Wheel3, $Wheel4
	];

	$Wheels2 = 
	[
		$Wheel5, $Wheel6, $Wheel7, $Wheel8
	];

	$Car1 = new Car;
	$Car1->NewCar(1,$Wheels1,False,"Peugeot");

	$Car2 = new Car;
	$Car2->NewCar(2,$Wheels2,False,"Audi");

	array_push($MyParking, $Car1);
	array_push($MyParking, $Car2);

echo $MyParking;