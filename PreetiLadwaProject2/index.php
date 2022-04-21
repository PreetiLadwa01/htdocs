<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index page</title>
</head>
<h3><center>Project 2 Created by HG Locklear IS-667 Spring 2022</center></h3>
<h1><center>Imperial TIE Spacecraft Construction Facility<center></h1>
<Center><img src="EmpireLogo.png" width="400" height="400"></center>
<body>
<div class="row"><center>
    <form action="SInventory.php" method="POST" >
   <input type="submit" class="button" id="param1" value="TIE_S Inventory">
   <form action="IInventory.php.php" method="POST" >
   <input type="submit" class="button" id="param1" value="TIE_I Inventory">
   <form action="SVInventory.php" method="POST" >
   <input type="submit" class="button" id="param1" value="TIE_SV Inventory">
   <form action="BInventory.php" method="POST" >
   <input type="submit" class="button" id="param1" value="TIE_B Inventory">
 </div></center><br>
	<form action="TIE_S.php" method="POST" >
    <input type= "submit" name="param1" value="TIE S Data"/>
 	</form> 
    <br></br>
    <form action="TIE_I.php" method="POST" >
    <input type= "submit" name="param1" value="TIE I Data"/>
 	</form>
     <br>
    <form action="TIE_SV.php" method="POST" >
    <input type= "submit" name="param1" value="TIE SV Data"/>
 	</form>
     <br>
    <form action="TIE_B.php" method="POST" >
    <input type= "submit" name="param1" value="TIE B Data"/>
 	</form>
 	<br>
     <!---
     <style>
      .button {
  background-color: black; 
  color: white;
}
    </style> --->
</body>
</html>