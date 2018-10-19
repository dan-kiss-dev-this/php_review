<?php
$weight = $_GET["weight"];
$distance = $_GET["distance"];
$solution = $distance/$weight ;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Answer Below</title>
</head>
<body>
<h1>Arithmetic in PHP is easy!</h1>
<p>The cost of <?php echo $weight; ?> and <?php echo $distance; ?> is: </p>
<p><?php echo $solution; ?></p>
</body>
</html>
