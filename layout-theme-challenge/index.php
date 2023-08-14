
<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Theme challenge master file</title>
		<meta name='description' content='Theme challenge master file'>
		<meta property='og:image' content='Can you research emulate a website for a specific niche industry?'>

		<link rel='stylesheet' href='styles/site.css'>
		
		<link href="https://fonts.googleapis.com/css2?family=Average+Sans&family=Raleway:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
	</head>


	<body>

		<header class="sticky-nav" id="top">
		<inner-column>
			
			<?php include('modules/mast-head/template.php'); ?>

		</inner-column>	
		</header>


		<main id="page-content">

			<section class='welcome' id='welcome'>
			<inner-column>

				<?php include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
			</section>


			<section class='sign-up' id='sign-up'>
			<inner-column>

				<?php include('modules/call-to-action/template.php'); ?>

			</inner-column>
			</section>


			<section class='background-img' id='background-img'>
			<inner-column>

				<?php include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
			</section>


			<section class='latest' id='latest'>
			<inner-column>

				<?php include('modules/articles-intro/template.php'); ?>

			</inner-column>
			</section>


			<section class='get-involved' id='get-involved'>
			<inner-column>

				
				<?php 
				$heading = "Sign up for our exclusive packages.";
				$paragraph = "Becoming a member of Sandals exclusive loyalty group will ensure lower prices and upgrades for packages and events. After your eventual death, your children will be grandfathered in. Then they can join the Illumanati like you.";
				include('modules/call-to-action/template.php'); 
				?>

			</inner-column>
			</section>
		</main>


		<footer class="bottom">
		<inner-column>
			
			<?php include('modules/site-map/template.php'); ?>

		</inner-column>
		</footer>

	</body>

</html>