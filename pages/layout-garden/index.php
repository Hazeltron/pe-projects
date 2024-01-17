<?php 
include '../../header.php';

?>
			
<section class="layout-intro">
	<div class="inner-column layout-intro-container">

		<div class="layout-intro-content">
			<h1 class="loud-voice">Layout Garden</h1>
			<p>At its core a layout garden is an area designed to showcase responsive web layouts.</p>
			<p>It’s a testing ground used to experiment and learn. In my case, I’ve been interested in how designers and developers make choices at big name brands when implementing smaller, more modularized layouts such as calls to action, banners and product galleries.</p> 
			<p>In other words, this is a school, a playground and a challenge arena rolled up in one.
			Each of these layouts is designed to be responsive and fun. So, take a look around! <span class="calm-strong-voice">And please reference the video to see how to use each layout.</span></p> 
		</div>

		<picture>
			<img src="assets/how-to.gif" alt="">
		</picture>

		<!-- <nav class="layout-links">
			<h2 class="strong-voice">Find a Project</h2>
			<ul>
				<li><a href="pages/layout-garden/#starbucks" class="calm-strong-voice">Starbucks</a></li>
				<li><a href="pages/layout-garden/#cards" class="calm-strong-voice">Cards</a></li>
				<li><a href="pages/layout-garden/#dis" class="calm-strong-voice">Simple Menu</a></li>
				<li><a href="pages/layout-garden/#timland" class="calm-strong-voice">Timberland</a></li>
				<li><a href="pages/layout-garden/#montana" class="calm-strong-voice">Montana Cans</a></li>
			</ul>
		</nav> -->
		
	</div>
</section>



		<?php 
	$json = file_get_contents('../../data-php/layout-garden.json');
	$layouts = json_decode($json, true);

	foreach($layouts as $layout){ ?>
		<layout-section-wrapper>
		<section class="case-study">
			<div class="inner-column">

				<h2 class="attention-voice" id="<?=$layout['id']?>"><?=$layout['name']?></h2>

				<notes>
					<h3 class="calm-strong-voice">What is it?</h3>
					<p class="calm-voice"><?=$layout['what']?></p>
				</notes>
				

				<div class="layout-controls">

					<label for="size" class="calm-strong-voice">Screen Size: <span></span></label>
					<input type="range" id="size" class="size" min="340" max="1000" step="3" value="1000">
					<button class="calm-strong-voice button <?=$layout['wire-button']?>">Toggle content</button>

				</div>
				


			</div>
		</section>

		<hr>
			

		<section class="<?=$layout['class']?> layouts bordered screen"  data-wire="<?=$layout['button']?>" data-screen="<?=$layout['button']?>">
		<div class="inner-column">

			<resizer> 
			

			<?php include(getFile("modules/{$layout['layout']}/template.php")); ?>
			
			</resizer>

			</div>
		</section>
		

		</section>

		<section class="case-study-container">
			<inner-column>
			<a href="<?=$layout['link']?>"   class="calm-strong-voice source">Source</a>
			<button class="calm-strong-voice button <?=$layout['button']?>">View notes</button>
				

					<div class="case-study-content" data-target="<?=$layout['button']?>">

						<h2 class="calm-strong-voice">Why:</h2>
						<?php foreach($layout['whyText'] as $whyText){ ?>
							<?= $whyText ?>
						<?php } ?>
						

						<h2 class="calm-strong-voice">Difficulties:</h2>
						<?php foreach($layout['diffText'] as $diffText){ ?>
							<?= $diffText ?>
						<?php } ?>
						

						<h2 class="calm-strong-voice">How I made it:</h2>
						<?php foreach($layout['howText'] as $howText){ ?>
							<?= $howText ?>
						<?php } ?>
						
						
						

					</div>

			</inner-column>
		</section>

		</layout-section-wrapper>
		


		
		
<?php } ?>

<layout-section-wrapper>
	<section class="starbucks-study" id="starbucks">
	<div class="inner-column">

	<h2 class="attention-voice">Starbucks</h2>

	<notes>
	
		<h2 class="calm-strong-voice">What is it?</h2>
		<p class="calm-voice">This is based on a classic Starbucks layout that they haven’t changed (as far as I can tell) since CSS Flex was introduced in 2009. I’m not a huge fan of Starbucks so I changed it and instead of selling coffee it now sells beer.</p>
		<a href="<?=$layout['link']?>"   class="calm-strong-voice">Link to site</a>
	</notes>

		<div class="layout-controls">

			<label for="size" class="calm-strong-voice">Screen Size: <span></span></label>
			<input id="size" type="range" class="size" id="size" min="340" max="1000" step="3" value="1000">
			<button class="calm-strong-voice button starbucks-button-wire">Toggle content</button>

		</div>
		<hr>
	</div>
</section>
				

			
<section class="starbucks-container layouts bordered screen" data-wire="starbucks-content" data-screen="starbucks-content">
<div class="inner-column">
	<resizer>

	<section class="starbucks pumpkin">
		
			
			
		<?php  
				$heading = "Grab a glass";
				$paragraph = "Our signature amber is back and better than ever. Made with home-grown American-variety hops, enjoy notes of citrus, fruit and pine for an unforgettable pour.";
				$link = "Order Now";
				?>
				
			<?php include(getFile('modules/starbucks/template.php')); ?>
			
		
	</section>

	<section class="starbucks iced">
		

			<?php include(getFile('modules/starbucks/template.php')); ?>
			
		
	</section>

	<section class="starbucks flip">
		

			<?php  
				$heading = "Countless choices";
				$paragraph = "Say hello to our new line of beers. It can be difficult making decisions, so why not try them all?";
				$link = "Order Now";
			?>

			<?php include(getFile('modules/starbucks/template.php')); ?>
			
		
	</section>

	</resizer>
	


	</div>
</section>


<section class="case-study-container">
			<div class="inner-column">
			<a class="calm-strong-voice source" href="https://www.starbucks.com/">Source</a>
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

</layout-section-wrapper>




















<?php include '../../footer.php'; ?>