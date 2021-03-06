<?php 

// High Low Game!

// Welcome to the world of game development!

// You are going to build a game using the CLI.

// The specs for the game are:
// - game picks a random number between 1 and 100.
// - prompts user to guess the number
// - if user's guess is less than the number, it outputs "HIGHER"
// - if user's guess is more than the number, it outputs "LOWER"
// - if a user guesses the number, the game should declare "GOOD GUESS!"

// Hints:
// - Using conditionals and loops here is important
// - Random numbers can be made with the internal rand() function
// - If user is right, tell them they won
// - While they are wrong, give them hints and keep asking
// - Use exit(0) to end the game
// - If you get stuck in game, ctrl-c will exit.

// Have the computer guess the random number DONE

// Define winning number DONE

// Ask the user to guess the number DONE

// Get the number the user guessed DONE

// Check the number against the winning number - if it's wrong, echo too high or too low THEN ASK TO PUT ANOTHER GUESS!

// If it's correct, echo "GOOD GUESS!"

$number_of_guesses = 1;

$winning_number = mt_rand($argv[1],$argv[2]);

// echo $winning_number . PHP_EOL;

if($argc < 2) {
	echo "Hey! I need you to enter two numbers!" . PHP_EOL;
	exit(1);
}

fwrite(STDOUT, "Guess a number between {$argv[1]} and {$argv[2]}! ");

$guess = fgets(STDIN);

while ($guess != $winning_number) {
	if ($guess > $winning_number){
		echo "LOWER!" . PHP_EOL;
	}
	else {
		echo "HIGHER" . PHP_EOL;
	}
	
	fwrite(STDOUT, 'Guess again! ');

	$guess = fgets(STDIN);
	$number_of_guesses++;
}

if ($guess == $winning_number) {
	echo "GOOD GUESS! YOU WIN! It only took you {$number_of_guesses} guesses." . PHP_EOL ;
}






