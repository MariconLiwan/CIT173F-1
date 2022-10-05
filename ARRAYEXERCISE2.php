<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Number 2</title>
</head>
<body>
	<h1>Write a PHP script to count a total number of duplicate elements in an array. </h1>
<?php
echo "Input 3 elements in the array:<br>";
$arrayChars=array(5, 1, 1);

    $arrLength=count($arrayChars);
    $Count=array();
  for($i=0;$i<$arrLength;$i++)
    {
       $key=$arrayChars[$i];
       
       print("element - "."[".$i."]"." : "."[".$key."]<br>");

   }

   
   echo "Total number of duplicate elements found in the array is : $key";
?>
	

<h1>Write a PHP script to count the frequency of each element of an array.</h1>
<?php

$a = array (25,12,43);
$fr = array_fill(0, count($a), 0);
$check = -1;

echo("Input 3 elements in the array: <br> ");
for($i = 0; $i < count($a); $i++)
{
	$key=$a[$i];
	$count = 1;
		for($j = $i+1; $j < count($a); $j++)
		{
			if($a[$i] == $a[$j])
			{
				$count++;	
				$fr[$j] = $check;
			}
		}
		if($fr[$i] != $check)
		$fr[$i] =$count;
        echo "element - [".$i."]"." : ".$key. "<br>";
}

echo "<br>Expected Output:<br>";
echo ("<br>The frequency of all elements of an array : <br>" );
for( $i = 0; $i < count($fr); $i++)
{
	if($fr[$i] != $check)
	{
	echo( $a[$i] ." occurs " );
	echo( $fr[$i]." times.");
	echo("<br>");
	}
}

	?>

	<h1>Write a PHP script to separate odd and even integers in separate arrays. </h1>
<?php
    $arr = array(25,47,42,56,32);
    $odd = array();
    $even = array();
    
    echo "Orginal array: \n";
    $size = count($arr);
    
    for ($x = 0; $x < $size; $x++) 
    {
        echo "$arr[$x] ";
    }
    $y = 0;
    $z = 0;
    for ($x = 0; $x < $size; $x++) 
    {
        if ($arr[$x] % 2 == 0) 
        {
            $even[$y] = $arr[$x];
            $y++;
        } 
        else 
        {
            $odd[$z] = $arr[$x];
            $z++;
        }
    }
    echo "<br>";
    echo "<br>Expected Output:<br>";
    echo "<br>Array of even numbers : <br>";
    
    for ($x = 0; $x < $y; $x++) 
    {
        echo $even[$x]. " ";
    }
    echo "<br>Array of odd numbers : <br>";
    
    for ($x = 0; $x < $z; $x++) 
    {
        echo $odd[$x] . " ";
    }
	?>

</body>
</html>