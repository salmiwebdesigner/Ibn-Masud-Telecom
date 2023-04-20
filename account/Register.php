<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration - Ibn Mas'ud Telecom</title>
    <link rel="stylesheet" href="w3.css">
    <link rel="icon" href="../img/IB.png">
</head>
<body>
<div class="w3-row-padding-64 w3-white">
    <div class="w3-row-padding">
        <div class="w3-col l3 m12 s12">&nbsp;</div>
        <div class="w3-col l6 m12 s12">
            <form action="signupCheck.php" method="post" class="w3-border w3-round-medium w3-card" style="padding: 20px 30px !important; margin-top: 5%!important">
                <div class="logo">
                    <div style="text-align: center;">
                        <img src="../img/IB.png" style="height: 20vh; border-radius: 50%" alt="Ibn Mas'ud Logo"/>
                        <br><br>
                        <b class="w3-text-blue w3-large w3-center">Ibn Mas'ud Data</b>
                        <p>Enroll in a new adventure to earn massive rewards.</p>
                    </div>
                </div>


                <?php if (isset($_GET['error'])) { ?>
                    <p class="w3-center w3-padding w3-margin w3-round-large w3-red w3-animate-zoom"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="w3-center w3-padding w3-margin w3-round-large w3-green w3-animate-zoom"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <label>
                    <?php if (isset($_GET['firstname'])) { ?>
                        <input type="text"
                               name="firstname"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="First Name"
                               value="<?php echo $_GET['firstname']; ?>"><br>
                    <?php }else{ ?>
                        <input type="text"
                               name="firstname"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="First Name"><br>
                    <?php }?>
                </label>

                <label>
                    <?php if (isset($_GET['lastname'])) { ?>
                        <input type="text"
                               name="lastname"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="Last Name"
                               value="<?php echo $_GET['lastname']; ?>"><br>
                    <?php }else{ ?>
                        <input type="text"
                               name="lastname"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="Last Name"><br>
                    <?php }?>
                </label>

                <label>
                    <?php if (isset($_GET['email'])) { ?>
                        <input type="text"
                               name="email"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="Email"
                               value="<?php echo $_GET['email']; ?>"><br>
                    <?php }else{ ?>
                        <input type="text"
                               name="email"
                               class="w3-input w3-card-2 w3-padding w3-round-large"
                               style="outline: none"
                               placeholder="Email"><br>
                    <?php }?>
                </label>

                <label>
                    <?php if (isset($_GET['username'])) { ?>
                        <input type="text"
                               name="username"
                               class="w3-input w3-card-2 w3-padding w3-round-large"
                               style="outline: none"
                               placeholder="Username"
                               value="<?php echo $_GET['username']; ?>"><br>
                    <?php }else{ ?>
                        <input type="text"
                               name="username"
                               class="w3-input w3-card-2 w3-padding w3-round-large"
                               style="outline: none"
                               placeholder="Username"><br>
                    <?php }?>
                </label>

                <label>
                    <?php if (isset($_GET['phone_number'])) { ?>
                        <input type="number"
                               name="phone_number"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="Mobile"
                               value="<?php echo $_GET['phone_number']; ?>"><br>
                    <?php }else{ ?>
                        <input type="number"
                               name="phone_number"
                               class="w3-input w3-card-2 w3-padding w3-round-large w3"
                               style="outline: none"
                               placeholder="Mobile"><br>
                    <?php }?>
                </label>

                <label>
                    <input type="password"
                           name="password"
                           class="w3-input w3-card-2 w3-padding w3-round-large w3"
                           style="outline: none"
                           placeholder="Password"
                    ><br>
                </label>

                <label>
                    <input type="password"
                           name="confirm_password"
                           class="w3-input w3-card-2  w3-padding w3-round-large w3"
                           style="outline: none"
                           placeholder="Confirm Password"
                    ><br>
                </label>


                <button type="submit" class="w3-btn w3-bar w3-round-large w3-blue w3-text-white w3-card-2">Sign Up</button>

                <div class="w3-center w3-margin">
                    <p>
                        Already have an account? <a href="login.php" class="w3-center w3-text-blue" style="text-decoration: none">Login here</a>
                    </p>
                </div>

            </form>
            <br>
        </div>
    </div>
</div>
</body>
</html>