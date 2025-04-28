<?php

require_once 'class-deck.php';
require_once 'class-player.php';
require_once 'class-dealer.php';
require_once 'class-card.php';

$deck = new Deck();
$deck->initialise_deck();
$deck->shuffle();

$player = new Player('Player 1');
$dealer = new Dealer('Dealer');

//Deal initial hands
$player->hit($deck->dealCard());
$dealer->hit($deck->dealCard());
$player->hit($deck->dealCard());
$dealer->hit($deck->dealCard());

//Display initial hands
$dealer->display_first_card();
$player->display_hand();

//Add logic for the player taking their turn
while ($player->get_hand_value() < 21) {
	//If the value is less than 17, the player hits
	if ($player->get_hand_value() < 17) {
		$player->hit($deck->dealCard());
		$player->display_hand();
	} else {
		break;
	}
}

while ($dealer->get_hand_value() < 17) {
	$dealer->hit($deck->dealCard());
}

//Display the final hands
echo '<h2>Final Hands</h2>';
echo "<h3>Dealer's final hand: </h3>";
$dealer->display_hand();
echo "<h3>Player's final hand: </h3>";
$player->display_hand();

//Determine the winner
$player_score = $player->get_hand_value();
$dealer_score = $dealer->get_hand_value();

echo "<h2>Winner</h2>";
if ($player_score > 21) {
	echo "Dealer wins!";
} elseif ($dealer_score > 21 || $player_score > $dealer_score) {
	echo "Player wins!";
} elseif ($dealer_score < $player_score) {
	echo "Dealer wins!";
} else {
	echo "It's a tie!";
}

?>
