

<?php
$string_one=$_GET["string_one"];
$string_two=$_GET["string_two"];
$string_three=$_GET["string_three"];
$string_four=$_GET["string_four"];

function playString($a, $b, $c) {
  return strrev($a) . ' '. strtoupper($b) . ' '. strrev(strtoupper($c)) ;
}

function tempTeller($temp)
{
    if ($temp > 80) {
       return "It's too hot!";
    } elseif ($temp <= 60) {
       return "It's cold out!";
    }
    return "It's lovely out!";
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
<p>Create a website where the user enters a number for the current temperature outside, in fahrenheit. If the temperature is less than 60 degrees, show them the message "It's cold out!". If the temperature is over 80 degrees, show them the message "It's too hot!". Otherwise, display the message "It's lovely out!".</p>
<p>answer to temp:
  <?php echo tempTeller($string_four); ?>
</p>
</body>
</html>