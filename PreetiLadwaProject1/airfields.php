<!DOCTYPE html>
<html>
<head><title>Aerial Fire Fighting</title></head>
<body>

<?php 
/**
 * 
 */
class airfield
{
	
public $AFID;
public $runways;
public $hangers;
public $LOC_LAT;
public $LOC_LON;
public $Image;

	function __construct($AFID,$runways,$hangers,$LOC_LAT,$LOC_LON)
	{
		$this->AFID    = $AFID;
		$this->runways = $runways; 
		$this->hangers = $hangers ;
		$this->LOC_LAT = $LOC_LAT ; 
		$this->LOC_LON = $LOC_LON ;
		}


	function  displayAirfield(){


	  echo'<h3><font color="blue">Aircraft Model</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">'.$this->AFID. '</font></h3>';
      echo'<h3><font color="blue">Aircraft Type</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">'  .$this->runways. '</font></h3>';
      echo'<h3><font color="blue">Flight Speed</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->hangers. ' mph</font></h3>';
      echo'<h3><font color="blue">Fuel Capacity</font><BR> &nbsp &nbsp &nbsp &nbsp <font color = "red">' .$this->LOC_LAT.' lbs</font></h3>';
      echo'<h3><font color="blue">Mission Range</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">'.$this->LOC_LON.' miles</font></h3>';
    

	}

}


?>


</body>
</html>