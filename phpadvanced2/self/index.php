<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="self.css">
</head>
<body>

<?php for ($i=1;$i<=8;$i++) 
{ ?>		
	<ul> 
	<?php for ($j=1;$j<=4 && $i % 2 !=0;  $j++)
		{?>	<li class="red"></li>
			<li class="black"></li>	
<?php 	} 
		for ($j=1;$j<=4 && $i % 2 ==0;  $j++)
		{?>			
			<li class="black"></li>
			<li class="red"></li>	
<?php 	} ?>		
		</ul>
<?php } ?>

</body>
</html>