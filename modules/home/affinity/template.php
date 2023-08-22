
<?php include ("data-php/affinity-data.php"); ?>

<ul class="affinity-showcase">

	<?php foreach ($graphics as $graphic) { ?>

	<li class="affinity-card">

		<h3 class="strong-voice"><?=$graphic["name"];?></h3>

		<picture>
			<img src="<?=$graphic["image"];?>"alt="#">
		</picture>

		<p><?=$graphic["description"];?></p>

	</li>
	<?php } ?>
</ul>