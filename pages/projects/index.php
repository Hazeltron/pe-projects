<?php include('../../header.php') ?>

<?php 

$json = file_get_contents('../../data-php/project-page.json');
$projectSections = json_decode($json, true);

?>



<section>
	<div class="inner-column">

		<h1 class="loud-voice">Projects</h1>
		<p>As I kept learning, I ended up with a lot of projects. If you really want to know how skilled I am apart from this website, here is where you want to look.</p>
		<p>I'm still learning but I've come a long way from wondering how to set HTML elements next to each other (flex/grid).</p>
		<p>Anyway, check them out.</p>
		
	</div>
</section>

<section>
	<div class="inner-column">

		<h2 class="attention-voice">Websites</h2>
		<p>These are websites I've created as practice. In descending order, it goes oldest to most recent.</p>

	</div>
</section>



<?php foreach($projectSections as $section){ ?>
<section>
	<div class="inner-column">

		<h3 class="strong-voice"><?=$section['heading']?></h3>

		<picture>
			<img src="<?='assets/' . $section['image']?>" alt="#">
		</picture>

<?php foreach($section['description'] as $para){ ?> 
		<p><?=$para?></p>

		
<?php } ?> 

		<a href="<?=$section['link']?>">View the project</a>

	</div>
</section>

<?php } ?> 

<?php include('../../footer.php') ?>