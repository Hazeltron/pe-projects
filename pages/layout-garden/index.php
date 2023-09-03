<?php 
include '../../header.php';

?>
			

<section>
	<div class="inner-column">

		<h1 class="loud-voice">Layout Garden</h1>
		
	</div>
</section>


<section class="cards">
	<div class="inner-column">

		<?php include(getFile('modules/layout-cards/template.php')); ?>
		
	</div>
</section>

<section class="starbucks pumpkin">
	<div class="inner-column">

		<?php  
			$heading = "Tap for pumpkin";
			$paragraph = "The Pumpkin Spice Latte and Pumpkin Cream Cold Brew are here, and you can order them now on our app when you join Starbucks® Rewards.";
		?>

		<?php include(getFile('modules/starbucks/template.php')); ?>
		
	</div>
</section>

<section class="starbucks iced">
	<div class="inner-column">

		<?php include(getFile('modules/starbucks/template.php')); ?>
		
	</div>
</section>

<section class="starbucks flip">
	<div class="inner-column">

		<?php  
			$heading = "Pastry fans, rejoice";
			$paragraph = "Say hello to the new Baked Apple Croissant filled with warm apple filling.";
		?>

		<?php include(getFile('modules/starbucks/template.php')); ?>
		
	</div>
</section>

<section class="hydro-flask">
	<div class="inner-column">
		
		<?php include(getFile('modules/hydro-flask/template.php')); ?>
		
	</div>
</section>

<section class="disfutar">
	<div class="inner-column">
		
		<?php include(getFile('modules/simple-menu/template.php')); ?>
		
	</div>
</section>

<section class="timberland">
	<div class="inner-column">

		<?php include(getFile('modules/timberland/template.php')); ?>
		
	</div>
</section>






<?php include '../../footer.php'; ?>