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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight&family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <!-- user registration form -->
    <section>
        <div class="container">
            <img class="img-2" src="login.webp" alt="sign up">
            <div class="form">
                <h1 class="tpc-1">LogIn</h1>
                <form action="" method="POST">
                    <div class="input login-stl">
                        <label for="email">Email</label><br>
                        <input class="input-edt-1" type="email" name="user_name" id="email" placeholder="Ex: david123@domain.com" required>
                    </div>
                    <div class="input">
                        <label for="password">Password</label><br>
                        <input class="input-edt-1" type="password" name="password" id="password" placeholder="Ex: D456DFRTttrfdg" required>
                    </div>
                    <div class="btn-signup">
                        <button type="submit" name="submit"><a href="index.php">LogIn</a></button>
                    </div>
                    <div class="input-edt-2">
                        <p>Don't have a account?  <a href="signup.php">Sign Up</a></p>
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