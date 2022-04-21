<html>
<head></head>
<body>
<?php
	
	include 'stats.php';

$a = array($_POST['num1'],$_POST['num2'],$_POST['num3'],$_POST['num4'],$_POST['num5']);


$x = sumAll($a);
echo"<h1>SumAll is = $x</h1>";

$y = contEvens($a);
echo"<h1>EVEN is = $y</h1>";

$z = contOdds($a);
echo"<h1>Odd is = $z</h1>";

$L = AvgAll($a);
echo"<h1> Avg is = $L</h1>";

$m = Minall($a);
echo"<h1> Minimum is = $m</h1>";

$n = Maxall($a);
echo"<h1> Maximum is = $n</h1>";

$o = rangeall($a);
echo"<h1> Range is = $o</h1>";

$p = medianAll($a);
echo"<h1>Median is = $p</h1>";

$q =  midRangeAll($a);
echo"<h1>Midrange is = $q</h1>";

$r =  sampleVariance($a);
echo"<h1>Sample Variance is = $r</h1>";

$s = standardDeviation($a);
echo"<h1>Standard Deviation  is = $s</h1>";

$euclidean2DDistance = euclidean2DDistance(3,4,2,1);
echo "<h1>Distance is = $euclidean2DDistance</h1>";
?>

<a href="index.php">
      
 <input type="submit" value="New Values">
</a>

</body>
</html>