

<?php 

include "project-data.php";



?>

<section>

<div class="inner-column">


<?php foreach ($projectData as $data) { ?>

	<h1 class="name"><?=$data["name"]?></h1>
	<picture>
		<img src="#" alt="#">
	</picture>

	<h3 class="updated">Last updated: <?=$data["updated"]?></h3>
	<h3 class="languages">Languages used: <?=$data["languages"]?></h3>
	<h3 class="funtion">Purpose: <?=$data["function"]?></h3>

	<a href='?page=project details&data=<?=$data["id"]?>'>Learn more!</a>


<?php } ?>

	

</div>
</section>