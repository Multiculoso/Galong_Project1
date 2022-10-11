<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		


	</title>
</head>
<body>

<?php
echo "<table>";
for( $var1 = 1; $var1 < 8; $var1++ )
	{
		echo "<tr> \n";
			for ($var2=1; $var2 < 8; $var2++) 
				{ 
				 $p = $var2 * $var1;
				 echo "<td>$p</td> </br>";
				} 
				 echo "</tr>";
	}
	echo "</table>";

?>

</body>
</html>