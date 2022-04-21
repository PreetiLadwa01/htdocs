<!DOCTYPE html>
<html>
<head><title>aerial fire fighting</head></title>
<body>
<H1>Fire Fighting Airfields</H1>

	<?php 
	
	include 'airfields.php';

    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'aerialfirefighting';
    
    $connectiontodatabase = mysqli_connect($host,$user,$pwd,$db);
	if(mysqli_connect_errno()){
            echo"Failed to conenct to MySQL:" .mysqli_connect_errno();
        }
        else{
        
        if(isset($_POST['Airfield_ID'])){ 
        $AID = $_POST['Airfield_ID'];
         
		$result = $connectiontodatabase->query("SELECT * from airfield where AFID = '$AID'");
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			   $airfield_obj= new airfield($row["AFID"], $row["Runways"], $row["Hangers"],
			   				$row["LOC_LAT"], $row["LOC_LON"]);
			
			 echo "<h2>" .$airfield_obj->displayAirfield(). "</h2>";
		}
		else {
			echo"<h2> Data not found </h2>";
		}
	}
}		 
        mysqli_close($connectiontodatabase);

	?>

</body>
</html>