<?php

require_once 'class-player.php';

class Dealer extends Player {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function hit($card) {
		$this->hand[] = $card;
    }

	public function stand() {
		return false;
	}

	public function display_first_card() {
		echo "<h3>" . $this->name . " has the following cards: </h3>";
		echo $this->hand[0]->getRank() . " of " . $this->hand[0]->getSuit() . "<br>";
	}

	public function display_hand() {
		echo "<h3>" . $this->name . " has the following cards: </h3>";
		foreach ($this->hand as $card) {
			echo $card->getRank() . " of " . $card->getSuit() . "<br>";
		}
		echo "Total value: " . $this->get_hand_value() . "<br>";
	}
}
?>
