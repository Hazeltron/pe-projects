
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
		 	<p>This is my first project!</p>

		 <?php } ?>

		 <?php if ($page == 'project two') { ?>

		 	<h1>Project Two</h1>
		 	<p>This is my second project!</p>

		 <?php } ?>

	</div>
</section>

<?php 
	include "footer.php";
?>

