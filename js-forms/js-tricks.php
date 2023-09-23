<?php include('../header.php'); ?>

<style>

	div{
		background-color: black;
	}

	div.fancy {
		background: salmon;
	}
</style>

<section>
	<div class="inner-column">
		<button id="body-color">click me</button>
		<div class="fancy" id="div">
			something
		</div>	
	</div>
</section>
	

	<style>
		.menu {
			display: none;
		}
		section.menu-open {
/
		}

		section.menu-open .menu{
			display: block;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;

			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background-color: teal;
		}
	</style>

<section id="navSection">
	<div class="inner-column">
		<button rel="toggle">toggle menu</button>
		<nav class="menu">
			<a href="#">Home</a>
			<a href="#">about</a>
			<a href="#">content</a>

			<button rel="toggle">close</button>

		</nav>
	</div>
</section>





<script src="js/js-tricks.js"></script>