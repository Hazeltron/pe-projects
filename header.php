<?php 
	include('config.php'); 
	include('functions.php');
?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Imagine, Innovate, Build">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="author" content="Paul Hazelton">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<base href="<?=BASE_URL?>">

		<title>Paul Hazelton</title>

		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;900&family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


		<link rel="stylesheet" href="css/site.css">
		



	</head>

	<body>
		<header class="sticky-nav">

			
			<div class="inner-column">
				<nav class="nav-content">
					<ul class="logo">
						<li class="strong-voice">Haze</li>
						<li>
							<button class="toggle calm-nav-voice">Menu</button>
						</li>
					</ul>
					<ul class="nav-links">
						<li>
							<a class="calm-nav-voice" href="index.php">Home</a>
						</li>
						<li class="garden">
							<a class="calm-nav-voice" href="pages/layout-garden">Layout Garden</a>
						</li>
						<li class="forms-garden">
							<a class="calm-nav-voice" href="pages/form-garden">Form Garden</a>
						</li>
						<li>
							<button class="toggle calm-nav-voice">Close</button>
						</li>
					</ul>
				</nav>
				

			</div>
		

		</header>

		<script>
			var body = document.querySelector('body');

// set up a "listener" that will 
// listen for "clicks" (and taps) on the whole page!
document.addEventListener('click', function(event) {

  console.log(event.target);

  if ( event.target.matches('.toggle') ) {
    body.classList.toggle('small-menu-open');
  }

  if ( event.target.matches('a') ) {
    alert(`I'm a link for ${event.target.textContent}`);
  }

});

		</script>

		<main>

			<!-- page starts here -->
