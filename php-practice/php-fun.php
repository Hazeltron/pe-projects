

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
	$broken = false;
	$partGo = $broken;
	$partElectric = "battery";
	$partStop = $broken;
	$partQuiet = "muffler";
	$partBody = "paint";
	$repair = "fix";
	$lowPrice = "$100";
	$medPrice = "$400";
	$highPrie = "$1000";
	 
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



	<h1>Arrays and Objects</h1>

	<?php

	$food = ["mexican food", "coffee,", "ice-cream", "pizza", "hot-pockets",];

	$monsters = ["vampire", "zombie", "Cujo", "aliens",];

	$cat = [
		"name" => "Cinder",
		"weight" => "10lb", 
		"color" => "black",
	];

	?>

	<p>One day, my cat <?=$cat["name"]?> and I were walking down the street. He's a <?=$cat["color"]?> cat that weighs <?=$cat["weight"]?> and he loves to eat. It was his birthday, so we decided to go and get some <?=$food[2]?> when all of a sudden, a <?=$monsters[1]?> popped out of the store.</p>

	<p>We ran away and decided to go get some <?=$food[0]?>. The resturaunt seemed abandoned and it was playing creepy music. That's when I realized there was a <?=$monsters[0]?> behind the counter. <em>A mexican vampire? How weird. I guess vampires could be any ethnicity. It is 2023 after all.</em> I thought before running out of the store.</p>

	<p>Again, we decided we would try something else and go get some <?=$food[3]?>. People were running out of the <?=$food[3]?> shop, screaming and tripping over themselves. That's when I realized <?=$monsters[2]?> was inside attacking people. That's no place for <?=$cat["name"]?> so we ran away again.</p>

	<p>This quest for birthday food was getting exausting. We settled on just getting <?=$food[1]?> and calling it a day. The <?$food[1]?> shop had a strange green glow to it. There were little green men serving the drinks. They seemed to be studying the people after they took their first sip and gossiping in the corner. That's because they were clearly <?=$monsters[3]?>!</p>

	<p><?=$cat["name"]?> and I said screw it and went home and ate <?=$food[4]?> instead.</p>

	<form action="">
		<p>Enter name:</p>
		<label for="">Name</label>
		<input type="text">
		<button type="submit" name="submitted">Submit</button>
	</form>

	<form action=""></form>





	

</body>
</html>