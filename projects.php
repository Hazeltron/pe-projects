
<?php 
	include "header.php";
	include "nav.php";

	$page = null;

	if ( isset($_GET['page']) ){
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}


?>


<section>
	<div class="inner-column">
		<nav>
			<ul>
				<li><a href="?page=home">Summary</a></li>
				<li><a href="?page=project one">project one</a></li>
				<li><a href="?page=project two">project two</a></li>
			</ul>
		</nav>

		<?php if ($page == 'home') { ?>

			<section>
    <div class="inner-column">
        <div class="landing-image">

            <section class="trans-message">


                <h1>Projects</h1>
                <p>View what I've made.</p>


            </section>
     
    </div>
</section>

		 	<h2>Projects Summary</h2>
		 	<p>These are projects that I've made while learning to program and design. Infact this page is it's own project. It uses querry strings using PHP to esentially create a website within a website.</p>

		 <?php } ?>

		 <?php if ($page == 'project one') { ?>

		 	<h1>Project One</h1>
		 	<picture>
		 		<img src="https://m.media-amazon.com/images/I/71V0QQRO9fL.jpg" alt="">
		 	</picture>
		 	<p>This is my first project. It's a calculator that tells you how many drinks each guest at a party can have.</p>
		 	<a href="?page=details-project-one">Learn more!</a>

		 <?php } ?>

		 <?php if ($page == 'project two') { ?>

		 	<h1>Project Two</h1>
		 	<p>This is my second project!</p>

		 <?php } ?>

		 <?php if($page == 'details-project-one'){ ?>

		 	<section>

		 		<div class="inner-column">

				 	<h1>Caalculator</h1>
				 	<picture>
				 		<img src="#" alt="#">
				 	</picture>

		 		</div>
		 	</section>

		 	<section>
		 		<div class="inner-column">

				 	<h2>languages used</h2>
				 	<ul>
				 		<li>PHP</li>
				 		<li>HTML</li>
				 		<li>CSS</li>
				 	</ul>

				 	<h2>Case Study</h2>
				 	<p>This was eally the first thing I ever made with PHP. It's not the greatest but....</p>

		 		</div>
		 	</section>



		 <?php } ?>

	</div>
</section>

<?php 
	include "footer.php";
?>

