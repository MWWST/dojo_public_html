<?php
session_start();
if (isset($_POST['reset']) && $_POST['reset'] =='goback') {
 $_SESSION['counter'] = 0 ;
 }



?>
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

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <form action="infoprocess2.php" method="post" enctype="multipart/form">
  <div class="labels">
    <label for="name">Your Name:</label>
    <input type="text" name="yourname" placehodler="name">
  </div>
  <div class="location">
    <label for"location">Dojo Location:</label>
    <select name ="dojo">
      <option value ="Jan Jose">San Jose</option>
      <option value ="So Cal">So Cal</option>
      <option value="Seattle">Seattle</option>
    </select>
  </div>
  <div class="favlang">
    <label for"favoritelang">Favorite Language:</label>
    <select name ="language">
      <option value ="Javascript">Javascript</option>
      <option value ="PHP">PHP</option>
      <option value="Python">Python</option>
      <option value="Ruby">Ruby</option>
      <option value="Other">Other</option>
    </select>
  </div>
  <div class="comment">
    <label for"comment">Comments:</label>
    <textarea name="comment"> </textarea>
    <div>
    <input type ="submit" value="SUBMIT!">
    <input type ="hidden" name="action" value ="register">
  </div>
  </div>
  </form>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
