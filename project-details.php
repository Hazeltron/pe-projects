
<?php 
include ("project-data.php");


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


<section class="project-detail">
	<div class="inner-column">
		
		<h1 class="loud-voice"><?=$page["name"]?></h1>

		<picture>
			<img src="https://m.media-amazon.com/images/I/71V0QQRO9fL.jpg" alt="">
		</picture>

		<h2 class="attention-voice">Case Study</h2>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, vero vitae. In esse debitis distinctio accusantium quisquam, odit molestias, sequi?</p>

<?php }else{ echo "Not working";} ?>
	</div>
</section>

