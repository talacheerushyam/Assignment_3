<?php
$month=array ("January","February","March","April","May","June","July","August","September","October","November","December");//Array elements
foreach ($month as $value)
{
   echo "$value<br/>";//printed the elements using foreach loop
}

sort($month);
echo "<br/>The Sorted Array elements are:<br/>"	. "<br/>";
foreach ($month as $value)
{
   echo "$value<br/>";//printed the sorted array elements using foreach loop
}
?>