<?php 
include "header.php";
include "project-data.php";


if ( isset($_POST['enter']) ) {
 echo "added";
}




 ?>

 <section>
 	<div class="inner-column">

		<h1>Add a Project!</h1>

		<form class="project-adder" method="post">
			<div class="field">

				<label>Project Name</label>
				<input type="text" name="project-name">

			</div>

			<div class="field">

				<label>Last Updated</label>
				<input type="text" name="update">


			</div>

			<div class="field">

				<label>Languages Used</label>
				<input type="text" name="language">
				

			</div>

			<div class="field">

				<label>Function of Project</label>
				<textarea name="update" id="" cols="30" rows="10"></textarea>
				

			</div>

			<button type="submit" name="enter"> Add project</button>

		</form>
		
	</div>
</section>







 