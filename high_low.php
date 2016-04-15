<?php 

$number = rand(1, 100);

$trys = 0;

echo "Guess my number.\n";

$guess = trim(fgets(STDIN)); 

while (0 < $guess && $guess <= 100 && $guess != $number) {
	if ($guess < $number) {
		echo "HIGHER!\n Try again:";
		$trys++;
		$guess = trim(fgets(STDIN)); 
	} else if ($guess > $number) {
		echo "LOWER!\n Try again:";
		$guess = trim(fgets(STDIN));
		$trys++;
	} else {
		echo "That's not a number.\n Guess a number this time:";
		$guess = trim(fgets(STDIN));
	}
}

if ($guess == 0){
	echo "End game.\n";
}

if ($guess == $number){
	$trys++;
	echo "You guessed my number!\n";
	echo "It took you {$trys} guesses!";
}