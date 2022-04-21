
<!DOCTYPE html>
<html>
<head><title>aerial fire fighting</head></title>
<body>
<H1>Targeted Fires</H1>

	<?php 

	include 'firetarget.php';

    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'aerialfirefighting';

/*connection to Database*/
    
    $dbcon = mysqli_connect($host,$user,$pwd,$db);
	if(mysqli_connect_errno()){
            echo"Failed to conenct to MySQL:" .mysqli_connect_errno();
        }
        else{

        /* successfull connection */
        if(isset($_POST['Fire_ID'])){ 
        $FirID = $_POST['Fire_ID'];

        /*Fetching data from AIRCRAFT table*/ 
		$result = $dbcon->query("SELECT * from fireTarget where FireID = '$FirID'");
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			   $fireTarget_obj= new fireTarget($row["FireNumber"],$row["FireID"], $row["FireLocation"], $row["FireStatus"],$row["FireSize"]);
	         
			 echo "<h2>" .$fireTarget_obj->displayFireTarget(). "</h2>";
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
