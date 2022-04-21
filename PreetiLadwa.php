<html>
<head>
<title>Assignment 1</title>
</head>
<body>

<h1><center><i>This is my Assignment 1</i></center></h1>
<h2>Function for sumAll</h1>
    <?php
        $array=array(1,2,3,4,5);
        echo array_sum($array);
    ?>

<h2>Function to count even number in an Array</h1>
    <?php
    function even($nums)
    { 
     $evens = 0;    
 
     for ($i = 0; $i < sizeof($nums); $i++)
          {
            if ($nums[$i] % 2 == 0) $evens++;
          }
      return $evens;
 }   
echo "Number of even elements in an array: ". even([1,2,3,4,5,6,7,8,9,10] );
    ?>

<h2>Function to count odd number in an Array</h1>
    <?php
    function odd($nums)
    { 
     $odds = 0;
        for ($i = 0; $i < sizeof($nums); $i++)
          {
            if ($nums[$i] % 2 !== 0) $odds++;
          }
      return $odds;
 }   
echo "Number of odd elements in an array: ". even([1,2,3,4,5,6,7,8,9,10]);
?>

<h2>Function to count average number in an Array</h1>
    <?php
    function average($array) {
        return array_sum($array) / count($array);
    }   
echo "Number of average elements in an array: ". average([1,2,3,4,5,6,7,8,9,10]);
?>

<h2>Function that accepts an array of numbers and returns the smallest number</h1>
    <?php
        echo "Number of average elements in an array: ". min([1,2,3,4,5,6,7,8,9,10]);
?>

<h2>Function that accepts an array of numbers and returns the largest number</h1>
    <?php
        echo "Number of average elements in an array: ". max([1,2,3,4,5,6,7,8,9,10]);
?>

<h2>Function that accepts an array of numbers and returns the range between the numbers</h1>
    <?php
    $arr = range(1,10);
    foreach ($arr as $a) {
        echo "\t". "$a";
    }
?>

<h2>Function that accepts an array of numbers and returns the median of the numbers</h1>
    <?php
    function findMedian(&$a, $n)
    {
        sort($a);
        if($n%2 != 0)
        return (double)$a[$n / 2];
        return (double)($a[($n - 1) / 2] + $a[$n / 2]) / 2.0;
    }
    $a = array(1, 4, 3, 9, 12, 3, 10);
    $n = sizeof($a);
    echo "Median = " . findMedian($a, $n);
?>

<h2>Function that accepts an array of numbers and returns the mean of the numbers</h1>
    <?php
    function findMean(&$a, $n)
    {
        $sum = 0;
        for ($i = 0; $i < $n; $i++)
            $sum += $a[$i];
        return (double)$sum/(double)$n;
    }
    $a = array(1, 4, 3, 9, 12, 3, 10);
    $n = sizeof($a);
    echo "Mean = " . findMean($a, $n);
?>

<h2>Function that accepts an array of numbers and returns the mode of the numbers</h1>
    <?php
    function modes_of_array($arr) {
        $values = array();
        foreach ($arr as $v) {
          if (isset($values[$v])) {
            $values[$v] ++;
          } else {
            $values[$v] = 1;
          }
        } 
        arsort($values);  
        $modes = array();
        $x = $values[key($values)]; 
        reset($values); 
        foreach ($values as $key => $v) {
          if ($v == $x) {   
            $modes[] = $key; 
          } else {
            break;
          }
        } 
        return $modes;
      }
      print_r(modes_of_array([1.0, 1.0, 2.0, 2.0, 3, 4]));
?>

<h2>Function that accepts an array of numbers and returns the sample Variation of the numbers</h2>
      <?php
      function variance_sample ($a)
      {
        $the_variance = 0.0;
        $the_mean = 0.0;
        $the_array_sum = array_sum($a); 
        $number_elements = count($a); 
        $the_mean = $the_array_sum / $number_elements;
        for ($i = 0; $i < $number_elements; $i++)
        {
          $the_variance = $the_variance + ($a[$i] - $the_mean) * ($a[$i] - $the_mean);
        }
        $sample_variance = $the_variance / ($number_elements - 1.0);
        return $sample_variance;
      }
      $a = array(0, 1, 2, 3, 4, 5);
      $the_variance = variance_sample ($a);
      echo "a[0] = $a[0]<br>";
      echo "a[1] = $a[1]<br>";
      echo "a[2] = $a[2]<br>";
      echo "a[3] = $a[3]<br>";
      echo "a[4] = $a[4]<br>";
      echo "a[5] = $a[5]<br>";
      echo "the_sample_variance = $the_variance<br>";
      ?>

<h2>Function that accepts an array of numbers and returns the standard deviation of the numbers</h2>
    <?php
    function Stand_Deviation($arr)
    {
        $num_of_elements = count($arr);
        $variance = 0.0;
        $average = array_sum($arr)/$num_of_elements;
        foreach($arr as $i)
        {
            $variance += pow(($i - $average), 2);
        }
        return (float)sqrt($variance/$num_of_elements);
    }
    $arr = array(2, 3, 5, 6, 7);
    print_r(Stand_Deviation($arr));
?>

<h2>Euclidean 2D distance function </h2>
    <?php
    function eucDistance(array $x, array $y) {
        return
        array_sum(
            array_map(
                function($c, $d) {
                    return ($c - $d) ** 2;
                }, $x, $y
            )
        ) ** (1/2);
    }
    echo eucDistance([2,5], [6,33]);
?>

<h2>Interquartile range function</h2>
    <?php
    function median($a, $l, $r)
    {
        $n = $r - $l + 1;
        $m = (int)(($n + 1) / 2) - 1;
        return $m + $l;
    }
    function IQR($a, $m)
    {
        sort($a);
        $mid_index = median($a, 0, $m);
        $Q1 = $a[median($a, 0, $mid_index)];
        $Q3 = $a[$mid_index + median($a, $mid_index + 1, $m)];
        return ($Q3 - $Q1);
    }
    $a = array( 1, 19, 7, 6, 5, 9, 17);
    echo IQR($a, $m);
    
?>
</body>
</html>