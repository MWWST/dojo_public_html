<html>
<head>
	<title></title>
</head>
<body>
	<?php ini_set('auto_detect_line_endings',true);
	$file=fopen('us-500.csv','r');
	$header =fgetcsv($file);
	$counter = 0;
	while(($line=fgetcsv($file)) !== FALSE) {
	$counter ++;
		?>
		f
		<h1>Record<?=$counter?></h1>
		<ul>
			<li>First Name:<?=$line[0];?></li>
			<li>Last Name:<?=$line[1];?></li>
			<li>Company Name:<?=$line[2];?></li>
			<li>Address:<?=$line[3];?></li>
			<li>City:<?=$line[4];?></li>
			<li>County:<?=$line[5];?></li>
			<li>State:<?=$line[6];?></li>
			<li>Zip:<?=$line[7];?></li>
			<li>Phone:<?=$line[8];?></li>
			<li>Phone 2:<?=$line[9];?></li>
			<li>Email:<?=$line[10];?></li>
			<li>Web:<?=$line[11];?></li>
		</ul>

	<?php 
	
	} 
fclose($file);
	?>

</body>
</html>
