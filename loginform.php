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
        <form action="login.php" method="post" class="form">
            <h1>MEMBER LOGIN</h1>
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>