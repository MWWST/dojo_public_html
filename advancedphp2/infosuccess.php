<?php
session_start();
var_dump($_SESSION);
?>

<html>
<head>
	<title></title>

<style>
#container: {


}

#forminfo {
	border: 1px solid #000000;

}
</style>
</head>
<body>
	<?php if(isset($_POST['action']) && $_POST['action'] =='register') {
		if(isset($_SESSION['counter'])){
			echo $_SESSION['success'] ="you have submited this form" .$_SESSION['counter']."times";
			$_SESSION['counter']++;
			
?>		<div id ="container">
			<div id ="forminfo">
				<h1>Submitted Information</h1>
				<h2><?= $_SESSION['success'];?></h2>
<?php			foreach ($_POST as $key => $value) {
?> 				<div><?=$key." :" . $value. "br";?></div>
<?php } ?>	
				</div>
				<form action = "infoform.php" method="post" enctype"multipart/form">
				<input type ="submit" value="SUBMIT!">
				<input type ="hidden" name="reset" value ="goback">
			</form>
				</div>
</body>
</html>
			
<?php }
	}
	else {
			$_SESSION['counter'] =1;
				echo "0 times";
			}
?>
