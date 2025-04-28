<?php

require_once 'main.php';

class Blackjack {
	private $deck;
	private $player;
	private $dealer;

	public function __construct() {
		$this->deck = new Deck();
		$this->player = new Player('Player 1');
		$this->dealer = new Dealer('Dealer');
	}
	
	public function initialise_game() {
		$this->deck->initialise_deck();
		$this->deck->shuffle();
	}
}
