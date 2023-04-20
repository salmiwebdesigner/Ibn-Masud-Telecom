<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="w3.css">
</head>
<body>
<div class="w3-row-padding-64 w3-white">
    <div class="w3-row-padding">
        <div class="w3-col l3 m12 s12">&nbsp;</div>
        <div class="w3-col l6 m12 s12">
            <div class="w3-container w3-padding w3-card-2 w3-round-large" style="padding: 20px 30px!important; margin-top: 10%!important;">
                <h1 class="w3-center">Hello, <?php echo $_SESSION['username']; ?></h1>
                <div class="w3-center">
                    <a class="w3-btn w3-center w3-orange w3-text-white w3-round-large" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
    <?php
}else{
    header("Location: login.php");
    exit();
}
?>