<?php
	session_start();
	?>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php if(isset($_SESSION['errors'])) {
			foreach ($_SESSION['errors'] as $error) {
				echo "<p>$error</p>";
			}
			unset($_SESSION['errors']);
		}
		?>
		<h2>Add some information about yourself</h2>
	<form action ="userprocess.php" method="post">
		First Name<input type ="text" name ="first_name">
		Email <input type ="text" name ="email">
		<input type ="submit" value="POST INFO!">
		<input type ="hidden" name="action" value ="register">
	</form>
	</body>
	</html>

