<?php include ('header.php'); ?>
<inner-column>
<home-container>
	
<section class="about">

		<div class="about-container">

			<section class="about-content">
				<h1 class="loud-voice">Paul Hazelton</h1>
				<h2 class="medium-voice">Designer & Developer</h2>
				<p>I believe the web can be a more vibrant and original space through collaboration and empathy. I enjoy creating visual languages, design systems and thinking about how the little boxes that make up the web can work smarter.</p>
				<p>Currently, I'm interested in building responsive layout modules, which you can view in my Layout Garden.</p>
				<p>If you want to learn more, check out my <a href="https://substack.com/@hazeltron?utm_source=user-menu" class="calm-strong-voice">SubStack!</a> 
				</p>

				
			</section>

		</div>

		<section class="contact-content">
	<div class="contact-content-container">
		<h2 class="attention-voice">Contact</h2>
		<ul>
			<li class="calm-voice"><i>Cell:</i> (719) 337-0666</li>
			<li class="calm-voice"><i>Email:</i> paulhazelton.work@gmail.com</li>
			<li class="calm-voice"><i>GitHub:</i> Hazeltron</li>
		</ul>
	</div>
</section>
		
</section>


<section class="layout-template">
        <div class="layout-template-container">
            <div class="box1">
                <picture>
                    <img src="assets/books.png" alt="">
                </picture>
            </div>
            <div class="box2">
                <picture>
                    <img src="assets/travel.png" alt="">
                </picture>
            </div>
            <div class="box3">
                <picture>
                    <img src="assets/code.png" alt="">
                </picture>
            </div>
            <div class="box4">
                <picture>
                    <img src="assets/billards.png" alt="">
                </picture>
            </div>
            <div class="box5">
                <picture>
                    <img src="assets/movies.png" alt="">
                </picture>
            </div>
            <div class="box6">
                <picture>
                    <img src="assets/graph.png" alt="">
                </picture>
            </div>
            <div class="box7">
                <picture>
                    <img src="assets/music.png" alt="">
                </picture>
            </div>
        </div>
</section>


</home-container>
</inner-column>




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






<?php include ('footer.php'); ?>
