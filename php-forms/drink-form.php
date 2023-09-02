<?php include('../header.php') ?>


<style>
	.feild {
		display: flex;
		flex-direction: column;
	}

	.feild + .feild {
		margin-top: 20px;
	}

	form {
		display: block;
		max-width: 400px;
		padding: 10px;
	}

	input {
		margin-top: 10px;
		max-width: 300px;
	}

	button[type=submit] {
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
	$numDrinks = null;

	if (isset($_POST["enter"]) ) {
		if (isset($_POST["guests"]) ) {
			$guests = $_POST["guests"];
		}

		if (isset($_POST["drinks"]) ) {
			$drinks = $_POST["drinks"];
		}

		$total = floatval($drinks) / floatval($guests);
		$numDrinks = round($total, 0);
	}

	
?>

<section class="drink-calc">
	<div class="inner-column">

		<form method="post">

			<h1 class="loud-voice">Drink Calculator</h1>

			<div class="feild">
				
				<label>Number of Guests</label>
				<input type="number" name="guests" value="<?=$guests?>" min="1">

			</div>


			<div class="feild">

				<label>Number of Drinks</label>
				<input type="number" name="drinks" value="<?=$drinks?>" min="1">

			</div>

			<button type="submit" name="enter">click me</button>

			<?php echo "<h2 class='strong-voice'> Each guest can have $numDrinks drinks.</h2>"; ?>
			
		</form>
		
	</div>
</section>

