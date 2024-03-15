

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

<password-container>

<section class="sign-up">
            <form method="POST">
                <h1 class="attention-voice">Sign Up</h1>
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" minlength="4" required>
                    <label>Password</label>
                    <input type="password" name="password" minlength="8" required id="myInput">
                    <div class="show-pass">
                        <label>Show password</label>
                        <input type="checkbox" onclick="myFunction()">
                    </div>
                    <button class="button" name="submit" type="submit">Enter</button>
                </div>
            </form>
    </section>

    <section class="password-form">
            <form method="POST">
                <h1 class="attention-voice">Login</h1>
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="log-username" minlength="4">
                    <label>Password</label>
                    <input type="password" name="log-password" id="myInputtwo">
                    <div class="show-pass">
                        <label>Show password</label>
                        <input type="checkbox" onclick="seeIt()">
                    </div>
                    <button class="button" name="log-submit" type="submit">Enter</button>
                </div>
            </form>
    </section>

</password-container>


    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

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
    $users = [];

    if (isset($_POST['submit'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $newUser = [
                "username" => $username,
                "password" => $password,
            ];

            if (file_exists('../../data-php/password.json')) {
                $json = file_get_contents('../../data-php/password.json');
                $users = json_decode($json, true);
            }
            array_push($users, $newUser);
            $json = json_encode($users);
            file_put_contents('../../data-php/password.json', $json);
        }
    }

    if (isset($_POST['log-submit'])) {
        if (!empty($_POST['log-username']) && !empty($_POST['log-password'])) {
            $loginName = $_POST['log-username'];
            $loginPassword = $_POST['log-password'];

            if (file_exists("../../data-php/password.json")) {
                $json = file_get_contents("../../data-php/password.json");
                $usersData = json_decode($json, true);
                $loggedIn = false;

                foreach ($usersData as $user) {
                    if ($loginName === $user['username'] && $loginPassword === $user['password']) {
                        $loggedIn = true;
                        break;
                    }
                }

                if ($loggedIn) {
                    echo "<p class='calm-strong-voice output'>You have successfully logged in! <span class='calm-voice'>🥳🎉</span></p>";
                } else {
                    echo "<p class='attention-voice output'>Your username or password is incorrect.</p>";
                }
            }
        }
    }
    ?>