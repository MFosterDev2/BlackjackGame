<?php

// require_once '../blackjack_game/class-deck.php';

use PHPUnit\Framework\TestCase;

class test_shuffle extends TestCase {
	//Test the shuffle method
	public function testShuffle() {
		$deck = new Deck();
		$deck->initialise_deck();
		
		// Store the original deck order
		$originalDeck = $deck->get_cards();
		
		$deck->shuffle();

		$shuffledDeck = $deck->get_cards();
		
		$this->assertNotEquals($originalDeck, $shuffledDeck, 'Deck should be different after shuffling');
		
		$this->assertEquals(count($originalDeck), count($shuffledDeck), 'Deck size should remain the same after shuffling');
		$this->assertEquals(sort($originalDeck), sort($shuffledDeck), 'All cards should still be present after shuffling');
	}
}
?>
