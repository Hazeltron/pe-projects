
<?php

include ("data-php/affinity-data.php");

?>

<h2>Affinity Work</h2>
	<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Officiis sed ex saepe dignissimos provident! Error ratione laudantium dolorem enim consectetur quod minima distinctio, deleniti illo eos impedit cupiditate sed doloremque veritatis laboriosam quas id totam facere dicta iste et fugiat.</p>

	<ul class="affinity-showcase">

		<?php 
		

		foreach ($graphics as $graphic) { ?>

			<li class="affinity-card">

			<h3><?=$graphic["name"];?></h3>

			<picture>
				<img src="<?=$graphic["image"];?>"alt="#">
			</picture>

			<p><?=$graphic["description"];?></p>

		</li>
		<?php } ?>
	</ul>