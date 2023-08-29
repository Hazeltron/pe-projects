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

<section class="call-to-action">
	<div class="inner-column">

		<?php include(getFile('modules/cta/template.php')); ?>
		
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

<section class="beer-module">
	<div class="inner-column">

		<p class="codepen" data-height="489.296875" data-default-tab="html,result" data-slug-hash="LYXLVGL" data-editable="true" data-user="hazeltron" style="height: 489.296875px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
		  <span>See the Pen <a href="https://codepen.io/hazeltron/pen/LYXLVGL">
		  Beer module</a> by paul hazelton (<a href="https://codepen.io/hazeltron">@hazeltron</a>)
		  on <a href="https://codepen.io">CodePen</a>.</span>
		</p>
		<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

		<p>A reminder to finish this^</p>

	</div>
</section>


<?php include '../../footer.php'; ?>