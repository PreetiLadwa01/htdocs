<!DOCTYPE html>
<html>
<head><title>Aerial Fire Fighting</title></head>
<body>
<?php
class Location{
	
	private $LID;
	private $vegetation;
	private $terrain;
	private $LOC_lat;
	private $LOC_long;
	
	function __Location($LID, $vegetation, $terrain, $LOC_lat, $LOC_long){

		$this->LID = $LID;
		$this->vegetation = $vegetation;
		$this->terrain = $terrain;
		$this->LOC_lat = $LOC_lat;
		$this->LOC_long = $LOC_long;
	}

}
?>
</body>
</html>
