<!Doctype html>
<html>
<head>
<title>ImperialDroid</title>
</head>
	<body>
<h1><center>Imperialdroid Assignment</center></h1>
<?php 
class ImperialDroid{

	private $IDNumber;
	private $droidType;
	private $height;
	private $weight;
	private $manufacturer;

	public static $droidClass = "Security";

	function __construct($IDNumber,$droidType,$height,$weight,$manufacturer){
		$this->IDNumber = $IDNumber;
		$this->droidType = $droidType;
		$this->height = $height;
		$this->weight = $weight;
		$this->manufacturer = $manufacturer;
	}

	function get_IDNumber(){
		return $this->IDNumber;
	}

	function set_IDNumber($ID){
		$this->IDNumber = $ID;
	}

	function get_droidType(){
		return $this->droidType;
	}

	function set_droidType($dT){
		$this->droidType = $dT;
	}

	function get_height(){
		return $this->height;
	}

	function set_height($h){
		$this->height = $h;
	}

	function get_weight(){
		return $this->weight;
	}

	function set_weight($w){
		$this->weight = $w;
	}

	function get_manufacturer(){
		return $this->manufacturer;
	}

	function set_manufacturer($m){
		$this->manufacturer = $m;
	}

	function reportStatus(){
		echo "I am Imperial Droid ".$this->IDNumber." and all systems are functioning";
	}

	function movesToDestination($destination){
		echo $this->IDNumber." moving to"."$destination";
	}

	function communicates($msg){
		echo $msg;
	}

	function flysTransport(){
		echo $this->IDNumber." flying Transport";
	}

	public static function compareDroids($d1,$d2){
		$d= "";
		if(strcmp($d1->get_IDNumber(),$d2->get_IDNumber())==0){
			$d = $d1->get_IDNumber()." and ".$d2->get_IDNumber()." are the same";
		}
		else{
			$d = $d1->get_IDNumber()." and ".$d2->get_IDNumber()." are different";
		}
		return $d;
	}


}

$DR1= new ImperialDroid("ImperialDroid1",76,230,25,3);
$DR2= new ImperialDroid("ImperialDroid2",75,220,22,4);
echo"<h2>ID number: ".$DR1 -> get_IDNumber()."</h2>";
echo"<h2>ID number: ".$DR2 -> get_IDNumber()."</h2>";
echo"<h1>What can the ImperialDroid do?</h1>";
echo"<h3>".$DR1 -> reportStatus()."</h3>";
echo"<h3>".$DR1 -> movesToDestination(" Jersey City ")."</h3>";
echo"<h3>".$DR2 -> communicates(" Reporting to the duty")."</h3>";
echo"<h3>".$DR2 -> flysTransport()."</h3>";
echo"<h3>".ImperialDroid::compareDroids($DR1,$DR2)."</h3>";

 ?>
</body>
</html>