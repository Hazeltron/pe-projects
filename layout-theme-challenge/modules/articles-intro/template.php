
<?php include ('data/articles.php'); ?>

<articles-intro>
	<header>
		<h2 class='attention-voice'>Experiences</h2>

		<p>At Coral Cove, possibilities unfold. Immerse yourself in unforgettable experiences—whether snorkeling our breathtaking reefs, fishing the open seas, or simply basking in the sun. Your desires find a home here.</p>
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
