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
				<li><a href="pages/layout-garden/#starbucks" class="calm-strong-voice">Starbucks</a></li>
				<li><a href="pages/layout-garden/#cards" class="calm-strong-voice">Cards</a></li>
				<li><a href="pages/layout-garden/#dis" class="calm-strong-voice">Simple Menu</a></li>
				<li><a href="pages/layout-garden/#timland" class="calm-strong-voice">Timberland</a></li>
				<li><a href="pages/layout-garden/#montana" class="calm-strong-voice">Montana Cans</a></li>
			</ul>
		</div>
		
	</div>
</section>

<section class="starbucks-study" id="starbucks">
	<div class="inner-column">

	<h2 class="attention-voice">Starbucks</h2>

		<div class="layout-controls">

			<label for="screen-size-slider" class="calm-strong-voice">Screen Size</label>
			<input type="range" id="range" min="30" max="100" step="1" value="50">
			<button class="calm-strong-voice button starbucks-button-wire">Toggle wireframe</button>

		</div>
		<hr>
	</div>
</section>
				

			
<section class="starbucks-container layouts screen" data-wire="starbucks-content" data-screen="starbucks-content">

	<section class="starbucks pumpkin">
		<div class="inner-column">
			
			
		<?php  
				$heading = "Grab a glass";
				$paragraph = "Our sinature amber is back and better than ever. Made with home-grown American-variety hops, enjoy notes of citrus, fruit and pine for an unforgettable pour.";
				$link = "Order Now";
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
				$heading = "Countless choices";
				$paragraph = "Say hello to our new line of beers. It can be difficult making decisions, so why not try them all?";
				$link = "Order Now";
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
					<p class="calm-voice">Originally I saw a version of this on the Starbucks website. I looked at it as an easy win.</p>
					<p class="calm-voice">I wanted to experiment with limited space, images and flex-blox.</p>

					<h2 class="strong-voice">Difficulties:</h2>
					<p class="calm-voice">Setting the images and text to flex exactly fifty percent of the container was easy, but getting the images to fit perfectly as the screen sized changed wasn’t.</p>
					<p class="calm-voice">I also wanted to find a way to reuse the same HTML and simply change the CSS. Which again, went fine until I realized I would need different text.</p>

					<h2 class="strong-voice">How I made it:</h2>
					<p class="calm-voice">As the screen changed sizes, the images would display different behaviors. Some would stay filling their parents and others would fail to do so, sticking to the center as everything grew around them.<p>
					<p class="calm-voice">At first, I thought, object-fit was the answer. Eventually, I realized that while subtle my images were a mix of landscape and portrait. I normalized them to both be perfect squares as a result.<p> 

					<p class="calm-voice">For the differing text, I set up default text using PHP. </p>
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
					<input type="range" id="<?=$layout['range-slide']?>" min="30" max="100" step="3" value="100">
					<button class="calm-strong-voice button <?=$layout['wire-button']?>">Toggle wireframe</button>

				</div>
				


			</div>
		</section>

		<hr>
			

		<section class="<?=$layout['class']?> layouts screen"  data-wire="<?=$layout['button']?>" data-screen="<?=$layout['button']?>">
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