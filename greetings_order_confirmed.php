<?php
$name = $_GET["recipient"];
$address = $_GET["address"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Greetings!</title>
</head>
<body>
<h1>Greetings From Amazing Company</h1>
<p>Dear <?php echo $name ?>,</p>
<p>Thank you for ordering, your package will be sent to <?php echo $address?></p>
<p>Cheers</p>
</body>
</html>
