


<article-grid>
		<ul class='article-list'>

<?php
	include '../../data-php/layout-card-data.php';
	foreach($articles as $article){ 
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $article['thumbnail']; 
?>


<li>
<article class='article-card'>
	<picture>
		<img src='assets/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title lay-attention-voice'><?=$heading?></h1>

		<p class='teaser lay-calm-voice'><?=$description?></p>

		<a class='card-button lay-calm-voice-bold' href='#'>BOOK</a>
	</text-content>
</article>
</li>
<?php }?>

</ul>
	</article-grid>

<?php unset($heading); ?>

