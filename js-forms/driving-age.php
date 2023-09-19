<?php include('../header.php'); ?>

<section>
	<div class="inner-column">

		<form method="Post">
			<field class="driving-age">

				<label for="age" class="calm-voice">How old are you?</label>
				<input  id="age" type="number">

				<label for="state" class="calm-voice">Where are you from?</label>
				<select id="state">
					<option value="Alabama">Alabama</option>
					<option value="Alaska">Alaska</option>
					<option value="Arizona">Arizona</option>
					<option value="Arkansas">Arkansas</option>
					<option value="California">California</option>
					<option value="Colorado">Colorado</option>
					<option value="Connecticut">Connecticut</option>
					<option value="Delaware">Delaware</option>
					
				</select>
				



				<button type="submit" value="submit">Enter</button>

			</field>

			<output></output>
		</form>


		
	</div>
</section>

<script src="js/driving-age.js"></script>