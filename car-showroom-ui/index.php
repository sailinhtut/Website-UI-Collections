<?php

session_start();

$_SESSION["homeDir"] = str_replace("\\", "/", __DIR__);




?>

<html>
<header>
    <title>Car - Json</title>
    <link rel="stylesheet" href="css/nav_bar.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;

        }

        body {
            background: #d1d1d1;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-image: linear-gradient(190deg, whitesmoke, green);
            color: black;
            padding: 20px 50px;
        }

        .gear-text {
            display: flex;
            font-size: 1.7em;

            align-items: center;
        }

        .auth-group {
            display: flex;
            align-items: center;
        }

        .auth-group>* {
            margin-left: 10px;
            cursor: pointer;
        }

        .login-button {
            border-radius: 50px;
            border: 2px solid green;
            padding: 5px 10px;
            color: black;
            transition: 0.5s;
        }

        .login-button:hover {
            background: white;
            color: green;
            border: 1px solid grey;
            box-shadow: 0 0 7px gray;
            padding: 8px 14px;
            font-size: 1.1em;

        }

        .login-button:active {
            color: darkgoldenrod;
        }





        .grid-view {
            padding: 100px 50px;
            height: auto;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: row;
            flex-wrap: wrap;
            position: sticky;
            top: 60px;
        }



        .card {
            height: 300px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 10px grey;
            flex: 0 1 300px;
            margin: 10px;
            padding: 15px;
            text-align: center;
            overflow: hidden;
            transition: 0.5s;
            cursor: pointer;
        }

        .card p {
            overflow: hidden;
            text-overflow: clip;
        }

        .card>img {
            border-radius: 5px;
            flex: 1 1 280px
        }

        .card:hover {
            box-shadow: 0 0 10px green;
            transform: scale(1.05);
        }

        .card:active {
            box-shadow: 0 0 14px darkgoldenrod;
        }
    </style>

</header>

<body>

    <div class="header">

        <div class="gear-text">
            <img src="assets/images/gear.png" alt="" width=75 height=75>
            <strong>&nbsp;&nbsp; Get Your High Classic Feels...</strong>
        </div>
        <div class="auth-group">
            <a href="">
                <img src="assets/images/world.png" alt="Languages" width=40 height=40>
            </a>

            <a class="login-button" href="pages/log_in.php">Log In</a>
            <a class="login-button">Sign Up</a>
        </div>
    </div>


    <nav>
        <div class="logo-horizontal">
            <img src="assets/images/website_logo.png" alt="Logo" width=40 height=40>
            <h3>Success Technology Car Showroom</h3>

        </div>
        <a href="index.php">Home</a>
        <div class="drop-down">
            <div class="drop-down-button">Genres</div>
            <div class="drop-down-contents">
                <a href="">Softwares</a>
                <a href="">Hardwares</a>
                <a href="">Vehicle</a>
                <a href="">Spaceship</a>
            </div>
        </div>
        <a href="pages/docs.php">Docs</a>
        <a href="pages/contact.php">Contact</a>
        <a href="pages/user_profile.php" class="profile-photo">
            <?php
            if (isset($_SESSION["currentUser"])) {
                $currentUser = $_SESSION["currentUser"];
                $profile = str_replace($_SESSION["homeDir"], "http://localhost:3000/car-showroom-ui/", $currentUser["profilePath"]);

                echo "<img  src='$profile' alt='Profile' width=40 height=40>";
            } else {
                echo "<img src='assets/images/person.png' alt='Profile' width=40 height=40 style='padding:3px;background:white;'>";
            }
            ?>

        </a>
    </nav>


    <main>
        <div class="grid-view">
            <?php
            try {
                $json_file = fopen("assets/data/cars.json", "r");
                $json_data = fread($json_file, filesize("assets/data/cars.json"));

                if ($json_data) {
                    $car_list = json_decode($json_data, true);
                    foreach ($car_list as $car) {
                        echo "
                            <div class='card'>
                                <img src='{$car["imageUrl"]}' alt='Car' height=150 width=280>
                                <h2>{$car["name"]}</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                                </p>
                            </div>
                            ";
                    }
                }
            } catch (Exception $e) {
                echo "<h2> Error Occured :$e</h2>";
            }

            ?>

            <!-- Uncomment to run simple ( Warning :: Don't forget to block php code above ! )-->

            <!-- <div class="card">
                <img src="assets/images/one.jpg" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div> -->
            <!-- <div class="card">
                <img src="assets/images/two.jpg" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/three.jpg" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/four.png" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/five.png" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/one.jpg" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/two.jpg" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/three.jpg" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/four.png" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/five.png" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/one.jpg" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div>
            <div class="card">
                <img src="assets/images/two.jpg" alt="Car" height=150 width=280>
                <h2>Car One</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt numquam corporis dicta tempore dolor, accusantium facere eum rerum, recusandae expedita ad nihil ipsa ex nisi voluptas molestiae? Molestias, eum explicabo cupiditate aspernatur commodi debitis pariatur at dolorem in eligendi quis odit quo eveniet porro nulla alias vero placeat repellendus.
                </p>
            </div> -->


        </div>
    </main>


    <footer>
        <div class="footer-social-container">
            <img src="assets/images/website_logo.png" alt="Logo" width=130 height=130>
            <h2>Success Technology</h2>
            <br>
            <div class="social-links">
                <a href="facebook.com">
                    <img src="assets/footer_logo/facebook.svg" width="30" height="30"></img>
                </a>
                <a href="youtube.com">
                    <img src="assets/footer_logo/instagram.svg" width="30" height="30"></img>
                </a>
                <a href="youtube.com">
                    <img src="assets/footer_logo/youtube.svg" width="30" height="30"></img>
                </a>
                <a href="gmail.com">
                    <img src="assets/footer_logo/gmail.svg" width="30" height="30"></img>
                </a>

                <a href="youtube.com">
                    <img src="assets/footer_logo/linkedin.svg" width="30" height="30"></img>
                </a>
            </div>
        </div>
        <div class="footer-link-container">
            <h3>PRODUCTS</h3>
            <a href="">Success Platform</a>
            <a href="">Success Data Services</a>
            <a href="">Success Enterprise</a>
            <a href="">Success Private Spaces</a>
            <a href="">Success Connect</a>
            <a href="">Success Team</a>
            <a href="">Elements Marketplace</a>
            <a href="">Pricing</a>
        </div>
        <div class="footer-link-container">
            <h3>RESOURCES</h3>
            <a href="">Documentation</a>
            <a href="">Compliance Center</a>
            <a href="">Training & Education</a>
            <a href="">Blog</a>
            <a href="">Podcasts</a>
            <a href="">Get Started</a>
        </div>
        <div class="footer-link-container">
            <h3>About</h3>
            <a href="">About Us</a>
            <a href="">What is Success Technology</a>
            <a href="">Success & Salesforce</a>
            <a href="">Our Customers</a>
            <a href="">Careers</a>
            <a href="">Partners</a>
            <a href="">Elements Marketplace</a>
        </div>
        <div class="footer-link-container">
            <h3>Support</h3>
            <a href="">Help Center</a>
            <a href="">Status</a>
            <a href="">Premium Support</a>
            <a href="">Contact Us</a>
        </div>
    </footer>


</body>

</html>