<?php include('../header.php'); ?>

<section>
	<div class="inner-column">

		<form method="Post">
			<field class="pizza">

				<label for="people" class="calm-voice">How many people are at the party?</label>
				<input  id="people" type="number">

				<label for="pizza" class="calm-voice">How many pizza's did you order?</label>
				<input  id="pizza" type="number">

				<label for="slices" class="calm-voice">How many slices are there per pizza?</label>
				<input id="slices" type="number">

				<button type="submit" value="submit">Enter</button>

			</field>

			<output></output>
		</form>


		
	</div>
</section>

<script src="js/pizza-party.js"></script>