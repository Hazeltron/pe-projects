<?php
include "../../header.php";



?>

<?php 

include ("project-data.php");

// $thisProject = null;
//loop through project data
//if there is an id in the browser then display data for that page


if(isset($_GET['data'])){
	$page_id = $_GET['data'];
	}else{
		echo "no";
}

foreach($projectData as $data){
	if($page_id == $data['id']){
		$page = $data;
	} 
}

?>


<?php if(isset($page)){?>


<section>
	<div class="inner-column">
		
		<h1><?=$page["name"]?></h1>

			<picture>
				<img src="https://m.media-amazon.com/images/I/71V0QQRO9fL.jpg" alt="">
			</picture>

		<h2>Case Study hi</h2>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, vero vitae. In esse debitis distinctio accusantium quisquam, odit molestias, sequi?</p>

<?php }else{ echo "PHP is stupid as fuck";} ?>
	</div>
</section>

