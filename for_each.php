<?php
  $first_string = empty($_GET["first_string"]) ? 0 : $_GET["first_string"];
  $second_string = empty($_GET["second_string"]) ? 0 : $_GET["second_string"];
  $third_string = empty($_GET["third_string"]) ? 0 : $_GET["third_string"];
  $fourth_string = empty($_GET["fourth_string"]) ? 0 : $_GET["fourth_string"];
  $fifth_string = empty($_GET["fifth_string"]) ? 0 : $_GET["fifth_string"];

  $total_price = 0;
  $prices = array($first_string,$second_string,$third_string,$fourth_string,$fifth_string);

  foreach ($prices as $single_price) {
    $total_price += $single_price;
  }

  echo 'total price is: '.$total_price;
  $albums = array('album1' => 5, 'album2'=>6, 'album3'=>7, 'album4'=>8, 'album5'=>10);
?>

<!--let's say you're in a band which has a catalog of 4 albums. Create a page in the browser to display each album with a price next to it. Use an associative array with a foreach loop.-->

<ul>
  <?php
  foreach( $albums as $name => $price) {
    echo "<li>" . "$name: $$price" . "</li>";
  }
  ?>
</ul>
