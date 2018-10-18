<?php
$band = 'Muse';
$name1 = 'Matthew';
$name2 = 'Tim';
$name3 = 'Roger';
$music = 'Alternative';
$picture = "https://muse.mu/ugc-1/themes/band/band-5.jpg?3";
?>

<!DOCTYPE$ html>
<html>
<head>
  <title>helloworld</title>
  <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<p><?php echo "The band is called $band and they play $music"?></p>
<p><?php echo "The band member is called $name1"?></p>
<p><?php echo "The band member is called $name2"?></p>
<p><?php echo "The band member is called $name3"?></p>
<img src="<?php echo $picture?>" alt="">
</body>
</html>