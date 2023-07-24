<?php 
include "header.php";
 ?>

 <style>
 	
 	.title{
 		background-color: coral;
 	}

 	.feild {
 		display: flex;
 		flex-direction: column;
 		margin-left: 20px;
 		margin-right: 20px;
 	}

 	textarea {
 		max-width: 700px;
 		
 	}

 	button {
 		min-width: 100px;
 		font-size: 20px;
 		margin-top: 20px;
 		margin-left: 20px;
 	}

 	.qa-form-output{
 		background-color: coral;
 		
 	}

 
 	

 </style>


<section class="title">
 <h1>Q & A Generator</h1>
 <p>Please answer the questions and we'll generate a log of our Q&A with PHP adding quotes.</p>
</section>




<h2>What's your favorite quote?</h2>
 <form method="post">

 	<div class="feild">
 		<label>Enter quote</label>
 		<textarea name="quote-entry" cols="30" rows="10"></textarea>
 	</div>


 <h2>Who said it?</h2>
 	
 	<div class="feild">
 		<label>Enter name</label>
 		<textarea name="name-entry" cols="30" rows="10"></textarea>
 	</div>

 	<button type="submit">Submit</button>

 	</form>

 	
 

<section class="qa-form-output">
 <?php 

$push = $_POST;

$quoteEntry = $_POST["quote-entry"];
$nameEntry = $_POST["name-entry"];

if(isset($quoteEntry) ) {
	echo "<h3> Q: What's your favorite quote? <br> A: '" . $quoteEntry . ".' </h3>";
}
else{
	echo "<p>Please fill in quote field.</p>";
}

if(isset($nameEntry) ) {
	echo "<h3> Q: Who said it? <br> A: '" . $nameEntry . ".' </h3>";
}
else{
	echo "<p>Please fill in name field.</p>";
}

 ?>

 </section>



