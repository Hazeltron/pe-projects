<?php
include "header.php";
include ("project-data.php");

?>

<?php 

$thisProject = null;

foreach ($projectData as $project) {
	if ($project["id"] == $_GET["id"]) {
	$thisProject = $_GET["id"];
	}
}



?>

<section>
	<div class="inner-column">
		
		<h1><?=$project["name"]?></h1>

			<picture>
				<img src="https://m.media-amazon.com/images/I/71V0QQRO9fL.jpg" alt="">
			</picture>

		<h2>Case Study</h2>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, vero vitae. In esse debitis distinctio accusantium quisquam, odit molestias, sequi?</p>


	</div>
</section>

