

<?php
$string_one=$_GET["string_one"];
$string_two=$_GET["string_two"];
$string_three=$_GET["string_three"];
$string_four=$_GET["string_four"];
$string_five=$_GET["string_five"];

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

function canIEatThis($food) {
    if (strpos($food, 'pineapples') &&  strpos($food, 'fish') !== false ) {
         return 'you cant eat that';
  } return 'bon appitet lets eat';

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Strings!</title>
</head>
<body>
<p>answer:
  <?php echo playString($string_one,$string_two,$string_three); ?>
</p>
<p>Create a website where the user enters a number for the current temperature outside, in fahrenheit. If the temperature is less than 60 degrees, show them the message "It's cold out!". If the temperature is over 80 degrees, show them the message "It's too hot!". Otherwise, display the message "It's lovely out!".</p>
<p>answer to temp:
  <?php echo tempTeller($string_four); ?>
</p>
<p>Food answer: <?php echo canIEatThis($string_five); ?></p>
</body>
</html>