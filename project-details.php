<?php

include ("project-data.php");

?>

<?php 

foreach ($projectData as $project) {
	echo $project["name"];
}

if ( isset($_GET["id"]) ) {
	echo "yay"; 
} else{
	echo "not working.";
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

