<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./w3.css" />
    <link rel="icon" href="../img/IB.png">
    <title>Login -  Ibn Mas'ud Telecom</title>
</head>
<body>
<div class="w3-row-padding-64 w3-white">
    <div class="w3-row-padding">
        <div class="w3-col l3 m12 s12">&nbsp;</div>
        <div class="w3-col l6 m12 s12">
            <form action="LoginCheck.php" method="post" class="w3-border w3-round-medium w3-card" style="padding: 20px 30px !important; margin-top: 10% !important">
                <div class="logo">
                    <div style="text-align: center;">
                        <img src="../img/IB.png" style="height: 20vh; border-radius: 50%" alt="Ibn Mas'ud Logo"/>
                        <br><br>
                        <b class="w3-text-blue w3-large w3-center">Login Now</b>
                    </div>
                </div><br>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="w3-animate-zoom w3-padding w3-red w3-round-large w3-margin w3-center"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <label>
                    <?php if (isset($_GET['email'])) { ?>
                        <input type="email"
                               name="email"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="Email"
                               value="<?php echo $_GET['email']; ?>"><br>
                    <?php }else{ ?>
                        <input type="email"
                               name="email"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="Email"><br>
                    <?php }?>
                </label>



                <label>
                    <input class="w3-input w3-card-2 w3-padding w3-round-large" type="password" name="password"
                           style="outline: none" placeholder="Password"
                    />
                </label>
                <br>

                <div class="w3-center">
                    <button class="w3-btn w3-blue w3-medium w3-card w3-round-medium w3-bar">Sign in</button>
                </div>

                <div class="login-option">
                    <p class="w3-center">
                        Don't have an account? <a class="w3-text-blue" style="text-decoration: none" href="./Register.php">Register</a>
                        <br>
                        <a class="w3-hover-text-orange w3-text-red" href="./forgotPassword.php" style="text-decoration: none">Forgot Password?</a>
                    </p>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>
