<?php
include_once 'Card.php';

$card = new Card();
$card->setNumOfPeople($_POST["numOfPeople"]);

$people = $card->distributeCards();

// Printing the cards distributed to each person
for ($i = 0; $i < $card->getNumOfPeople(); $i++) {
    if ($i < 52){
        echo "Person " . ($i + 1) . ": ";
        echo implode(",", $people[$i]) . "\n";
        echo "<br>";
        continue;
    }

    // Run out of cards
    echo "Person " . ($i + 1) . ": ";
    echo "Out of cards";
    echo "<br>";
    
}

?>
