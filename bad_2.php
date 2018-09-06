<?php

$car = [
	'reference' => '1',
	'wheels' => [
		['flat' => false], 
		['flat' => false],
		['flat' => false],
		['flat' => false]
	], 
	'broken' => true, 
	'brand' => 'porsche' 
];

//Now i flat my tire 
$car['wheels'][4]['flat'] = true;

//Now fix car 
if($car['broken'] == true){	
	$car['broken'] = false;
}


// Now fix flat week 
if($car['wheels'][0]['flat'] == true){
	$car['wheels'][0]['flat'] = false;
}
if($car['wheels'][1]['flat'] == true){
	$car['wheels'][1]['flat'] = false;
}
if($car['wheels'][2]['flat'] == true){
	$car['wheels'][2]['flat'] = false;
}
if($car['wheels'][3]['flat'] = true){
	$car['wheels'][1]['flat'] = false;
}


// Car broke again 

$car['broken'] = true;

// So we have to fix again ....

if($car['broken'] == true){	
	$car['broken'] = false;
}

//build a second car 
$car2 = [
	'reference' => '1',
	'wheels' => [
		['flat' => false], 
		['flat' => false],
		['flat' => false],
		['flat' => false]
	], 
	'broken' => true, 
	'brand' => 'fiat' 
];


//Park cars in my parking 
$parking = [$car, $car2];
$myPorsche = null;
//take my car with brand 
foreach($parking as $p){
	if($p['brand'] == 'porsche'){
		$myPorsche = $p;
	}
}

var_dump($myPorsche);
