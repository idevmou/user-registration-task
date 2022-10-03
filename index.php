<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight&family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
	<style>
        .btn-signup button{
            text-decoration: none;
            width: 300px;
            height: 50px;
            background-color: #160040;
            border: none;
            outline: none;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 30px;
            cursor: pointer;
            transition: .5s;
        }

        .btn-signup button a {
            color: inherit;
            text-decoration: none;
        }

        .btn-signup button:hover {
            background-color: #9A0680;
            transition: .5s;
        }
    </style>
</head>
<body>

	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	<br>
	<button class="btn-signup"><a href="logout.php">Logout</a></button>
	<button class="btn-signup"><a href="edit.php">Edit Profile</a></button>
</body>
</html>