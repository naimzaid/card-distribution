<?php

class Card{
    public $numOfPeople;

    public function setNumOfPeople($numOfPeople){
        $this->numOfPeople = $numOfPeople;
    }

    public function getNumOfPeople(){
        return $this->numOfPeople;
    }

    // Function to shuffle the deck of cards
    protected function shuffleDeck($deck) {
        for ($i = 0; $i < 52; $i++) {
          $randomIndex = rand(0, 51);
          $temp = $deck[$i];
          $deck[$i] = $deck[$randomIndex];
          $deck[$randomIndex] = $temp;
        }
        return $deck;
      }
      
    // Function to validate the number of people
    protected function validateNumOfPeople($numOfPeople) {
        // validate $numof people must be number 
        if (!is_numeric($numOfPeople)) {
          echo "Irregularity occurred";
          exit();
        }


        if ($numOfPeople <= 0) {
          echo "Input value does not exist or value is invalid";
          exit();
        }

        return;
    }

    // Function to distribute cards to n people
    public function distributeCards() {

        $this->validateNumOfPeople($this->numOfPeople);

        // Array to store the deck of cards
        $deck = array();
      
        // Creating the deck of cards
        $suits = array("S", "H", "D", "C");
        $values = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "X", "J", "Q", "K");
        foreach ($suits as $suit) {
          foreach ($values as $value) {
            $deck[] = $suit . "-" . $value;
          }
        }
      
        // Shuffling the deck of cards
        $deck = $this->shuffleDeck($deck);
      
        // Distributing the cards to n people
        $people = array();
        for ($i = 0; $i < $this->numOfPeople; $i++) {
          $people[$i] = array();
        }
        for ($i = 0; $i < 52; $i++) {
          $people[$i % $this->numOfPeople][] = $deck[$i];
        }
      
        // Returning the array of cards distributed to each person
        return $people;
      }
}

?>