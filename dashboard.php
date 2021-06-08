<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body class="background">
    <nav>
    <div class="nav-bar">
        <h1>Welcome, {USERNAME}</h1>
        <ul class="links">
            <li><a href="./login.php">Home</li></a>
            <li><a href="#">About Us</li></a>
            <li><a href="#">Contact Us</li></a>
            <li><a href="./logout.php">Sign Out</li></a>
        </ul>
    </div>
    

    </nav>
    
    <div class="">
        <div class="container">
            <a href="#"><div class="container-wide">STATISTIC/LINK</div></a>
            <a href="#"><div class="container-box">STATISTIC/LINK</div></a>
        </div>
        <div class="container">
            <a href="#"><div class="container-box">STATISTIC/LINK</div></a>
            <a href="#"><div class="container-box">STATISTIC/LINK</div></a>
            <a href="#"><div class="container-box">STATISTIC/LINK</div></a>
        </div>
        <div class="container">
            <a href="#"><div class="container-box">STATISTIC/LINK</div></a>
            <a href="#"><div class="container-wide">STATISTIC/LINK</div></a>
        </div>
    </div>

    <script type="text/javascript">
    // const resetTimer = function() {
    //     const date = new Date()
    //     const currentMinute = date.getMinutes();

    //     setInterval(currentMinute--, 1000)

    // }
    </script>
    <div class="timer">
    Time Until Logout: <div class="labelTimer"></div>
    </div>
    <script src="./timer.js"></script>
</body>
</html>