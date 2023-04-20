<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Profile || Ibn Mas'ud Telecom</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
          rel="stylesheet">
    <link rel="icon" href="img/IB.png">
</head>
<body>
<div class="wrapper">
    <div class="body-overlay"></div>
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><img src="../img/avatar.png" class="img-fluid rounded-5" alt="User Avatar"/></h3>
        </div>
        <ul class="list-unstyled components">
            <li  class="active">
                <a href="./index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
            <li><a href="./transaction.php"><i class="material-icons">home</i><span>Transactions</span></a></li>
            <li><a href="./buy_airtime.php"><i class="material-icons">call</i><span>Buy Airtime</span></a></li>
            <li><a href="./buyData.php"><i class="material-icons">signal_cellular_alt</i><span>Buy Data</span></a></li>

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

                    <a class="navbar-brand" href="./faqs.php">Frequently Asked Questions</a>

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
        </div>


        <div class="main-content">
            <main>
                <div class="container-fluid ">
                    <div class="card" style="min-height: 485px;">
                        <div class="card-header card-header-text">
                            <h4 class="card-title text-center font-weight-bold text-primary">F.A.Qs</h4>
                            <p class="text-center mt-1">To view the solutions to each question, simply click on it once.</p>
                        </div>

                        <div class="card-content">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                How do I buy data from you?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body shadow rounded" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-out-right">
                                           <ul class="list-unstyled  text-justify">
                                               <li><i class="fas fa-check-circle text-primary"></i> STEP 1: Fund your wallet</li>
                                               <li><i class="fas fa-check-circle text-primary"></i> STEP 2: Fill the data order form</li>
                                               <li><i class="fas fa-check-circle text-primary"></i> STEP 3: The recipient will receive notification(s) of data recharging after waiting 5–15 minutes (except 9mobile(SME), which should be verified with its balance code) </li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How can I check the balance of my data?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body shadow rounded">
                                            <ul class="list-unstyled text-justify">
                                                <li><i class="fas fa-check-circle text-primary"></i> MTN = *461*4# </li>
                                                <li><i class="fas fa-check-circle text-primary"></i> 9mobile[SME] = *229*9#</li>
                                                <li><i class="fas fa-check-circle text-primary"></i> 9mobile[Gifting] = *228#</li>
                                                <li><i class="fas fa-check-circle text-primary"></i> Airtel = *140#</li>
                                                <li><i class="fas fa-check-circle text-primary"></i> Glo = *127*0#</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How can I fund my wallet?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body shadow rounded">
                                            <p>You can fund your wallet using any of our three payment means:</p> <br>
                                            <ul class="list-unstyled text-justify">
                                                <li><i class="fas fa-check-circle text-primary"></i> Bank payment</li>
                                                <li><i class="fas fa-check-circle text-primary"></i> Online Payment with your ATM card details via Pay stack Payment Gateway</li>
                                                <li><i class="fas fa-check-circle text-primary"></i> Payment with airtime</li>
                                                <li><i class="fas fa-check-circle text-primary"></i> Payment with Coupon Code(s).</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Can I share the data I buy from you with another line?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body shadow rounded">
                                            <ul class="list-unstyled text-justify">
                                                <li><i class="fas fa-check-circle text-primary"></i> You can only share glo data plans, mtn, 9MOBILE and airtel data cant be shared.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Are your data plans legit?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body shadow rounded">
                                            <ul class="list-unstyled text-justify">
                                                <li><i class="fas fa-check-circle text-primary"></i> Yea, we are third party data vendors. We buy in bulk from network providers and resell.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Hope the data won't get exhausted quickly or disappear?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                        <div class="card-body shadow rounded">
                                            <ul class="list-unstyled text-justify">
                                                <li><i class="fas fa-check-circle text-primary"></i> Our data plans are sourced from the network providers, therefore consumption rate is similar to the data gotten directly from them</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                What are the other products/services you offer?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                        <div class="card-body shadow rounded">
                                            <ul class="list-unstyled text-justify">
                                                <li><i class="fas fa-check-circle text-primary"></i>  We sell Cheap Internet Data Plans, Airtime VTU on MTN, 9MOBILE, GLO and AIRTEL, we Convert Airtime To Cash, Airtime Swap, Bills Payment (GOTV, DSTV, STARTIMES)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingEight ">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEight   " aria-expanded="false" aria-controls="collapseEight  ">
                                                What if my order was cancelled but my wallet was not refunded?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight  " data-parent="#accordion">
                                        <div class="card-body shadow rounded">
                                            <ul class="list-unstyled text-justify">
                                                <li><i class="fas fa-check-circle text-primary"></i> You can contact our customer care agent through the live chat or via whatsapp, by clicking on the whatsapp button on the bottom left of the website</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEiNine" aria-expanded="false" aria-controls="collapseNine">
                                                Is this data plan compatible with all devices?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                        <div class="card-body shadow rounded">
                                            <ul class="list-unstyled text-justify">
                                                <li><i class="fas fa-check-circle text-primary"></i> Yes, it is compatible with all devices.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
