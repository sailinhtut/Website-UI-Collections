<html>

<head>
    <link rel="stylesheet" href="../css/nav_bar.css">

</head>

<body>
    <nav>
        <div class="logo-horizontal">
            <img src="../assets/images/website_logo.png" alt="Logo" width=40 height=40>
            <h3>Success Technology Car Showroom</h3>

        </div>
        <a href="../index.php">Home</a>
        <div class="drop-down">
            <div class="drop-down-button">Genres</div>
            <div class="drop-down-contents">
                <a href="">Softwares</a>
                <a href="">Hardwares</a>
                <a href="">Vehicle</a>
                <a href="">Spaceship</a>
            </div>
        </div>
        <a href="../pages/docs.php">Docs</a>
        <a href="../pages/contact.php">Contact</a>
        <a href="../pages/user_profile.php" class="profile-photo">
            <?php
            if (isset($_SESSION["currentUser"])) {
                $currentUser = $_SESSION["currentUser"];
                $profile = str_replace($_SESSION["homeDir"], "http://localhost:3000/car-showroom-ui/", $currentUser["profilePath"]);

                echo "<img  src='$profile' alt='Profile' width=40 height=40>";
            } else {
                echo "<img src='../assets/images/person.png' alt='Profile' width=40 height=40 style='padding:3px;background:white;'>";
            }
            ?>

        </a>
    </nav>
</body>

</html>