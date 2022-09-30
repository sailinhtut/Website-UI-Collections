<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
    <link rel="shortcut icon" href="../assets/images/website_logo.png" type="image/x-icon">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }

        main {
            height: 100vmin;
            color: black;
            background: #d1d1d1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    require "../partials/nav_bar.php";
    ?>

    <main>
        <h3>Documentation Section Will Coming Soon</h3>
    </main>

    <?php
    require "../partials/footer.php";
    ?>
</body>

</html>