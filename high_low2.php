<?php

// The specs for the game are:
// game picks a random number between 1 and 100.
// prompts user to guess the number
// if user's guess is less than the number, it outputs "HIGHER"
// if user's guess is more than the number, it outputs "LOWER"
// if the user takes more than 10 tries, they lose the game.
// if a user guesses the number, the game should declare "GOOD GUESS!"

$number_of_tries = 1;

$tries_left = 10;

$winning_number = rand(0,100);

fwrite(STDOUT, "Please pick a number. You have 10 tries or you lose!" . PHP_EOL);

$guess = fgets(STDIN);

while($guess != $winning_number && $number_of_tries <= 10) {

	$tries_left--;
	
	if($guess > $winning_number) {
		echo "Too high." . PHP_EOL;
	}
	else{
		echo"Too low." . PHP_EOL;
	}
	fwrite(STDOUT, "Please pick another number. You only have {$tries_left} tries left!" . PHP_EOL);

	$guess = fgets(STDIN);

	$number_of_tries++;

}

if($number_of_tries >10) {
	echo 'You Lose' . PHP_EOL;
}

if($guess == $winning_number){
	echo "Congrats, you win! It took you {$number_of_tries} tries!" . PHP_EOL;
}


