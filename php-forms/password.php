<?php  include("../header.php");?>

<style>
.show-pass {
	display: flex;
	flex-direction: row;
	align-items: center;
}

.button {
	max-width: 200px;
}

	
</style>

<script>

	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>

<?php 

$userName = null;
$password = null;
$putUsername = null;


if(isset($_POST['sign-submit']) ){
	if(isset($_POST['sign-username'], $_POST['sign-password'] ) ){
		$putUsername = $_POST['sign-username'];
		$putPassword = $_POST['sign-password'];

		$userInput = [
			[
			"username" => $putUsername,
			"password" => $putPassword,
			],
		];
	
		var_dump($userInput);

		$loginDetails = json_encode($userInput);

		file_put_contents('../data-php/password.json', $loginDetails);
		
	}else{
		echo "no";
	}
} 

?>

<section class="sign-up">
	<div class="inner-column">

		<form method="POST">

<h1 class="loud-voice">Sign Up</h1>

			<div class="field">

				<label>Username</label>
				<input type="text" name="sign-username" minlength="4" required value="<?=$userName?>">

				<label>Password</label>
				<input type="password" name="sign-password" minlength="8" required id="myInput" value="<?=$password?>">

				<div class="show-pass">
					<label>Show password</label>
				<input type="checkbox" onclick="myFunction()">
				</div>

				<button class="button" name="sign-submit" type="submit">Enter</button>

			</div>

		</form>
		
	</div>
</section>

<?php unset($userName, $password); ?> 


<script>

	function seeIt() {
  var x = document.getElementById("myInputtwo");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>

<?php 

$json = file_get_contents('../data-php/password.json');
$userData = json_decode($json, true);


$userName = null;
$password = null;

foreach($userData as $data){
	if(isset($_POST['submit']) ){
		$userName = $_POST['username'];
		$password = $_POST['password'];
	}
}
?>


<section class="password-form">
	<div class="inner-column">

		<form method="POST">

			<h1 class="loud-voice">Login</h1>

			<div class="field">

				<label>Username</label>
				<input type="text" name="username" minlength="4" value="<?=$userName?>">

				<label>Password</label>
				<input type="password" name="password" id="myInputtwo" value="<?=$password?>">

				<div class="show-pass">
					<label>Show password</label>
				<input type="checkbox" onclick="seeIt()">
				</div>

				<button class="button" name="submit" type="submit">Enter</button>
				
			</div>

			<?php
	if($userName === $data['username'] && $password === $data['password']){
		echo "<p>You have successfully logged in!</p>";
	} else {
		echo "<p>Your username or password is incorrect.</p>";
	}
	
?>

		</form>



	</div>
</section>
