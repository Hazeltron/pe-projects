<?php 
include '../../header.php';

?>
			

<section class="layout-intro">
	<div class="inner-column layout-intro-content">

		<h1 class="loud-voice">Layout Garden</h1>
		<p>At it’s core a layout garden is an area designed to showcase layouts. It’s meant to impress people.
		<p>More than that, however, it’s a testing ground used to experiment and learn. 
		In my case, I’ve been interested in how designers and developers make choices at big name brands when implementing smaller, more modularized layouts such as CTAs and marketing materials.</p> 
		<p>In other words, this is a school, a playground and a challenge arena rolled up in one.
		Each of these layouts are designed to be highly responsive and fun. So, take a look around!
		</p>

		<div class="layout-links">
			<h2 class="strong-voice">Find a Project</h2>
			<ul>
				<li><a href="#inner-link" class="calm-strong-voice">Starbucks</a></li>
			</ul>
		</div>
		
	</div>
</section>

<section class="starbucks-study">
	<div class="inner-column">

	<h2 class="attention-voice" id="inner-link">Starbucks</h2>

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

<section class="case-study-container">
			<div class="inner-column">
			<a class="calm-strong-voice" href="https://www.starbucks.com/">Source</a>
				<button class="calm-strong-voice button starbucks-button">View Case Study</button>

				<div class="case-study-content" data-target="starbucks-content">
					<h2 class="strong-voice">Why:</h2>
					<p></p>

					<h2 class="strong-voice">Difficulties:</h2>
					<p></p>

					<h2 class="strong-voice">How I made it:</h2>
					<p></p>
				</div>

			</div>
		</section>


<?php 
	$json = file_get_contents('../../data-php/layout-garden.json');
	$layouts = json_decode($json, true);

	foreach($layouts as $layout){ ?>

		<section class="case-study">
			<div class="inner-column">

				<h2 class="attention-voice" id="<?=$layout['id']?>"><?=$layout['name']?></h2>

			</div>
		</section>
			

		<section class="<?=$layout['class']?> layouts">
			<div class="inner-column">

				<?php include(getFile("modules/{$layout['layout']}/template.php")); ?>

			</div>
		</section>

		<section class="case-study-container">
			<inner-column>
				<button class="calm-strong-voice button <?=$layout['button']?>">View Case Study</button>

					<div class="case-study-content" data-target="<?=$layout['button']?>">

						<a class="calm-strong-voice" href="<?=$layout['link']?>">Source</a>

						<h2 class="strong-voice">Why:</h2>
						<?php foreach($layout['whyText'] as $whyText){ ?>
							<p><?= $whyText ?></p>
						<?php } ?>
						

						<h2 class="strong-voice">Difficulties:</h2>
						<?php foreach($layout['diffText'] as $diffText){ ?>
							<p><?= $diffText ?></p>
						<?php } ?>
						

						<h2 class="strong-voice">How I made it:</h2>
						<?php foreach($layout['howText'] as $howText){ ?>
							<p><?= $howText ?></p>
						<?php } ?>
						
						
						<?php foreach ($layout['codeExample'] as $codeExampleFile) { ?>
							<div class="code-example">
								<?php include('../../modules/layout-cards/' .$codeExampleFile); ?>
							</div>
						<?php } ?>

					</div>

			</inner-column>
		</section>
		
<?php } ?>



















<?php include '../../footer.php'; ?>