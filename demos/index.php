<?php 
// This is a coment or my php page
 echo 'Top of file';
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<style type ="text/css">
	.header {
		color:red;
	}
	</style>
<body>

	<h1 class="<?php echo 'header';?>"><?php echo 'Hello Coding Dojo Students! How are you?';?></h1>
</body>
</html>
<?php
echo 'Bottom of file';
?>