<?php 
	$heading = $heading ?? "New apple in the bunch";
	$paragraph = $paragraph ?? "Introducing our Iced Apple Crisp Oatmilk Shaken Espresso with a perfectly balanced taste.";
?>	


<starbucks-cta>

	<picture class="coffee">
		<img src="assets/starbucks.png" alt="Iced coffee with cream.">
	</picture>

	<text-content>

		<h2 class="attention-voice"><?=$heading?></h2>
		<p><?=$paragraph?></p>
		<a class="button" href="">Order Now</a>

	</text-content>
	
</starbucks-cta>

<?php unset($heading, $paragraph); ?>
	
	


