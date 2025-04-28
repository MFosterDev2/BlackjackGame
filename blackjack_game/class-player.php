<?php

class Player {
    protected $name;
	protected $hand;

	public function __construct($name) {
		$this->name = $name;
		$this->hand = [];
	}

	public function get_hand_value() {
		$total = 0;
		foreach ($this->hand as $card) {
			$total += $card->getValue();
		}
		return $total;
	}

	public function display_hand() {
		echo "<h3>" . $this->name . " has the following cards: </h3>";
		foreach ($this->hand as $card) {
			echo $card->getRank() . " of " . $card->getSuit() . "<br>";
		}
		echo "Total value: " . $this->get_hand_value() . "<br>";
	}

	public function hit($card) {
		$this->hand[] = $card;
	}

	public function stand() {
		return false;
	}
}
?>
