<?php include ('header.php'); ?>

<section class="about">
	<div class="inner-column">

		<div class="about-container">

			<section class="about-content">
				<h1 class="loud-voice">Paul Hazelton.</h1>
				<h2 class="medium-voice">Designer & Developer</h2>
				<p>
				I believe the web can be a more vibrant and original space through collaberation and empathy. I enjoy creating visual languages, design systems and thinking about how the little boxes that make up the web can work smarter. <br><br>	
				Currently, I'm interested in building responsive layout modules, which you can view in my Layout Garden.<br> <br>
				If you want to learn more, check out my <a href="https://substack.com/@hazeltron?utm_source=user-menu" class="calm-strong-voice">SubStack!</a> 
				</p>
			</section>

		</div>
		
	</div>
</section>


<section class="contact-content">
	<div class="inner-column">
		<h2 class="attention-voice">Contact</h2>
		<ul>
			<li><i>Cell:</i> (719)337-0666</li>
			<li><i>Email:</i> paulhazelton.work@gmail.com</li>
			<li><i>GitHub:</i> Hazeltron</li>
		</ul>
	</div>
</section>

<section class="layout-template">
	<inner-column>
		<div class="layout-template-container">
			<div class="box1"></div>
			<div class="box2"></div>
			<div class="box3"></div>
			<div class="box4"></div>
			<div class="box5"></div>
			<div class="box6"></div>
		</div>	
	

	</inner-column>
	
</section>


<section>
	<div class="inner-column resume-controller">
		<h2 class="loud-voice">Resume</h2>
		<button class="calm-strong-voice resume-button">View</button>

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

</section>






<?php include ('footer.php'); ?>
