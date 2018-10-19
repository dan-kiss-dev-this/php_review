<?php
  $first_string = empty($_GET["first_string"]) ? 0 : $_GET["first_string"];
  $second_string = empty($_GET["first_string"]) ? 0 : $_GET["second_string"];
  $third_string = empty($_GET["third_string"]) ? 0 : $_GET["third_string"];
  $fourth_string = empty($_GET["fourth_string"]) ? 0 : $_GET["fourth_string"];
  $fifth_string = empty($_GET["fifth_string"]) ? 0 : $_GET["fifth_string"];

  $total_price = 0;
  $prices = array($first_string,$second_string,$third_string,$fourth_string,$fifth_string);

  foreach ($prices as $single_price) {
    $total_price += $single_price;
  }

  echo 'total price is: '.$total_price;
?>