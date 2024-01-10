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

	{
        "name": "disfutar",
        "link": "https://www.disfrutarbarcelona.com/?lang=en",
        "class": "disfutar",
        "button": "dis",
        "wire-button": "dis-wire",
        "screen-button": "dis-screen",
        "range-slide": "dis-range",
        "whyText": "",
        "diffText": " ",
        "howText": " ",
        "layout": "simple-menu",
        "id": "dis"
    },
    {
        "name": "montana cans",
        "link": "https://www.montana-cans.com/",
        "class": "montana",
        "button": "cans",
        "wire-button": "cans-wire",
        "screen-button": "montana-screen",
        "range-slide": "cans-range",
        "whyText": "why though",
        "diffText": "",
        "howText": "",
        "layout": "montana-cans",
        "id": "montana"
    }