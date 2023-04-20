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
      <title>Dashboard</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <link rel="icon" href="img/IB.png">
  </head>
  <body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="ml-5"><img src="../img/avatar.png" class="img-fluid rounded-circle" alt="User Avatar"/></h3>
                <span class="p-3">Welcome, <?php echo $_SESSION['username']; ?></span>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                <a href="./index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
            </li>

		      <div class="small-screen navbar-display">
                      <li  class="d-lg-none d-md-block d-xl-none d-sm-block"><a href="#"><i class="material-icons">apps</i><span>apps</span></a></li>
                      <li  class="d-lg-none d-md-block d-xl-none d-sm-block"><a href="#"><i class="material-icons">person</i><span>user</span></a></li>
              </div>


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

					<a class="navbar-brand" href=""> Dashboard </a>

                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
							<li class="nav-item" title="Logout"><a class="nav-link" href="../account/logout.php"><span class="material-icons">logout</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
	    </div>


			<div class="main-content">
			<main>
                <div class="container-fluid pb-4 ">
                        <div class="bg-primary shadow-lg rounded text-white" style="min-height: 365px">
                            <div class="card-header">
                                <h4 class="card-title text-center"><strong>WELCOME TO IBN MAS'UD TELECOMS</strong></h4>
                                <p class="text-justify p-2">Unlimited Earnings, Just for You.</p>
                                <p class="text-justify p-2" style="text-transform: none">You will earn 5% from your referral first wallet funding and
                                    also earn each time they perform some transactions on the website.</p>
                                <p class="text-justify p-2" style="text-transform: none">Copy your referral link below and share to earn unlimited.</p>
                                <p class="text-justify p-2">Referral Link:</p>
                                <br>
                                <div class="text-center" >
                                    <button style="height: 40px; width: 120px;" class="border-0 bg-warning rounded shadow-lg">
                                        <a href="" class="text-white">Fund Wallet</a> <i  class="fa fa-credit-card text-white"></i>
                                    </button>
                                </div>
                                <br>
                           </div>
                        </div>
                    </div>
            </main>

			<div class="row pb-3">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon text-white bg-primary rounded">
                               <span class="material-icons">history</span>
                            </div>
                        </div>
                        <div class="card-content"><br>
                            <p class="card-title"><a href="#" class="text-primary">Transaction</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon text-white bg-primary rounded">
                               <span class="material-icons">history</span>
                            </div>
                        </div>
                        <div class="card-content"><br>
                            <p class="card-title "><a href="#" class="text-primary">Data Transaction</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon text-white bg-primary rounded">
                                       <span class="material-icons">history</span>
                                    </div>
                                </div>
                                <div class="card-content"><br>
                                    <p class="card-title "><a href="#" class="text-primary">Wallet History</a></p>
                                </div>
                            </div>
                        </div>
            </div>

            <div class="row pb-5">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats shadow-lg">
                        <div class="card-header">
                            <div class="icon icon-warning">
                                <span class="material-icons">account_balance_wallet</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category text-secondary"><strong>Wallet Balance</strong></p>
                            <p class="card-title">₦ 0.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats shadow-lg">
                        <div class="card-header">
                            <div class="icon icon-rose">
                                <span class="material-icons">money</span>

                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category text-secondary"><strong>Referral Bonus</strong></p>
                            <p class="card-title">₦ 0.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats shadow-lg">
                        <div class="card-header">
                            <div class="icon icon-success">
                                <span class="material-icons">people</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category"><strong>My Total Referral</strong></p>
                            <p class="card-title">0</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row pb-4">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats shadow-lg">
                        <div class="card-header">
                            <div class="icon icon-warning">
                                <span class="material-icons">notifications</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category pb-4 text-warning" style="font-size: 22px"><strong>Notifications</strong></p>
                            <p class="card-title text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ex!</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn-warning btn shadow">
                                <a class="text-white" href="#">All Messages</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats shadow-lg">
                        <div class="card-header">
                            <div class="icon icon-info">
                                <span class="material-icons">question_mark</span>
                            </div>
                        </div>
                        <div class="card-content ">
                            <p class="category pb-4 text-info" style="font-size: 22px"><strong>F.A.Qs</strong></p>
                            <p class="card-title text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ex!</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn-info btn shadow">
                                <a class="text-white" href="./faqs.html">FAQs</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats shadow-lg ">
                        <div class="card-header">
                            <div class="icon icon-success">
                                <span class="material-icons">people</span>
                            </div>
                        </div>
                        <div class="card-content ">
                            <p class="category pb-4 text-success" style="font-size: 22px"><strong>Support Team</strong></p>
                            <p class="card-title text-justify">Have anything to say to us? Please contact our Support Team on Whatsapp</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">
                                <a class="text-white" target="_blank" href="https://wa.me/2348064877083/"><i class="fa fa-whatsapp"> </i> WhatsApp Support Line</a>
                            </button>
                            <br><br>
                            <button class="btn btn-success">
                                <a class="text-white" target="_blank" href="https://wa.me/2349021606135/"><i class="fa fa-whatsapp"> </i> Join Our WhatsApp Group</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pb-4">
                <div class="col-6 col-sm-4 col-lg-3" data-toggle="tooltip" data-placement="top" title="Buy Airtime">
                    <a href="">
                        <div class="card shadow-lg">
                            <div class="card-body p-3 text-center ">
                        <span style="font-size: 30px;">
                            <img src="./img/airtime.svg" height="100px" alt="Airtime Image">
                        </span>
                                <div class="h6 m-2 text-dark ">Airtime TopUp</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3" data-toggle="tooltip" data-placement="top" title="Buy Data">
                    <a href="">
                        <div class="card shadow-lg">
                            <div class="card-body p-3 text-center">
                        <span style="font-size: 30px;">
                            <img src="./img/data.jpg" height="100px" alt="Data">
                        </span>
                                <div class="h6 m-2 text-dark ">Buy Data</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3" data-toggle="tooltip" data-placement="top" title="Buy MTN Data Coupon" >
                    <a href="">
                        <div class="card shadow-lg">
                            <div class="card-body p-3 text-center ">
                        <span style="font-size: 30px;">
                            <img src="./img/data-coupon.png" height="100px" alt="Referral Image">
                        </span>
                                <div class="h6 m-2 text-dark">Buy MTN Data Coupon</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3" data-toggle="tooltip" data-placement="top" title="Electricity Bills">
                    <a href="">
                        <div class="card shadow-lg">
                            <div class="card-body p-3 text-center ">
                        <span style="font-size: 30px;">
                            <img src="./img/utility.jpg" height="100px" alt="Utility">
                        </span>
                                <div class="h6 m-2 text-dark ">Electricity Bills</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3" data-toggle="tooltip" data-placement="top" title="Cable Subscription">
                    <a href="">
                        <div class="card shadow-lg">
                            <div class="card-body p-3 text-center ">
                        <span style="font-size: 30px;">
                            <img src="./img/cable.jpg" height="100px" alt="Cable Subscription">
                        </span>
                                <div class="h6 m-2 text-dark ">Cable Subscription</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3" data-toggle="tooltip" data-placement="top" title="Result Checker">
                    <a href="">
                        <div class="card shadow-lg">
                            <div class="card-body p-3 text-center ">
                        <span style="font-size: 30px;">
                            <img src="./img/resultchecker.png" height="100px" alt="Result Checker Image">
                        </span>
                                <div class="h6 m-2 text-dark ">Result Checker</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3" data-toggle="tooltip" data-placement="top" title="Bonus To Wallet">
                    <a href="">
                        <div class="card shadow-lg">
                            <div class="card-body p-3 text-center ">
                        <span style="font-size: 30px;">
                            <img src="./img/fundacc.jpg" height="100px" alt="Bonus To Wallet">
                        </span>
                                <div class="h6 m-2 text-dark">Bonus to Wallet</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-lg-3" data-toggle="tooltip" data-placement="top" title="My Referrals">
                    <a href="">
                        <div class="card shadow-lg">
                            <div class="card-body p-3 text-center ">
                        <span style="font-size: 30px;">
                            <img src="./img/referral.png" height="100px" alt="Referral images">
                        </span>
                                <div class="h6 m-2 text-dark">My Referrals</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="bg-primary mb-4 p-2">
                <p class="text-white h-100 text-uppercase">transaction statistics</p>
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats shadow-lg rounded">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">pie_chart</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category text-secondary"><strong>Wallet Balance</strong></p>
                                <p class="card-title">₦ 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats shadow-lg">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">monetization_on</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category text-secondary"><strong>Total Funding</strong></p>
                                <p class="card-title">₦ 0.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats shadow-lg">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">highlight_off</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category text-secondary"><strong>Total Spent</strong></p>
                                <p class="card-title">₦ 0.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>



     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
