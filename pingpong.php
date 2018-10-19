<?php
  $number = 15;

  $my_array = array();

  for ($i=1; $i<=$number; $i++) {
    array_push($my_array, $i);
  }

  function pingPong($array) {
    $output_arr = array();
    foreach ($array as $single) {
      if ($single % 15 == 0) {
        array_push($output_arr, 'pingpong');
      } elseif ($single % 3 == 0) {
        array_push($output_arr, 'ping');
      } elseif ($single % 5 == 0) {
        array_push($output_arr, 'pong');
      }
      array_push($output_arr, $single);
    }
    return $output_arr;
  }

  $answer = pingPong($my_array);
  foreach( $answer as $single) {
    echo "<li>" . "$single" . "</li>";
  }

  ?>
