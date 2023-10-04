<?php include('../header.php'); ?>

<section>
	<div class="inner-column">

		

		<form method="Post">
			<h2 class="strong-voice">Anagrams</h2>
			<p class="calm-voice">This will tell you if the two words you entered are anagrams. <br> Anagrams are words that contain the saame letters, but spell out different words.</p>

			<field class="anagrams">

				<label for="first-word" class="calm-voice">First word:</label>
				<input  id="first-word" type="text">

				<label for="second-word" class="calm-voice">Second word:</label>
				<input  id="second-word" type="text">

				<button type="submit" value="submit">Enter</button>

			</field>

			<output></output>
		</form>


		
	</div>
</section>

<script src="js/anagrams.js"></script>