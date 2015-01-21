<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/advanced1.css">
</head>
<body>

<?php 
	$users = array(
		 array('first_name' => 'Jimmy', 'last_name' =>'Jun'),
		 array('first_name' => 'John', 'last_name' =>'Supsupin'),
		 array('first_name' => 'KB', 'last_name' =>'Toneli'),
		 array('first_name' => 'Casey', 'last_name' =>'LaRue'),
		 array('first_name' => 'Paul', 'last_name' =>'Chino'),
		 array('first_name' => 'Will', 'last_name' =>'Nederhoed'),
		 array('first_name' => 'Scotti', 'last_name' =>'Anderson')
		 );
?>
	<table>
		<thead>
			<th>User Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name </th>
			<th>Full Name in upper case</th>
			<th>Length of full name (without spaces)</th>
		</thead>
		
<?php for ($i =0; $i<count($users); $i++){

?>				<tr>
					<td><?= $i;?></td>
					<td><?= $users[$i]['first_name'];?></td>
					<td><?= $users[$i]['last_name'];?></td>
					<td><?= ucwords($users[$i]['first_name']." ".ucwords($users[$i]['last_name']));?></td>
					<td><?= strtoupper($users[$i]['first_name']." ".strtoupper($users[$i]['last_name']));?></td>
					<td><?= strlen($users[$i]['first_name'].$users[$i]['last_name']);?></td></tr> 
					
<?php }
?> 
	
</table>

</body>
</html>


