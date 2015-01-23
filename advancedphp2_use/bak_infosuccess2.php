<?php

session_start();
?>
<html>
<head>
	<title></title>
</head>
<body>
<div  id="session_count">
<?=$_SESSION['success'] ="you have submitted this form ".$_SESSION['counter']."Times";?>
<div>
<div id="information">
<p>Name:<?=$_SESSION['name'];?></p>
<p>Location:<?=$_SESSION['location'];?></p>
<p>Language:<?=$_SESSION['language'];?></p>
<p>Comment:<?=$_SESSION['comment'];?></p>


</div>
</body>
</html>

