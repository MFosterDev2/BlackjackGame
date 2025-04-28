<?php

require_once 'class-card.php';

class Deck {
	private $cards;

	public function __construct() {
		$this->cards = [];
	}

	public function initialise_deck() {
		$suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
		$ranks = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace'];
		$values = [2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10, 11];

		foreach ($suits as $suit) {
			foreach ($ranks as $index => $rank) {
				$value = $values[$index];
				//Set up a new card, passing each attribute into it to create the deck.
				$card = new Card($suit, $rank, $value);
				//Add the card to the deck
				$this->cards[] = $card;
			}
		}
	}

	public function shuffle() {
		shuffle($this->cards);
	}

	public function dealCard() {
		return array_pop($this->cards);
	}

	public function get_cards() {
		return $this->cards;
	}
}
?>
