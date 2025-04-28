<?php

require_once '../blackjack_game/class-deck.php';

use PHPUnit\Framework\TestCase;

class test_shuffle extends TestCase {
	//Test the shuffle method
	public function testShuffle() {
		$deck = new Deck();
		$deck->initialise_deck();
		$deck->shuffle();
		$this->assertNotEquals($deck->get_cards(), $deck->get_cards());
	}
}
?>
