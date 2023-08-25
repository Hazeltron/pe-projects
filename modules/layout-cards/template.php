<section>
	<div class="inner-column">


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
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'>BOOK</a>
	</text-content>
</article>
</li>
<?php }?>

</ul>
	</article-grid>

	</div>
</section>