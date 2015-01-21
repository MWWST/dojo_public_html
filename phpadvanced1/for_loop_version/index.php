<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/advanced1.css">
</head>
<body>

<?php 
	$users = array(
		 array("first_name" => "Jimmy", "last_name" =>"Jun"),
		 array("first_name" => "John", "last_name" =>"Supsupin"),
		 array("first_name" => "KB", "last_name" =>"Toneli"),
		 array("first_name" => "Casey", "last_name" =>"LaRue"),
		 array("first_name" => "Paul", "last_name" =>"Chino"),
		 array("first_name" => "Will", "last_name" =>"Nederhoed"),
		 array("first_name" => "Scotti", "last_name" =>"Anderson")
		 );
?> 
	<table>   
		<thead> 
			<th>User ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name </th>
			<th>Full Name in upper case</th>
			<th>Length of full name (without spaces)</th>
		</thead>
		
<?php  foreach ($users as $usrkey =>$row) {


?>				<tr>
					<td><?=$usrkey + 1?></td>

<?php foreach ($row as $value) {
					// var_dump($key);
					// var_dump($value);
					$firstname = $row['first_name'];
					$lastname =$row['last_name'];
?>
					
					<td><?=$value;?></td>
									
<?php } ?>
 <td><?=$firstname." ".$value;?></td>
 <td><?=strtoupper($firstname)." ". strtoupper($lastname)?></td>
 <td><?=strlen($firstname.$lastname)?></td>
<!-- var_dump($holder); -->

<!-- ?> -->
		</tr> 
	
<?php }

?> 
	
</table>

</body>
</html>


