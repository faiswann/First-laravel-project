<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylehome.css">
</head>
<body>
    <?php include 'header.php' ?><br>
    <div class="container">
        <form action="register.php" method="post" class="form">
            <h1>MEMBER REGISTER</h1>
            <input type="text" name="name" placeholder="Your Name" required autofocus><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="conpass" placeholder="Confirm Password" required><br>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>
</html>