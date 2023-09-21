<?php include('../header.php'); ?>


<style>
	.temp-converter .field.option {
		display: flex;
		flex-direction: row-reverse;
		align-items: center;
		justify-content: flex-end;
	}
</style>

<section>
	<div class="inner-column">

		<form method="Post">
			<field class="temp-converter">

				<h2 class="attention-voice">Temperature converter</h2>

				<p>Please select what you want your temerature to be converted into:</p>

				<div class="field option">
					<label for="">fahrenheit</label>
					<input 
					type="radio" 
					name="temp-converter"
					class="radio" 
					value="fahrenheit" checked
					id="f">
				</div>

				<div class="field option">
					<label for="">celsius</label>
					<input 
					type="radio" 
					name="temp-converter"
					class="radio" 
					value="celsius" 
					id="c">
				</div>

				
				
				<label for="temp" class="calm-voice">What's the temperature?</label>
				<input  id="temp" type="number">

				
				



				<button type="submit" value="submit">Enter</button>

			</field>

			<output></output>
		</form>


		
	</div>
</section>

<script src="js/temp-converter.js"></script>