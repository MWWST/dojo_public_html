<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="checkers.css">
</head>
<?php
echo "<table>";
for ($i= 1; $i<=8; $i++)
{	
	echo "<tr>";
	if ($i % 2 == 1) 
	{ // we know that it is odd
		for ($j=1; $j<=8; $j++)
		{
			if ($j %2 == 1)
			{	
			echo "<td class='red'</td>";
			}
			else 
			{ 
			echo "<td class='black'</td>";
			}
		}
	}
	else 
	{
		for ($j=1; $j<=8; $j++)
		{
			if ($j %2 == 1)
			{	
			echo "<td class='black'</td>";
			}
			else 
			{ 
			echo "<td class='red'</td>";
			}
		}
	}
	echo"</tr>";
}
echo "</table>";


?>
</html>