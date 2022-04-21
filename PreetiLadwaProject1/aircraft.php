<!DOCTYPE html>
<html>
<head><title>Aerial Fire Fighting</title></head>
<body>
<?php
class Aircraft{
	
	Public $IDNumber;
	Public $model;
	Public $type;
	Public $flightSpd;
	Public $fuelCap;
	Public $missionRng;
	Public $waterCap;

	function __construct($model,$type,$flightSpd,$fuelCap,$missionRng,$waterCap){
		
		$this->model = $model;
		$this->type = $type;
		$this->flightSpd = $flightSpd;
		$this->fuelCap = $fuelCap;
		$this->missionRng = $missionRng;
		$this->waterCap = $waterCap;
	}

	function displayAircraft(){
		echo'<h3><font color="blue">Aircraft Model</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->model. '</font></h3>';
      	echo'<h3><font color="blue">Aircraft Type</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">'  .$this->type. '</font></h3>';
      	echo'<h3><font color="blue">Flight Speed</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->flightSpd. 'mph</font></h3>';
      	echo'<h3><font color="blue">Fuel Capacity</font><BR> &nbsp &nbsp &nbsp &nbsp <font color = "red">' .$this->fuelCap.'lbs</font></h3>';
      	echo'<h3><font color="blue">Mission Range</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">'.$this->missionRng.'miles</font></h3>';
      	echo'<h3><font color="blue">Water Capacity</font><BR>&nbsp &nbsp &nbsp &nbsp <font color = "red">'.$this->waterCap.'gallons</font></h3>';
	}
}
?>
</body>
</html>
