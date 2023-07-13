

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php-fun</title>
</head>
<body>


	<style>

		h1{
			font-family: arial, helvetica, sans-serif;
			margin-top: 40px;
		}

		p{
			font-size: 20px;
			max-width: 75ch;
			line-height: 25px;
		}

		.test-text{
			color: coral;
		}

	</style>


	

	<?php

	$adjOne = "stupid";
	$nounOne = "grimoire";
	$pluralNoun = "ancient ancestors";
	$name = "Kimmy";
	$adjTwo = "happy";
	$nounTwo = "Witch";
	$city = "Salem";
	$pluralNountwo = "writers";
	$adjThree = "upbeat";
	$test = "https://perpetual.education/lesson/php-templates/";



	echo "<h1>" . "This style is so WEIRD. Why do people prefer this???" . "</h1>";

	
	echo "<p class='test-text'>" . "Hello. " . "This is text. " . "You're you seeing this? " . "There has to be a use case for this, right???" . "</p>";


	echo "<p>" . "I guess this ist too bad. I can make strings really long like this. Isn't that cool?" . "<br><br>" . "Weird. I can pass breaks in strings, and classes." . "</p>";

	echo 246 + 329 - 10;

	echo "<p>" . "number" . 342 . "</p>";


	?>



	<h1>Simple Form</h1>

	 <p>There are many <?=$adjOne?> ways to choose a/an <?=$nounOne?> to read. First, you could ask for recommendations from your friends and <?=$pluralNoun?>. Just don't ask Aunt <?=$name?> -- she only reads <?=$adjTwo?> books with kittens on the cover. If your friends and family are no help, try checking out the <?=$nounTwo?> Review in The <?=$city?> Times. If the <?=$pluralNountwo?> featured there are too <?=$adjThree?> for your taste, try something a little darker. Maybe the Red Dragon. Like for real, you'll feel dirty reading this.</p>	
	 <a> <?=$test?> </a>



	 <?php 

	echo "<h1>" . "If/Else Statments" . "</h1>";

	$vehicle = "car";
	$partGo = $broken;
	$partElectric = "battery";
	$partStop = $broken;
	$partQuiet = "muffler";
	$partBody = "paint";
	$repair = "fix";
	$lowPrice = "$100";
	$medPrice = "$400";
	$highPrie = "$1000";
	$broken = false; 
	$brokenBreaks = "<img src='https://assets.dnainfo.com/generated/chicago_photo/2015/02/brakes-1423427690.jpg/larger.jpg'";

	if($vehicle = true){
	 	echo "<p>Great! You have a car!</p>";
	} 
	else{
	 	echo "<p>Someone stole it!</p>";
	}


	if ($partGo === "engine" ){
	 	echo "<p>Your engine is fine.</p>";
	 }
	else{
	 	echo "<p>Oh no! Your engine is shot! That will be " . $lowPrice . ". </p>";
	}


	if ($partElectric = true){
		echo "<p>The battery works.</p>";
	}
	else{
		echo "<p>And your battery is dead.</p>";
	}

	if($partStop == "breaks"){
		echo "<p> Your breaks are alright too. </p>";
	}
	else{
		echo "<p> Glad you brought this in. Someone cut your breaks! That will be another </p>" . $medPrice . ".</p>" . $brokenBreaks;
	}

	if($partQuiet = true){
		echo "<br><p>Your muffler is okay, though.</p>";
	}
	else{
		echo "<p>Muffler is also buster.</p>";
	}

	if($partBody = true){
		echo "<p>Nice paint job!</p>";
	}
	else{
		echo "<p>Your paint job sucks. We can fix it for " . $highPrice . "</p>";
	}



	 

	?>

	

</body>
</html>