<?php
include_once 'Card.php';

$card = new Card();
$card->setNumOfPeople($_POST["numOfPeople"]);

$people = $card->distributeCards();

// Printing the cards distributed to each person
for ($i = 0; $i < $card->getNumOfPeople(); $i++) {
    echo "Person " . ($i + 1) . ": ";
    echo implode(",", $people[$i]) . "\n";
    echo "<br>";
}

?>
