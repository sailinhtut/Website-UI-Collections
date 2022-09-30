<?php

session_start();
$home = $_SESSION["homeDir"];
if (isset($_REQUEST["signup"])) {
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $profile_array = $_FILES["profile"];
    $profile_path  = $profile_array["tmp_name"];
    $profile_name  = $profile_array["name"];

    $pathToSave = $home . "/user_assets/profiles/$profile_name";

    move_uploaded_file($profile_path, $pathToSave);

    $user = array(
        "email" => $email,
        "password" => $password,
        "profilePath" => $pathToSave
    );

    $_SESSION["currentUser"] = $user;

    $userInfoString = json_encode($user, JSON_UNESCAPED_SLASHES);
    setcookie("currentUser", $userInfoString, time() + 60);

    header("location:user_profile.php");
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vmin;
            background: #d1d1d1;
        }

        .board {
            height: auto;
            width: 450px;
            margin: 0px 100px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px grey;
            text-align: center;
            border-bottom: 3px solid green;
        }

        .divider {
            width: 100%;
            border-top: 0.7px solid #d1d1d1;
        }

        .form-layout {
            width: 100%;
            height: auto;
            margin-top: 20px;
            display: grid;
        }

        input {
            width: 80%;
            margin: auto;
            margin-bottom: 10px;
            padding: 8px;
            outline-color: green;
            background: lightgray;
            border-radius: 6px;
            border: 1px solid lightgray;
        }

        label {
            text-align: start;
            margin-bottom: 10px;
            margin-left: 50px;
        }

        input[type="submit"] {
            height: 44px;
            background: green;
            border-radius: 8px;
            border: 1px solid green;
            box-shadow: 0 0 4px grey;
            color: white;
            font-size: 1.1em;
            cursor: pointer;

        }

        input[type="submit"]:hover {
            border: 2px solid plum;
        }

        input[type="submit"]:active {
            border: 3px solid darkgoldenrod;
        }

        input[type="submit"]:visited {
            border: 3px solid darkgoldenrod;
        }

        .footer-text {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: gray;
            font-size: 0.95em;
        }
    </style>
</head>

<body>
    <div class="board">
        <h3>Account Register</h3>

        <div class="divider"></div>
        <form method="post" enctype="multipart/form-data">
            <div class="form-layout">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <label for="profile">Choose Profile Picture</label>
                <input type="file" name="profile" id="profile">

                <br><br>
                <input type="submit" value="Sign Up" name="signup">

                <br><br><br>
                <p class="footer-text">Copyright 2022 @ All Rights Reserved . Success Inc</p>
            </div>
        </form>

    </div>
</body>

</html>