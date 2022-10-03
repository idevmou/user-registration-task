<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight&family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <!-- user registration form -->
    <section>
        <div class="container">
            <img class="img-2" src="signup.gif" alt="sign up">
            <div class="form">
                <h1 class="tpc-1">Sign Up</h1>
                <form action="" method="POST">
                    <div class="input">
                        <label for="name">Name</label><br>
                        <input class="input-edt-1" type="text" name="" id="name" placeholder="Ex: David" required>
                    </div>
                    <div class="input">
                        <label for="email">Email</label><br>
                        <input class="input-edt-1" type="email" name="user_name" id="email" placeholder="Ex: david123@domain.com" required>
                    </div>
                    <div class="input">
                        <label for="password">Password</label><br>
                        <input class="input-edt-1" type="password" name="password1" id="password" placeholder="Ex: D456DFRTttrfdg" required>
                    </div>
                    <div class="input">
                        <label for="confirm_password">Confirm Password</label><br>
                        <input class="input-edt-1" type="password" name="password" id="confirm_password" placeholder="Retype Your Password" required>
                    </div>
                    <div class="btn-signup">
                        <button type="submit" name="submit">Sign Up</button>
                    </div>
                    <div class="input-edt-2">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="footer-signup-page">
        <p>© 2022 All Rights Reserved</p>
    </div>
</body>
</html>