
<style>
	*{
		box-sizing: border-box;
	}

	body{
		background-color: whitesmoke;
		color: black;
	}

	.field{
		display: flex;
		flex-direction: column;

	}

	textarea{
		max-width: 400px;
	}

	button{
		max-width: 200px;
		margin-top: 10px;
		background-color: dodgerblue;
		color: whitesmoke;
		font-size: 40px;
	}


</style>


<?php 

$push = $_POST;

$text = $_POST["text-box"];

$storyLength = strlen($text);

?>


<form method="post">
	<h1>Write a little story. <br> We'll tell you how long it is.</h1>
	<div class="field">

		<textarea name="text-box" cols="1" rows="7">hello</textarea>

		<button type="submit">Calculate</button>

	</div>

	<h1>Your story is <?=$storyLength?> characters long!</h1>


<?php 
if ($storyLength <= 100) {
	echo "<p>This is too short... You should write more.";
}
else{
	echo "<p>Good job! We liked your story!";
}

?>


</form>