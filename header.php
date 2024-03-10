<?php 
	include('config.php'); 
	include('functions.php');
?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Frontend developer specializing in design and complex layout problems.">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="author" content="Paul Hazelton">
    	<meta property="og:description" content="Frontend developer specializing in design and complex layout problems.">
    	<meta property="og:image" content="assets/cat.png">
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
			<symbol id="icon-volume-up" viewBox="0 0 512 512">
				<path d="m238 101l0 310c0 5-2 10-6 13-3 4-8 6-13 6-5 0-9-2-12-6l-96-95-74 0c-5 0-10-2-13-5-4-4-6-8-6-13l0-110c0-5 2-9 6-13 3-3 8-5 13-5l74 0 96-95c3-4 7-6 12-6 5 0 10 2 13 6 4 3 6 8 6 13z m109 155c0 14-4 28-12 40-8 13-19 22-32 27-2 1-4 2-7 2-5 0-9-2-13-6-3-3-5-8-5-13 0-4 1-7 3-10 2-3 5-5 8-7 4-2 7-4 10-7 3-2 6-5 8-10 3-4 4-10 4-16 0-6-1-12-4-16-2-5-5-8-8-10-3-3-6-5-10-7-3-2-6-4-8-7-2-3-3-6-3-10 0-5 2-10 5-13 4-4 8-6 13-6 3 0 5 1 7 2 13 5 24 14 32 26 8 13 12 27 12 41z m74 0c0 29-9 56-25 81-16 24-37 42-64 54-2 1-5 1-7 1-5 0-10-2-13-5-4-4-6-8-6-13 0-8 4-13 11-17 11-6 18-10 22-13 14-10 25-23 33-38 8-16 12-32 12-50 0-18-4-34-12-50-8-15-19-28-33-38-4-3-11-7-22-13-7-4-11-9-11-17 0-5 2-9 6-13 3-3 8-5 13-5 2 0 5 0 7 1 27 12 48 30 64 54 16 25 25 52 25 81z m73 0c0 44-12 84-37 121-24 36-56 63-96 81-3 1-5 1-8 1-5 0-9-2-12-5-4-4-6-8-6-13 0-7 4-13 11-17 2-1 4-2 7-3 3-1 5-2 6-3 9-5 17-10 24-15 23-17 41-39 54-64 14-26 20-54 20-83 0-29-6-57-20-83-13-25-31-47-54-64-7-5-15-10-24-15-1-1-3-2-6-3-3-1-5-2-7-3-7-4-11-10-11-17 0-5 2-9 6-13 3-3 7-5 12-5 3 0 5 0 8 1 40 18 72 45 96 81 25 37 37 77 37 121z"/>
			</symbol>
  
			<symbol id="icon-volume-off" viewBox="0 0 512 512">
				<path d="m366 101l0 310c0 5-2 10-6 13-3 4-8 6-13 6-5 0-9-2-12-6l-96-95-74 0c-5 0-10-2-13-5-4-4-6-8-6-13l0-110c0-5 2-9 6-13 3-3 8-5 13-5l74 0 96-95c3-4 7-6 12-6 5 0 10 2 13 6 4 3 6 8 6 13z"/>
			</symbol>
			<symbol id="icon-play" viewBox="0 0 512 512">
      			<path d="m128 96l256 160-256 160z"/>
    		</symbol>
			<symbol id="icon-pause" viewBox="0 0 512 512">
      			<path d="m208 102c-1 0-1 0-2 0l0 0l-53 0c-6 0-11 5-11 11c0 0 0 0 0 0l0 0l0 286l0 0c0 0 0 0 0 0c0 6 5 11 11 11l55 0c6 0 11-5 11-11c0 0 0 0 0 0l0 0l0-286c0 0 0 0 0 0c0-6-5-11-11-11z m162 297l0-286c0 0 0 0 0 0c0-6-5-11-11-11c-1 0-1 0-2 0l0 0l-53 0c-6 0-11 5-11 11c0 0 0 0 0 0l0 0l0 286l0 0c0 0 0 0 0 0c0 6 5 11 11 11l55 0c6 0 11-5 11-11c0 0 0 0 0 0z"/>
    		</symbol>
			<symbol id="icon-plus" viewBox="0 0 512 512">
      			<path d="m288 224l0-128-64 0 0 128-128 0 0 64 128 0 0 128 64 0 0-128 128 0 0-64z"/>
    		</symbol>
			<symbol id="icon-right-arrow" viewBox="0 0 512 512">
				<path d="m144 445c0 0 183-189 183-189c0 0-183-190-183-190c-9-9-9-18 0-25c8-9 17-9 24 0c0 0 201 202 201 202c8 9 8 17 0 25c0 0-201 202-201 202c-7 9-16 9-24 0c-9-7-9-16 0-25"/>
			</symbol>

			<symbol id="icon-right-arrow-complete" viewBox="0 0 512 512">
      			<path d="m457 274c0 11-3 19-10 26l-186 186c-8 7-17 11-26 11-10 0-19-4-26-11l-22-21c-7-7-10-16-10-26 0-10 3-19 10-26l84-84-201 0c-10 0-18-3-24-11-6-7-9-15-9-25l0-37c0-10 3-19 9-26 6-7 14-11 24-11l201 0-84-84c-7-6-10-15-10-25 0-11 3-19 10-26l22-21c7-8 16-11 26-11 10 0 18 3 26 11l186 186c7 6 10 15 10 25z"/>
    		</symbol>

			
		</svg>



		<link rel="stylesheet" href="css/site.css">
	
		<!-- three.js -->
		<script type="importmap">
		{
			"imports": {
			"three": "https://unpkg.com/three@0.161.0/build/three.module.js",
			"three/addons/": "https://unpkg.com/three@0.161.0/examples/jsm/"
			}
		}
		</script>

	</head>

	<body>



		<header class="sticky-nav">
			
			<div class="inner-column">
				<nav class="nav-content">
					<ul class="logo">
						<li class="strong-voice">Haze</li>
						<!-- <li>
							<button class="toggle open calm-nav-voice">
								
								<svg class="icon-menu toggle"><use class="toggle" xlink:href="#icon-menu"></use></svg>
								
								
							</button>
						</li> -->
					</ul>
					<ul class="nav-links">
						<li>
							<a class="calm-nav-voice " href="index.php">Home</a>
						</li>
						<li>
							<a class="calm-nav-voice" href="pages/layout-garden">Layouts</a>
						</li>
						<li>
							<a class="calm-nav-voice" href="pages/form-garden">Forms</a>
						</li>
						<li>
							<a class="calm-nav-voice" href="pages/resume">Resume</a>
						</li>
						<!-- <li>
							<a class="calm-nav-voice" href="pages/form-garden">Form Garden</a>
						</li> -->
						<!-- <li>
							<button class="toggle calm-nav-voice">Close</button>
						</li> -->
					</ul>
				</nav>
				

			</div>
		

		</header>

<!-- <script>
const body = document.querySelector('body');

document.addEventListener('click', function(event) {

  console.log(event.target);

  if ( event.target.matches('.toggle') ) {
    body.classList.toggle('small-menu-open')

	if (window.innerWidth <= 600) {
		body.classList.toggle('small-menu-open');
	}
  }

});
</script> -->

		<main>

			<!-- page starts here -->
