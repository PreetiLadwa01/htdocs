

<h1> Functions in Php</h1>
<?php	
function sumAll($v){
	$sum = 0;
	foreach($v as$i=> $j){
		$sum+=$j;
		}
	return $sum;

	}
	
function contEvens($v){
	$evens = 0;
	foreach($v as$i=> $j){
		if($j % 2 == 0 && $j!=0){
			$evens +=1;
					}
				}
		return $evens;
			}

function contOdds($v){
	$Odds = 0;
	foreach($v as$i=> $j){
		if($j % 2 == 1){
			$Odds +=1;
					}
				}
		return $Odds;
			}

function AvgAll($v){
	$total = 0;
	foreach($v as $i){
		$total += $i;
	}
	return $total/count($v);
}

function Minall($a)
{
   $n = count($a);
   $min = $a[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $a[$i])
           $min = $a[$i];
    return $min;      
}

function Maxall($a)
{
   $n = count($a);
   $max = $a[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $a[$i])
           $max = $a[$i];
    return $max;      
}
function rangeall($a)
{
return Maxall($a)- Minall($a);
}

function medianAll($numbers)
{
if (!is_array($numbers))
		$numbers = func_get_args();
	
	rsort($numbers);
	$mid = (count($numbers) / 2);
	return ($mid % 2 != 0) ? $numbers[mid-1]
	: (($numbers[$mid-1]) + $numbers[$mid]) / 2;
}

function midRangeAll($a)
{
return (Maxall($a)+Minall($a))/2;
}

function sampleVariance($a){
	$sum = 0;
	$mean = AvgAll($a);
	for ($i=0; $i< count($a); $i++){
		$sum=$sum+($a[$i]-$mean);
	}
	return $sum/(count($a)-1);
}

function standardDeviation($a){
	return sqrt(sampleVariance($a));
}

function euclidean2DDistance($x1,$y1,$x2,$y2)
{
	$EDdistance = sqrt(pow($x2- $x1, 2)+
				pow($y2 - $y1, 2) *1.0);
	return $EDdistance;
}
?>

