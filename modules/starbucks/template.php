<?php 
	$heading = $heading ?? "Brewed with care";
	$paragraph = $paragraph ?? "Since 2011, we've been brewing in the same place, with the same ingredients for the same crisp taste.";
	$link = $link ?? "View Now";
?>	


<starbucks-cta>

	<picture class="coffee">
		<img src="assets/beer-pour.png" alt="Iced coffee with cream.">
	</picture>

	<text-content>

		<h2><?=$heading?></h2>
		<p><?=$paragraph?></p>
		<a class="coffee-button" href=""><?=$link?></a>

	</text-content>
	
</starbucks-cta>

<?php unset($heading, $paragraph, $link); ?>
	
	


