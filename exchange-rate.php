<?php 
	include "header.php";
?>

<style>
	
	.field{
		display: flex;
		flex-direction: column;
		margin-right: 20px;
		margin-left: 20px;
		margin-top: 20px ;
	}

	.field, label{
		margin-top: 10px;
	}
	input{
		max-width: 200px;
		margin-top: 10px;
	}

	button{
		max-width: 100px;
		margin-top: 20px;
		background-color: greenyellow;
		font-size: 16px;
	}
</style>


<?php

	$usDollars = 0;
	$euros = 0;
	$rateFrom = 0;
	$rateTo = 0;
 ?>


 <div class="inner-column">

	 <form method="post">

	 	<h1>Exchange rate calculator</h1>
	 	<p>This will tell you what euros mean in terms of dollars. That is to say, it'll show you the conversion of a given euro amount rounded up to the next penny--in dollars.</p>

	 	<div class="field">
	 		
	 		<label>How many Euros do you have?</label>
	 		<input type="number" name="euros" min="0">

	 		<label>What is the current exchange rate?</label>
	 		<input type="number" name="euro-rate" min="0">

	 		<button name="submit" type="submit">Calculate</button>

	 	</div>

	 </form>
</div>