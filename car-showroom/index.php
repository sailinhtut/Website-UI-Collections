<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <!-- 1.action  -->
    <!-- 2.method  -->
    <!-- 3.name  -->
    <form action="./db.php" method="post" enctype="multipart/form-data">
        <h2>Account Registeration</h2>
        <input type="text" placeholder="Username" name="username" value="..." required> <br><br>
        <input type="email" placeholder="Email" name="email" required> <br><br>
        <input type="password" placeholder="******" name="password" required> <br><br>
        <input type="file" name="photo" accept="image/*"> <br><br>
        <input type="submit" name="register" value="Register"> <br><br>
    </form>
</body>

</html>