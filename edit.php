<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Edit Form</title>
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
</head>
<body>
    <p>You can edit your profile</p>
    <div class="container-1">
    <form action="update.php">
        <div class="input">
            <label for="name">Name</label><br>
            <input class="input-edt-1" type="text" name="user_name" id="name" placeholder="Ex: David" required>
        </div>
        <div class="input">
            <label for="email">Email</label><br>
            <input class="input-edt-1" type="email" name="user_email" id="email" placeholder="Ex: david123@domain.com" required>
        </div>
        <div class="input">
            <label for="password">Password</label><br>
            <input class="input-edt-1" type="password" name="password1" id="password" placeholder="Ex: D456DFRTttrfdg" required>
        </div>
        <p>Additional Information for user to update</p>
        <div class="input">
            <label for="age">Age</label><br>
            <input class="input-edt-1" type="number" name="age" id="age" placeholder="EX: 34">
        </div>
        <div class="input">
            <label for="dobirth">Date of Birth</label><br>
            <input class="input-edt-1" type="date" name="dob" id="dobirth" placeholder="EX: 20/07/1978">
        </div>
        <div class="input">
            <label for="contact">Mobile Number</label><br>
            <input class="input-edt-1" type="tel" name="contact" id="contact" placeholder="Ex: 9370508967">
        </div>
        <div class="input">
            <label for="address">Address</label><br>
            <input class="input-edt-1" type="text" name="address" id="address" placeholder="Ex: 1/123, Chennai">
        </div>
        <div class="btn-signup">
            <button type="submit" name="edit">Click to Save</button>
        </div>
    </form>
    </div>
</body>
</html>