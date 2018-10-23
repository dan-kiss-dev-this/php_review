<?php
class Contact
{
  public $name;
  public $phone;
  public $address;
  private $story;

  function __construct($some_name, $some_phone, $some_address, $some_story = "It was a dark night...")
  {
      $this->name=$some_name;
      $this->phone=$some_phone;
      $this->address=$some_address;
      $this->story=$some_story;
  }

  /**
   * @param mixed $story
   */
  public function setStory($story): void
  {
    $this->story = $story;
  }

  /**
   * @return string
   */
  public function getStory(): string
  {
    return $this->story;
  }
}

$hendrix = new Contact("Jimi Hendrix","555-555-5555","123 st usa");
//old way below
//$hendrix->name = "Jimi Hendrix";
//$hendrix->phone = "555-555-5555";
//$hendrix->address = "123 st usa";

$elvis = new Contact("Elvis Presley", "617-356-3571", "Graceland");

$einstein = new Contact("Albert Einstein","415-738-4935","3718 MLK blvd. Oakland, CA 94608");

$address_book = array($hendrix, $elvis, $einstein);


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<title>Address Book</title>
</head>
<body>
<div class="container">
  <h1>Address Book</h1>
  <ul>
    <?php
    foreach ($address_book as $contact) {
      if ($contact->name !="Albert Einstein") {
        echo "<li>";
        echo $contact->name;
        echo "<ul>";
        echo "<li> $contact->phone </li>";
        echo "<li> $contact->address </li>";
        $contact->setStory("It was sunset...");
        echo "<li>". $contact->getStory()."</li>";
        echo "</ul>";
        echo "</li>";
      }
    }
    ?>

  </ul>
</div>
</body>
</html>
