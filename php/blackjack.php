<?php
// complete all "todo"s to build a blackjack game

// create an array for suits
$suits = ['C', 'H', 'S', 'D'];

// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

$name = "Cecilia";

$hand = array();

function get_input($upper = FALSE) {
    // Return filtered STDIN input
    $input = trim(fgets(STDIN));
    if ($upper) {
        $input = strtoupper($input);
    }
    return $input;
}

// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
  	$deck = array();

  	foreach ($suits as $suit) {
  		
  		for ($i = 0; $i <= 12; $i++) {
  			$card = '';
  			$card .= $cards[$i] . " " . $suit;
  	  		array_push($deck, $card);  			
  		}
  	}
  	shuffle($deck);
  	return $deck;
  	
}


// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
	
	if (substr($card, 0, 1) == "A") {
		$result = "TRUE";
	}
	else {
		$result = "FALSE";
	}
 	return $result;
}


// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value

function getCardValue($card) {
  $value = 0;
  if (cardIsAce($card) == "TRUE") {
  	$value = 11;
  }
  elseif ((substr($card, 0, 1) == "J") || (substr($card, 0, 1) == "Q") || (substr($card, 0, 1) == "K") || (substr($card, 0, 1) == "1")) {
  	$value = 10;
  }
  else {
  	$value = intval(substr($card, 0, 1));
  }
  return $value;
}


// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
	$hand_value = 0;
  $ace_value = 0;
  foreach ($hand as $card) {
    if (cardIsAce($card) == "TRUE") {
      $ace_value++;
    }
    $hand_value += getCardValue($card);
  }
  if (($hand_value > 21) && ($ace_value >= 1)) {
    $hand_value -= 10;
  }

  return $hand_value;
}
  	



// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)

function drawCard(&$hand, &$deck) {
  return array_push($hand, array_pop($deck)); 
}



// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12

function echoHand($hand, $name, $hidden = FALSE) {
  
  if ($name === "Cecilia") {
    echo $name . ": [" . implode("] [", $hand) . "] " . "Total: " . getHandTotal($hand) . PHP_EOL; 
  }
  elseif (($name === 0) && ($hidden == TRUE)) {
    echo "Dealer: [" . implode("] [", $hand) . "] " ."Total: " . getHandTotal($hand) . PHP_EOL;
  }
  
  else {
    echo "Dealer: " . "[$hand[0]]" . " " . "[???] Total: ???" . PHP_EOL;
  } 
  
}


// build the deck of cards

$deck = buildDeck($suits, $cards);

// initialize a dealer and player hand

$dealer = [];
$player = [];

// dealer and player each draw two cards
for ($i = 1; $i <= 2; $i++) {
  drawCard($dealer, $deck);
  drawCard($player, $deck);
}


// echo the dealer hand, only showing the first card
print_r(echoHand($dealer, 0));

// echo the player hand
print_r(echoHand($player, $name, TRUE));

// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay

do {
  echo "(H)it or (S)tay?: " . PHP_EOL;
  $input = get_input(TRUE);
  if ($input == 'H') {
    drawCard($player, $deck);
    echoHand($player, $name, TRUE);
  }
}
while (($input == "H") && (getHandTotal($player) <= 21));

// show the dealer's hand (all cards)
print_r(echoHand($dealer, 0, TRUE));

// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)
if (getHandTotal($player) > 21) {
  echo "$name busted! ";
}

elseif (getHandTotal($player) == 21) {
  echo "$name won! ";
}
// if neither of the above are true, then the dealer needs to draw more cards
// dealer draws until their hand has a value of at least 17
// show the dealer hand each time they draw a card
else {
  while (getHandTotal($dealer) < 17) {
    drawCard($dealer, $deck);
    echoHand($dealer, 0, TRUE);
  }
  
}

// finally, we can check and see who won
// by this point, if dealer has busted, then player automatically wins
// if player and dealer tie, it is a "push"
// if dealer has more than player, dealer wins, otherwise, player wins
if (getHandTotal($player) > 21) {
  echo " Dealer won!";
}
elseif (getHandTotal($dealer) > 21) {
  echo "$name won! ";
}
elseif (getHandTotal($dealer) == getHandTotal($player)) {
  echo " It's a push!";
}
elseif (getHandTotal($dealer) >= getHandTotal($player)) {
  echo " Dealer won!";
}
else {
  echo "$name won! ";
}


?>