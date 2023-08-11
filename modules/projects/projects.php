<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="It's been a weird day.">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Paul Hazelton">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Paul Hazelton</title>

        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@0;1&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../../css/settings.css">

        <link rel="stylesheet" href="../../css/site.css">

        <link rel="stylesheet" href="../../css/setup.css">

        <link rel="stylesheet" href="../../css/structure.css">

        <link rel="stylesheet" href="../../css/modules.css">


        <link rel="stylesheet" href="../../css/font.css">



    </head>

    <body>
    	
<?php 
	// include "../../header.php";
	include "../../nav.php";
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
	include "../../footer.php";
?>

