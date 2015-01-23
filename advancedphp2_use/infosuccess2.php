<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <style>
  


#information{
	border: 1px solid black;
	background-color: blue;
	color: white;
}

#information p {
	display: inline-block;
	width: 300px;
}
  </style>


  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="two-thirds column" style="margin-top: 10%">
       <div  id="session_count">
<h3><?=$_SESSION['success'] ="You have submitted this form ".$_SESSION['counter']." "."Times";?></h4>
</div>
<div id="information">
<p>Name: </p> <p><?=$_SESSION['name'];?></p>
<p>Location:</p><p> <?=$_SESSION['location'];?></p>
<p>Language:</p><p> <?=$_SESSION['language'];?></p>
<p>Comment:</p><p> <?=$_SESSION['comment'];?></p>
<form action = "index.php" method="post" enctype"multipart/form">
        <input type ="submit" value="Go back!">
        <input type ="hidden" name="reset" value ="goback">
      </form>

</div>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
