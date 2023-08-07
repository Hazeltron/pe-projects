
<?php include ('data/articles.php'); ?>

<articles-intro>
	<header>
		<h2 class='attention-voice'>Experiences</h2>

		<p>At sandals anything is possible. We offer unforgettible experiencs. Wether you want to snorkle our breathtaking reefs, fish the open seas, or you just want to enjoy the sun--It can be found here.</p>
	</header>

	<article-grid>
		<ul class='article-list'>

			<?php foreach ($articles as $article) { ?>
				<li class='article'>
					<?php include('modules/article-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</article-grid>
</articles-intro>
