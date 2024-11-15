<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="public/assets/css/header.css">
    <link rel="stylesheet" href="public/assets/css/index.css">
</head>
<body>
    <?php include 'public/core/config.php'?>
    <div class="headerContainer">
        <div class="logoContainer">
            <img src="<?=BASEURL_PUBLIC?>/assets/img/logo.png">
        </div>
        <ul class="navLinks">
            <li class="navLink"><a href="#">DOEL SPIEGELSPEL</a></li>
            <li class="navLink"><a href="./info">HET SPIEGELSPEL</a></li>
            <li class="navLink"><a href="./contact">CONTACT</a></li>
        </ul>
    </div>
</body>
</html>