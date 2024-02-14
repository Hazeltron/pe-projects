


<?php
//part 1 -- init variables
	$rate = 0.91;
	$dollars = 10;
	
	

//part 2 -- check user input
	if( isset($_POST['submit']) ){
		$rate = $_POST['euro-rate'];
		$dollars = $_POST['dollars'];
	}


	

//part 3 -- run calc
	$euros = $dollars * $rate;

	$formatedEuros = round($euros, 2);



 ?>


 <div class="inner-column">

	 <form method="post">

	 	<h1 class="loud-voice">Exchange rate calculator</h1>
	 	<p>This will show you the conversion of a given dollar amount rounded up to the next euro-penny.</p>

	 	<div class="field">
	 		
	 		
	 		<label>How many dollars do you have?</label>
	 		<input type="number" name="dollars" min="0" value="<?=$dollars?>">

	 		<label>What is the current exchange rate?</label>
	 		<input type="number" name="euro-rate" step=".00000001" value="<?=$rate ?>">

	 		<button name="submit" type="submit">Calculate</button>

	 	</div>

	 	<?php echo "<h2 class='strong-voice'> <span>&#8364;</span>$formatedEuros</h2>"; ?>

	 </form>
</div>