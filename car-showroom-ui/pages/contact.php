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
            color: black;
            background: #d1d1d1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            background: #F7FAFC;


        }

        .row {
            width: 100%;
            height: 90vmin;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            flex-wrap: nowrap;
            overflow: visible;
            padding: 30px 0;
        }

        .context {
            height: 10vmin;
            text-align: center;
            padding: 30px 50px;
            color: #4A5568;

        }


        .plan-card {
            height: 480px;
            width: 286px;
            border-radius: 4px;
            border: 1.5px solid lightgray;
            margin: 0px 20px;
            cursor: pointer;
            transition: 0.5s;
            background: #EDF2F7;
            position: relative;
        }

        .plan-card-view {
            height: 200px;
            padding: auto 0;
            text-align: center;
            background: #F7FAFC;
            line-height: 200px;
        }

        .plan-card-content {
            border-top: 0.5px solid lightgray;
            padding: 20px;
            color: #4A5568;
            text-align: start;
        }

        .plan-card-button {
            border-radius: 4px;
            width: auto;
            position: absolute;
            bottom: 30px;
            left: 30px;
            padding: 5px 8px;
            text-align: center;
            border: 1px solid lightgray;
        }

        .font-size-2 {
            font-size: 1.8em;
        }

        .font-size-1-5 {
            font-size: 1.4em;
        }


        .plan-card:hover {
            border: 2px solid green;
            /* border: 2px solid #79589F; */
            background: white;
        }

        .plan-card:active {
            border: 2px solid black;
        }

        .plan-card:hover .plan-card-view {
            background: #daf0db;

        }
    </style>
</head>

<body>
    <?php
    require "../partials/nav_bar.php";
    ?>

    <main>
        <div class="context">
            <div class="font-size-2">
                Choose your desire plan ..
            </div>
            <div class="font-size-1-5">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, voluptate!
            </div>

        </div>
        <div class="row">
            <div class="plan-card">
                <div class="plan-card-view">
                    <img src="../assets/plan_svg/free-and-hobby.svg" alt="" width=200 height=200>

                </div>
                <div class="plan-card-content">
                    <div class="font-size-big">Free and Hobby</div>
                    <br>
                    <p>
                        $0 and up per month
                        <br>
                        Non-commercial apps, such as proof of concpets, MVPs, and personal projects.
                        <br><br>
                    </p>
                    <div class="plan-card-button">Esimate</div>
                </div>
            </div>
            <div class="plan-card">
                <div class="plan-card-view">
                    <img src="../assets/plan_svg/production.svg" alt="" width=200 height=200>

                </div>
                <div class="plan-card-content">
                    <div class="font-size-big">Production</div>
                    <br>
                    <p>
                        $25 and up per month
                        <br>
                        Business-focused apps, such as customer-facing or internal web apps and APIs.
                        <br><br>
                    </p>
                    <div class="plan-card-button">Esimate</div>
                </div>
            </div>
            <div class="plan-card">
                <div class="plan-card-view">
                    <img src="../assets/plan_svg/advanced.svg" alt="" width=200 height=200>

                </div>
                <div class="plan-card-content">
                    <div class="font-size-big">Advanced</div>
                    <br>
                    <p>
                        $250 and up per month
                        <br>
                        Mission-critical apps with complex funtionality that require high availabitliy, very low latency, and handling a high volume of concurrent requests.
                        <br><br>
                    </p>
                    <div class="plan-card-button">Esimate</div>
                </div>
            </div>
            <div class="plan-card">
                <div class="plan-card-view">
                    <img src="../assets/plan_svg/enterprices.svg" alt="" width=200 height=200>

                </div>
                <div class="plan-card-content">
                    <div class="font-size-big">Enterprise</div>
                    <br>
                    <p>
                        Contact Sales for custom pricing
                        <br>
                        Apps that meet the control, compliance, and collaboration needs of large scale organizations.
                        <br><br>
                    </p>
                </div>
                <div class="plan-card-button">View Options</div>
            </div>



        </div>

    </main>

    <?php
    require "../partials/footer.php";
    ?>
</body>

</html>