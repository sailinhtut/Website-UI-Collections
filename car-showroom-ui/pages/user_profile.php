<?php

session_start();


if (isset($_SESSION["currentUser"])) {

    $userArray = $_SESSION["currentUser"];

    $email = $userArray["email"];
    $password = $userArray["password"];
    $profile = str_replace($_SESSION["homeDir"], "http://localhost:3000/car-showroom-ui/", $userArray["profilePath"]);

    $downloadUrl = createJson($userArray);
} else {
    $email = rand(0, 10000000);
    $profile = "../assets/images/person.png";
    $downloadUrl = "";
}


function alert(string $message)
{
    echo '<script type="text/javascript">';
    echo "alert(\"$message\")";
    echo '</script>';
}

function createJson(array $userArray): string
{
    $userName = explode("@", $userArray["email"])[0];
    $file_res = fopen("../user_assets/jsons/$userName.json", "w");
    $data = json_encode($userArray, JSON_UNESCAPED_SLASHES);
    fwrite($file_res, $data);
    fclose(($file_res));
    return "../user_assets/jsons/$userName.json";
}

function log_out()
{
    unset($_SESSION["currentUser"]);
    header("location:../index.php");
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
        * {
            text-decoration: none;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vmin;
            background-color: #d1d1d1;
            background-size: auto;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .board {
            height: auto;
            color: black;
            background: white;
            width: 450px;
            margin: 0px 100px;
            border-radius: 10px;
            box-shadow: 0 0 5px grey;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .divider {
            width: 100%;
            border-top: 0.7px solid gray;
        }

        .profile-img {
            border-radius: 100%;
            border: 1px solid lightgrey;
            box-shadow: 0 0 7px grey;
        }

        .email-text {
            font-family: sans-serif;
            color: grey;
        }

        .download-button {
            position: fixed;
            bottom: 50px;
            right: 50px;
            transition: 0.5s;
        }

        input[type="submit"] {
            width: 150px;
            height: 35px;
            text-align: center;
            border: 1px solid green;
            background: transparent;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"]:hover {
            border: 2px solid green;
            background: green;
            color: white;

        }

        input[type="submit"]:active {
            border: 2px solid darkgoldenrod;
        }


        a:hover .download-button {
            transform: scale(1.2);
        }
    </style>
</head>

<body>

    <a href='download_json.php?api=<?php
                                    echo $downloadUrl;
                                    ?>'>
        <img src="../assets/images/download.png" title="Download Profile As Json Format" alt="Download Profile Json" class="download-button" width=30 height=30>
    </a>

    <div class="board">
        <h3>User Profile</h3>

        <div class="divider"></div>

        <br>
        <img class="profile-img" src="<?php
                                        echo $profile;
                                        ?>" alt="<?php echo $email ?>" width=120 height=120>
        <h3 class="email-text"><?php
                                echo $email;
                                ?></h3>

        <form method="post">
            <input type="submit" value="Goto Home" name="goHome">
            <input type="submit" value="Log Out" name="logOut">
        </form>

        <?php
        if (isset($_REQUEST["goHome"])) {
            header("location:../index.php");
        }
        if (isset($_REQUEST["logOut"])) {
            log_out();
        }
        ?>
        <br><br>


    </div>
</body>

</html>