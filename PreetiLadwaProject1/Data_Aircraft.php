
<!DOCTYPE html>
<html>
<head><title>aerial fire fighting</head></title>
<body>
<h1>Fire Fighting Aircraft</h1>

	<?php 

	include 'aircraft.php';

    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'aerialfirefighting';
    
    $dbcon = mysqli_connect($host,$user,$pwd,$db);
	if(mysqli_connect_errno()){
            echo"Failed to conenct to MySQL:" .mysqli_connect_errno();
        }
        else{

        if(isset($_POST['Aircraft_Model'])){ 
        $Airmod = $_POST['Aircraft_Model'];

        /*Fetching data from AIRCRAFT table*/ 
		$result = $dbcon->query("SELECT * from aircraft where ACModel = '$Airmod'");
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			   $aircraft_obj= new aircraft($row["ACModel"], $row["ACType"], $row["FlightSpeed"],
			   							   $row["FuelCapacity"], $row["MissionRange"], $row["WaterCapacity"]);
			
			 echo "<h2>" .$aircraft_obj->displayAircraft(). "</h2>";
		}
		else {
			echo"<h2> Data not found </h2>";
		}
	}
}
		
		 /*Close Database*/
        mysqli_close($dbcon);

	?>

</body>
</html>
