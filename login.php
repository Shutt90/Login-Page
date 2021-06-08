<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body class="login-page">
    <div class="login-box">
        <form action="login.php" method="post">
            <h2>Login</h2> <br/>
                <label>Username:</label><br/>
                 <input type="text" name="username" placeholder="Username..." required> <br/>
                <label>Password:</label><br/>
                 <input type="password" name="password" placeholder="Password..." required><br/>
                <button class="login" type="submit" name="login">Log In</button>
        </form>
    </div>

    <?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $name = "agptest";

    $conn = mysqli_connect($server, $username, $password, $name);

    if (!$conn) { 
        die("Connection FAILED!: ") . mysqli_connect_error();
    } 

    ?>
</body>
</html>