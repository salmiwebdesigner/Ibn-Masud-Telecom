<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta name="author" content="Abdulazeez Abdulsalam Olamilekan salmiwebdesigner@gmail.com">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Buy Data || Ibn Mas'ud Telecom</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="img/IB.png">
    </head>
    <body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>
                    <a href="./index.php"><img src="../img/avatar.png" class="img-fluid rounded-5" alt="User Avatar"/></a>
                </h3>
            </div>
            <ul class="list-unstyled components">
                <li  class="active">
                    <a href="./index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <li class="dropdown">
                    <li><a href="./transaction.php"><i class="material-icons">home</i><span>Transactions</span></a></li>
                    <li><a href="./buyData.php"><i class="material-icons">signal_cellular_alt</i><span>Buy Data</span></a></li>
                    <li><a href="./buy_airtime.php"><i class="material-icons">call</i><span>Buy Airtime</span></a></li>


                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">lightbulb</i><span>Utility Payment</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li><a href="#">Bill Payment</a></li>
                        <li><a href="#">Cable Subscription</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">wallet</i><span>Fund Wallet</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li><a href="#">Fund With Paystack (ATM)</a></li>
                        <li><a href="#">Fund With Payment Gateway (ATM)</a></li>
                        <li><a href="#">Automated Bank Transfer (N50 charges)</a></li>
                    </ul>
                </li>

                <li><a href="./pricing.php"><i class="material-icons">payments</i><span>Pricing</span></a></li>
                <li><a href="./faqs.php"><i class="material-icons">question_mark</i><span>F.A.Qs</span></a></li>
                <li><a href="./account.php"><i class="material-icons">person</i><span>Account</span></a></li>
                <li><a href="../account/logout.php"><i class="material-icons">logout</i><span>Logout</span></a></li>
            </ul>
        </nav>



        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="./buy_airtime.php"> Buy Airtime </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="../account/logout.php"><span class="material-icons">logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container mt-4" id="page-content"></div>
            </div>


            <div class="main-content">
                <main>
                    <div class="container-fluid w-auto rounded h-auto">
                        <div class="card" style="min-height: 485px;">
                            <div class="card-header card-header-text">
                                <h4 class="card-title text-center font-weight-bold text-primary">Airtime Top Up</h4>
                            </div>

                            <div class="card-content">
                                <form action="">

                                    <div class="form-group">
                                        <label>Network </label>
                                        <label for="network_type"></label>
                                        <select class="form-control" id="network_type">
                                            <option value="----" selected>----</option>
                                            <option value="MTN">MTN</option>
                                            <option value="GLO">GLO</option>
                                            <option value="AIRTEL">AIRTEL</option>
                                            <option value="9MOBILE">9MOBILE</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Airtime Type </label>
                                        <label for="data_type"></label>
                                        <select class="form-control" id="data_type">
                                            <option value="----" selected>----</option>
                                            <option value="VTU">VTU</option>
                                            <option value="Share and Sell">Share and Sell</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control" id="amount" placeholder="e.g 100" >
                                    </div>

                                    <div class="form-group">
                                        <label for="PhoneNumber">Phone number</label>
                                        <input type="number" class="form-control" id="phoneNumber" placeholder="e.g 08156748903" minlength="11">
                                    </div>

                                    <div class="form-group">
                                        <label for="amountTOPay">Amount to pay</label>
                                        <input type="number" class="form-control" id="amountTOPay" >
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Bypass Number Validator</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Purchase</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/main.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
        });
    </script>
    </body>
    </html>


    <?php
}else{
    header("Location: ../account/login.php");
    exit();
}
?>