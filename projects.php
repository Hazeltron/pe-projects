
<?php 
	include "header.php";
	include "nav.php";
	include "project-data.php";

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
				<li><a href="?page=projects list">Project List</a></li>
				<li><a href="?page=create">Add</a></li>
			</ul>
		</nav>
	</div>
</section>

		<?php if ($page == 'home') { 
			include "summary.php";
		} ?>

		 <?php if ($page == 'projects list') { 
		 	include "projects-list.php";
		} ?>

		 <?php if($page == 'project details'){
		 	include "project-details.php";
		} ?>
		<?php if($page == 'create'){
		 	include "create.php";
		} ?>


<?php 
	include "footer.php";
?>

