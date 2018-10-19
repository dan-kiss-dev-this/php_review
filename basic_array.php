<?php
$favorite_icecream = array('choclate', 'vanilla', 'strawberry', 'peach');
$five_boring_movies = array('movie1','movie2','movie3','movie4','movie5');
$fav_books = array('book1','book2','book3','book4','book5','book6','book7','book8');

?>
<p>-Create an array to represent a list of your favorite flavors of ice cream. Then use square brackets to print out the second flavor.
<?php echo $favorite_icecream[1]; ?>
  -Remove the second flavor from the above array, and then print the whole array out.
  <?php array_splice($favorite_icecream,1,1); var_dump($favorite_icecream); ?>
  -Create another array to hold a list of the 5 worst movies of all time. Then use array_push to add 2 more terrible movies to the list. Print out the final version to make sure it holds all 7 movies.
  <?php array_push($five_boring_movies,'movie6', 'movie7'); var_dump($five_boring_movies) ?>

  -Create an array to hold your eight favorite books. Then print out all the even numbered ones.
  <?php
    for ($i=1; $i<=7; $i+=2) {
      echo '<p>'. $fav_books[$i] . '</p>';
    }
  ?>
</p>


