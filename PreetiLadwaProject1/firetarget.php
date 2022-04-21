<!DOCTYPE html>
<html>
<head><title>Aerial Fire Fighting</title></head>
<body>
<?php
class FireTarget{
	
 	public $FireNumber;
	public $FireID;
	public $FireLocation;
	public $FireStatus;
	public $FireSize;
	
	function __FireTarget($FireNumber, $FireID, $FireLocation, $FireStatus, $FireSize){
		$this->number = $FireNumber;
		$this->ID = $FireID;
		$this->location = $FireLocation;
		$this->status = $Firestatus;
		$this->size = $FireSize;
	}

	function displayFireTarget(){
		echo'<h3><font color="blue">Fire Number</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->FireNumber. '</font></h3>';
      	echo'<h3><font color="blue">Fire ID</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">'  .$this->FireID. '</font></h3>';
      	echo'<h3><font color="blue">Fire Location</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->FireLocation. 'mph</font></h3>';
      	echo'<h3><font color="blue">Fire Status</font><BR> &nbsp &nbsp &nbsp &nbsp <font color = "red">' .$this->FireStatus.'lbs</font></h3>';
      	echo'<h3><font color="blue">Fire Size</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">'.$this->FireSize.'miles</font></h3>';

	}
}
?>
</body>
</html>
