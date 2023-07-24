<style>
	.feild{
		display: flex;
		flex-direction: column;
	}

	.feild + .feild {
		margin-top: 20px;
	}

	form{
		display: block;
		max-width: 400px;
		padding: 10px;
	}

	input{
		margin-top: 10px;
		max-width: 300px;
	}

	button[type=submit]{
		margin-top: 10px;
		max-width: 200px;
	}

	h1{
		margin-top: 40px;
	}
</style>

<?php 
	$push = $_POST;

	$guests = 0;
	$drinks = 0;

	if (isset($_POST["enter"]) ) {
		if (isset($_POST["guests"]) ) {
			$guests = $_POST["guests"];
		}

		if (isset($_POST["drinks"]) ) {
		$drinks = $_POST["drinks"];
		}

		$total = floatval($drinks) / floatval($guests);

		echo "<h1> Each guest can have $total drinks.</h1>";
	}
?>

<form method="post">

	<p>Drink Calculator</p>

	<div class="feild">
		
		<label>Number of Guests</label>
		<input type="number" name="guests" value="<?=$guests?>" min="1">

	</div>


	<div class="feild">

	<label>Number of Drinks</label>
	<input type="number" name="drinks" value="<?=$drinks?>" min="1">

	</div>

	<button type="submit" name="enter">click me</button>
	
</form>