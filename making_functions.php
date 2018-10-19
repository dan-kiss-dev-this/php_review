

<?php
$string_one=$_GET["string_one"];
$string_two=$_GET["string_two"];
$string_three=$_GET["string_three"];

function playString($a, $b, $c) {
  return strrev($a) . ' '. strtoupper($b) . ' '. strrev(strtoupper($c)) ;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Strings!</title>
</head>
<body>
<p><!--Create an encryption website where the user enters three phrases into a form. Then the three phrases are put into a function-->
  <!--which reverses the first one,
  capitalizes all letters in the second one, and
  makes the third one capitalized and reversed. -->
  <!--Then all three new strings should be concatenated (added together) into one string within the function and then returned.-->
  <!--Display the new string in the browser under the original phrases.--></p>
<p>answer:
  <?php echo playString($string_one,$string_two,$string_three); ?>
</p>
</body>
</html>