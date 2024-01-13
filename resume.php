<!-- <section class="resume-title">
	<div class="inner-column resume-title-controller">
		<h2 class="loud-voice">Resume</h2>
		<button class="calm-strong-voice button">View</button>

	</div>
</section>


<section class="full-resume">

	<section class="educ-contact">
		<div class="inner-column">
		

			<ul class="educ-contact-container">
				<li class="education">
					
					<h2 class="attention-voice">Education</h2>

					<p>Colorado State University<br>
					Fort Collins, CO<br>
					Bachelor of Arts (B.A.) Mass Communication and Journalism (Jun 2016)</p>
					
				</li>
				
			</ul>
			

		</div>
	</section>



	<section class="additional">
		<div class="inner-column">

			<section class="add">

				<div>

					<h2 class="attention-voice">Skills</h2>
					<p class="strong-voice">Programming</p>
					<p class="calm-voice">HTML / CSS / PHP / JavaScript</p>

					<p class="strong-voice">Design</p>
					<p class="calm-voice">Figma / Affinity Designer</p>

				</div>
				

			</section>

		</div>
	</section>



	<section class="experience">
		<div class="inner-column">

		<h2 class="attention-voice">Experience</h2>

        <?php 
					include("data-php/resume-xp-data.php");
					
					foreach($facts as $fact){?>

				<ul class="xp-container">


				<li>
					<h3 class="strong-voice"><?=$fact["date"]?></h3>
				</li>


				<li>
					<h3 class="attention-voice"><?=$fact["title"]?></h3>
				</li>

				</ul>

				<p class="strong-voice"><?=$fact["location"]?></p>

				<p><?=$fact["description"]?></p>

				<?php } ?>

		</div>
	</section>

</section> -->