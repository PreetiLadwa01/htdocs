<!DOCTYPE html>
<html>
<head><title>Aerial Fire Fighting</title></head>
<body>
<h1>Fires</h1>
<form action="Data_fires.php" method = "POST">
	<label for="Fire ID" >File ID</label><br>
	<input type="text" id="Fire ID" name="Fire ID"><br>
	<br>
	<input type="submit" value="Get Fire Data"><br>
	<br>
</form>

<h1>Airfields</h1>
<form action="Data_Airfields.php" method = "POST">
	<label for="Airfield_ID" >AirFieldID</label><br>
	<input type="text" id="Airfield_ID" name="Airfield_ID" value =""><br>
	<br>
	<input type="submit" value="Get Airfield Data"><br>
	<br>
</form>

<h1>Aircraft</h1>
<form action="Data_Aircraft.php" method = "POST">
	<label for="Aircraft Model" >Aircraft Model</label><br>
	<input type="text" id="Aircraft Model" name="Aircraft Model"><br>
	<br>
	<input type="submit" value="Get Aircraft Data"><br>

</form>
	

</body>
</html>