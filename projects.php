
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

				<li>
					<a href="?page=home" class="<?php if ($page == "home"){ echo 'active';} ?>">Summary</a>
				</li>

				<li>
					<a href="?page=projects list" class="<?php if ($page == 'projects list'){ echo "active";} ?>">Project List</a>
				</li>

				<li>
					<a href="?page=create" class="<?php if ($page == "create"){ echo 'active';} ?>">Add</a>
				</li>

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

