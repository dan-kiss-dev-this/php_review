<?php
  $string_one=$_GET["string_one"];
  $string_two=$_GET["string_two"];
  $string_three=$_GET["string_three"];
  $string_four=$_GET["string_four"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Strings!</title>
</head>
<body>
<p>Take the first one and use strtoupper
  to make it uppercase and print it to the screen. It takes a string as its only argument.
  <?php echo strtoupper($string_one); ?>
</p>
<p>Use str_word_count to count the number of words in the second string.
  Then print that to the screen. It also takes a string as its only argument.
  <?php echo str_word_count($string_two); ?>
</p>
<p>Use str_shuffle to shuffle the order of the characters in the third string.
  It also takes a string as its only argument.
  <?php echo str_shuffle($string_three); ?>
</p>
<p>Use stripos to output the numbered position (called the index) of the first occurrence of the word "you"
  <?php echo stripos($string_four,'you'); ?>
</p>
</body>
</html>