<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset ="utf-8">
	<title>Michaels Intermediate Two Assignment</title>
	<link rel="stylesheet" type="text/css" href="./css/multiply.css">	
</head>
<body>

<table id="multiply">
	<tr>
		<?php for ($h=0;$h<10;$h++)
		{ 
			if ($h==0) {
		?> <td></td>
		<?php } 

		else {	?>
		<td class='bolded'><?= $h;?></td>

			<?php }
			}
		 ?>
		</tr>
	<?php for($i =1; $i<10; $i++) {
		if ($i %2 == 1) {
			?> <tr class='alt'><td class='jbolded'><?= $i; ?></td>
		<?php }
		else { 
			?> <tr><td class='jbolded'><?= $i; ?></td>
		<?php }

		for ($j=1;$j<10;$j++) {
			?> <td><?= $j * $i?></td>

		<?php } ?>
	</tr>
<?php } ?>
</table>
</body>
</html>