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

$username = null;
$password = null;
$users = [];


// if it's submitted, 
if (isset($_POST['submit']) ) {
	if (!empty($_POST['username'] && $_POST['password']) ) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$newUser = [
			"username" => $username,
			"password" => $password,
		];

		if (file_exists('../data-php/password.json')) {
			$json = file_get_contents('../data-php/password.json');
			$users = json_decode($json, true);
			var_dump($users);
		}
		array_push($users, $newUser);
		$json = json_encode($users);
		file_put_contents('../data-php/password.json',$json);
	}
}


$username = "";
$password = "";

?>

<section class="sign-up">
	<div class="inner-column">

		<form method="POST">

<h1 class="loud-voice">Sign Up</h1>

			<div class="field">

				<label>Username</label>
				<input type="text" name="username" minlength="4" required value="<?=$username?>">

				<label>Password</label>
				<input type="password" name="password" minlength="8" required id="myInput" value="<?=$password?>">

				<div class="show-pass">
					<label>Show password</label>
				<input type="checkbox" onclick="myFunction()">
				</div>

				<button class="button" name="submit" type="submit">Enter</button>

			</div>

		</form>
		
	</div>
</section>




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

$loginName = "";
$loginPassword = "";
// try to login 
if (isset($_POST['log-submit']) ) {
	// check filled out form
	if ($_POST['log-username'] && $_POST['log-password']) {
		// check if user exists
		if (!file_exists("../data-php/password.json") ) {
			echo "no";
		} else {
			$loginName = $_POST['log-username'];
			$loginPassword = $_POST['log-password'];

			$json = file_get_contents("../data-php/password.json");
			$usersData = json_decode($json, true);
			//check every user to see if theres a match
			foreach($usersData as $user) {
				if($loginName === $user['username'] && $loginPassword === $user['password']) {
					// show their username and confirm their passwords are correct
					echo "login successful";

				} else {
					// if not warn them
					echo "try again";
				}
			}
		}
		
		
	}

}



?>


<section class="password-form">
	<div class="inner-column">
		<?php var_dump($_POST) ?>
		<form method="POST">

			<h1 class="loud-voice">Login</h1>

			<div class="field">

				<label>Username</label>
				<input type="text" name="log-username" minlength="4" value="<?=$loginName?>">

				<label>Password</label>
				<input type="password" name="log-password" id="myInputtwo" value="<?=$loginPassword?>">

				<div class="show-pass">
					<label>Show password</label>
				<input type="checkbox" onclick="seeIt()">
				</div>

				<button class="button" name="log-submit" type="submit">Enter</button>
				
			</div>

<?php

	// if($loginName === $data['username'] && $loginPassword === $data['password']){
	// 	echo "<p>You have successfully logged in!</p>";
	// } else {
	// 	echo "<p>Your username or password is incorrect.</p>";
	// }
	
?>

		</form>



	</div>
</section>
