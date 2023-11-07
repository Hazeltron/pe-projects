<?php 
include '../../header.php';

?>
			

<section class="layout-intro">
	<div class="inner-column layout-intro-container">

		<div class="layout-intro-content">
			<h1 class="loud-voice">Layout Garden</h1>
			<p>At it’s core a layout garden is an area designed to showcase layouts. It’s meant to impress people.
			<p>More than that, however, it’s a testing ground used to experiment and learn. In my case, I’ve been interested in how designers and developers make choices at big name brands when implementing smaller, more modularized layouts such as CTAs and marketing materials.</p> 
			<p>In other words, this is a school, a playground and a challenge arena rolled up in one.
			Each of these layouts are designed to be highly responsive and fun. So, take a look around!</p>
		</div>

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

		<div class="layout-controls">

			<label for="screen-size-slider" class="calm-strong-voice">Screen Size</label>
			<input type="range" id="screen-size-slider" min="1" max="3" step="1" max="3" value="3">
			<button class="calm-strong-voice button starbucks-button-wire">Toggle wireframe</button>

		</div>
		<hr>
	</div>
</section>
				

			
<section class="starbucks-container layouts" data-wire="starbucks-content">

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

				<div class="layout-controls">

					<label for="screen-size-slider" class="calm-strong-voice">Screen Size</label>
					<input type="range" id="screen-size-slider" min="10" max="100" step="1" value="50">
					<button class="calm-strong-voice button <?=$layout['wire-button']?>">Toggle wireframe</button>

				</div>
				


			</div>
		</section>

		<hr>
			

		<section class="<?=$layout['class']?> layouts screen" data-screen="<?=$layout['button']?>" data-wire="<?=$layout['button']?>">
			<div class="inner-column">

				<?php include(getFile("modules/{$layout['layout']}/template.php")); ?>

			</div>
		</section>


		<section class="case-study-container">
			<inner-column>
				<a class="calm-strong-voice" href="<?=$layout['link']?>">Source</a>
				<button class="calm-strong-voice button <?=$layout['button']?>">View Case Study</button>
				

					<div class="case-study-content" data-target="<?=$layout['button']?>">

						<h2 class="strong-voice">Why:</h2>
						<?php foreach($layout['whyText'] as $whyText){ ?>
							<?= $whyText ?>
						<?php } ?>
						

						<h2 class="strong-voice">Difficulties:</h2>
						<?php foreach($layout['diffText'] as $diffText){ ?>
							<?= $diffText ?>
						<?php } ?>
						

						<h2 class="strong-voice">How I made it:</h2>
						<?php foreach($layout['howText'] as $howText){ ?>
							<?= $howText ?>
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