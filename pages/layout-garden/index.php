<?php 
include '../../header.php';

?>
			

<section>
	<div class="inner-column">

		<h1 class="loud-voice">Layout Garden</h1>
		<p>What is a layout garden and why have one? <br>
		</p>
		
	</div>
</section>

<?php 
	$json = file_get_contents('../../data-php/layout-garden.json');
	$layouts = json_decode($json, true);

	foreach($layouts as $layout){ ?>

		<section class="case-study">
			<div class="inner-column">

				<h2 class="attention-voice"><?=$layout['name']?></h2>
				<a class="calm-strong-voice" href="<?=$layout['link']?>">Source</a>

				<h2 class="strong-voice">Why:</h2>
				<p><?=$layout['whyText']?></p>

				<h2 class="strong-voice">Difficulties:</h2>
				<p><?=$layout['diffText']?></p>

				<h2 class="strong-voice">How I made it:</h2>
				<p><?=$layout['howText']?></p>

			</div>
		</section>
			

		<section class="<?=$layout['class']?>">
			<div class="inner-column">

				<?php include(getFile("modules/{$layout['layout']}/template.php")); ?>

			</div>
		</section>

<?php } ?>




<section class="case-study">
			<div class="inner-column">

				<h2 class="attention-voice">Starbucks</h2>
				<a class="calm-strong-voice" href="https://www.starbucks.com/">Source</a>

				<h2 class="strong-voice">Why:</h2>
				<p></p>

				<h2 class="strong-voice">Difficulties:</h2>
				<p></p>

				<h2 class="strong-voice">How I made it:</h2>
				<p></p>

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














<?php include '../../footer.php'; ?>