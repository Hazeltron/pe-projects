

<?php 

include "project-data.php";



?>

<section class="project-list">
<div class="inner-column">


<?php foreach ($projectData as $data) { ?>

	<h1 class="name attention-voice"><?=$data["name"]?></h1>
	
	<picture>
		<img src="#" alt="#">
	</picture>

	<h3 class="updated strong-voice">Last updated: <?=$data["updated"]?></h3>
	<h3 class="languages strong-voice">Languages used: <?=$data["languages"]?></h3>
	<h3 class="funtion strong-voice">Purpose: <?=$data["function"]?></h3>

	<a class="project-link" href='?page=project details&data=<?=$data["id"]?>'>Learn more</a>


<?php } ?>

	

</div>
</section>