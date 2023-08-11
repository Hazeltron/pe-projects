<?php 
	// function showErrors(){
	// 	ini_set('display_errors', 1);
	// 	ini_set('displayy_startup_errors', 1);
	// 	error_reporting(E_ALL);
	// }
	// showErrors();

	
	include ('header.php');
	include ('nav.php'); 
?>
			

<section>
	<div class="inner-column">
		<?php include("modules/home/hero/template.php"); ?>
	</div>
</section>

<section class="about">
		<div class="inner-column">

			<?php include("modules/home/about/template.php"); ?>
		</div>

	</section>



	<section class="affinity">

		<div class="inner-column">

			<?php include("modules/home/affinity/template.php"); ?>
		</div>
	</section>

	


<?php include ('footer.php'); ?>
