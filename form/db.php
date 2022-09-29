<?php

if (isset($_REQUEST['register'])) {
    $name = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $password = sha1(md5($password));

    $photo = $_FILES['photo'];

    $photo_name =  time() . $photo['name'];
    $photo_path = $photo['tmp_name'];

    move_uploaded_file($photo_path, "database/$photo_name");

    print("Done Registeration");
    // die("Die")
}







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
        .albumn>* {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <a href="index.php">back</a>
    <div class="albumn">
        <?php
        $photos = scandir("database");
        for ($i = 2; $i < count($photos); $i++) {
            $photo = $photos[$i];

            echo "<img src='database/$photo' width='100' alt=''>";
        }
        ?>
    </div>

    <h2>My Profile</h2>
    <img src="database/<?php echo ($photo_name); ?>" width="100" alt="">
    <h3>Username : <?php echo $name; ?></h3>
    <h3>Email : <?php echo $email; ?></h3>
    <h3>Password : <?php echo $password; ?></h3>


</body>

</html>