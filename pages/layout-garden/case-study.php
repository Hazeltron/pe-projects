<section class="case-study-container">
			<inner-column>
				<a class="calm-strong-voice" href="<?=$layout['link']?>">Source</a>
				<button class="calm-strong-voice button <?=$layout['button']?>">View Case Study</button>
				

					<div class="case-study-content" data-target="<?=$layout['button']?>">

						<h2 class="strong-voice">Why:</h2>
						<?php foreach($layout['whyText'] as $whyText){ ?>
							<?= $whyText ?>
						<?php } ?>
						

						<h2 class="strong-voice">Difficulties:</h2>
						<?php foreach($layout['diffText'] as $diffText){ ?>
							<?= $diffText ?>
						<?php } ?>
						

						<h2 class="strong-voice">How I made it:</h2>
						<?php foreach($layout['howText'] as $howText){ ?>
							<?= $howText ?>
						<?php } ?>
						
						
						<?php foreach ($layout['codeExample'] as $codeExampleFile) { ?>
							<div class="code-example">
								<?php include('../../modules/layout-cards/' .$codeExampleFile); ?>
							</div>
						<?php } ?>

					</div>

			</inner-column>
		</section>


        {
        "name": "Hydro-Flask",
        "link": "https://web.archive.org/web/20231010013243/https://www.hydroflask.com/",
        "class": "hydro-flask",
        "button": "hydro",
        "wire-button": "hydro-wire",
        "screen-button": "hydro-screen",
        "range-slide": "hydro-range",
        "whyText": " ",
        "diffText": " ",
        "howText": " ",
        "layout": "hydro-flask",
        "id": "hydro"
    },