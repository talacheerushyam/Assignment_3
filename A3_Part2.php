
<html>
<head>
<title>Checker Board</title>
<link rel="stylesheet" href="A3_Part2.css" type="text/css" />
</head>
<body>
<h2>CHECKER BOARD</h2>
	<?php 
		echo "<table>";
			for ($i=1; $i<=10; $i++)
			{
				echo "<tr>";
				for($j=1; $j<=10;$j++)
				{
					if (($i+$j) % 2 == 0)
						echo "<td class=REDSQ></td>";
					else 
						echo "<td class=BLACKSQ></td>";
				}
				echo "</tr>";
			}
		echo "</table>";
	?>
</body>
</html>
