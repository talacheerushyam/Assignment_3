<!doctype html>
<html lang="en">
<head>
<title>Charlie ate my lunch</title></head>
<body>
<?php
	function isBitten(){
	 $min = 0;
	 $max = 10;
	 $eat = rand($min,$max);
		print "<u><h1>$eat</u></h1>";
 		if($eat > 5){
			echo "<h2><center>Charlie ate my lunch!</h2></center>"; 
		}
 		else{
			echo "<h2><center>Charlie did not eat my lunch!</h2></center>";
		}
	}
isBitten();
?>
</body>

</html>
