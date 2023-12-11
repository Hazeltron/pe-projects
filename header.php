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

		<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
			<symbol id="icon-menu" viewBox="0 0 512 512">
				<path
					d="m512 384l0 37c0 5-2 9-5 12-4 4-8 6-13 6l-476 0c-5 0-9-2-13-6-3-3-5-7-5-12l0-37c0-5 2-9 5-13 4-3 8-5 13-5l476 0c5 0 9 2 13 5 3 4 5 8 5 13z m0-110l0 37c0 5-2 9-5 13-4 3-8 5-13 5l-476 0c-5 0-9-2-13-5-3-4-5-8-5-13l0-37c0-5 2-9 5-13 4-3 8-5 13-5l476 0c5 0 9 2 13 5 3 4 5 8 5 13z m0-109l0 36c0 5-2 9-5 13-4 4-8 5-13 5l-476 0c-5 0-9-1-13-5-3-4-5-8-5-13l0-36c0-5 2-10 5-13 4-4 8-6 13-6l476 0c5 0 9 2 13 6 3 3 5 8 5 13z m0-110l0 36c0 5-2 10-5 13-4 4-8 6-13 6l-476 0c-5 0-9-2-13-6-3-3-5-8-5-13l0-36c0-5 2-9 5-13 4-4 8-5 13-5l476 0c5 0 9 1 13 5 3 4 5 8 5 13z"
				/>
			</symbol>
			<symbol id="icon-sound" viewBox="0 0 512 512">
				<path d="m311 101l0 310c0 5-2 10-6 13-3 4-7 6-12 6-5 0-10-2-13-6l-95-95-75 0c-5 0-10-2-13-5-4-4-6-8-6-13l0-110c0-5 2-9 6-13 3-3 8-5 13-5l75 0 95-95c3-4 8-6 13-6 5 0 9 2 12 6 4 3 6 8 6 13z m110 155c0 14-4 28-13 40-8 13-18 22-32 27-2 1-4 2-7 2-5 0-9-2-13-6-3-3-5-8-5-13 0-4 1-7 3-10 3-3 5-5 9-7 3-2 6-4 9-7 4-2 6-5 9-10 2-4 3-10 3-16 0-6-1-12-3-16-3-5-5-8-9-10-3-3-6-5-9-7-4-2-6-4-9-7-2-3-3-6-3-10 0-5 2-10 5-13 4-4 8-6 13-6 3 0 5 1 7 2 14 5 24 14 32 26 9 13 13 27 13 41z"/>
			</symbol>
			<symbol id="icon-play" viewBox="0 0 512 512">
      			<path d="m128 96l256 160-256 160z"/>
    		</symbol>
		</svg>


		<link rel="stylesheet" href="css/site.css">
		<!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
		



	</head>

	<body>



		<header class="sticky-nav">
			
			<div class="inner-column">
				<nav class="nav-content">
					<ul class="logo">
						<li class="strong-voice">Haze</li>
						<li>
							<button class="toggle open calm-nav-voice">
								
								<svg class="icon-menu toggle"><use class="toggle" xlink:href="#icon-menu"></use></svg>
								
								
							</button>
						</li>
					</ul>
					<ul class="nav-links">
						<li>
							<a class="calm-nav-voice " href="index.php">Home</a>
						</li>
						<li>
							<a class="calm-nav-voice" href="pages/layout-garden">Layout Garden</a>
						</li>
						<li>
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
const body = document.querySelector('body');

document.addEventListener('click', function(event) {

  console.log(event.target);

  if ( event.target.matches('.toggle') ) {
    body.classList.toggle('small-menu-open')

	// if (window.innerWidth <= 600) {
	// 	body.classList.toggle('small-menu-open');
	// }
  }

});
</script>

		<main>

			<!-- page starts here -->
