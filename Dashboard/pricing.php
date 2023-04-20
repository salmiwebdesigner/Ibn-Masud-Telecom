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
  <title> Pricing List || Ibn Mas'ud Telecom</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
      <h3>
          <a href="./pricing.php"><img src="../img/avatar.png" class="img-fluid rounded-5" alt="User Avatar"/></a>
      </h3>
    </div>
    <ul class="list-unstyled components">
      <li  class="active"><a href="./index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a></li>

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

          <a class="navbar-brand" href="#"> Pricing </a>

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
        <div class="container-fluid ">
          <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text">
              <h4 class="card-title text-center">Pricing</h4>
            </div>
            <div class="card-content table-responsive">
              <table class="table table-hover">
                <thead class="text-primary">
                <tr><th>ID</th>
                  <th>Services</th>
                  <th>Affiliate</th>
                  <th>TopUser</th>
                  <th>ApiUser</th>
                </tr></thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>MTN AIRTIME</td>
                  <td>% 98</td>
                  <td>% 98</td>
                  <td>% 97</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>GLO AIRTIME</td>
                  <td>% 98</td>
                  <td>% 98</td>
                  <td>% 97</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>9MOBILE AIRTIME</td>
                  <td>% 98</td>
                  <td>% 98</td>
                  <td>% 97</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>WAEC Result</td>
                  <td>₦ 2570.0</td>
                  <td>₦ 2570.0</td>
                  <td>₦ 2570.0</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>NECO Result</td>
                  <td>₦ 900.0</td>
                  <td>₦ 900.0</td>
                  <td>₦ 900.0</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>NABTEB Result</td>
                  <td>₦ 900.0</td>
                  <td>₦ 900.0</td>
                  <td>₦ 900.0</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div>&nbsp;</div>

        <div class="container-fluid ">
            <div class="card"  style="min-height: 485px">
              <div class="card-header card-header-text">
                <h4 class="card-title text-center text-warning">MTN <sub>DATA</sub></h4>
              </div>
              <div class="card-content table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <tr>
                      <th>Data Type</th>
                      <th>Plan Size</th>
                      <th>Affiliate</th>
                      <th>Top user</th>
                      <th>API user</th>
                      <th>Validity</th>
                    </tr>
                  </thead>

                  <tbody>
                  <tr>
                    <td> 500.0MB </td>
                    <td><i> SME</i></td>
                    <td><i> ₦130</i></td>
                    <td><i> ₦108</i></td>
                    <td><i> ₦115</i></td>
                    <td><i>30 days</i></td>
                  </tr>
                  <tr>
                    <td> 500.0MB </td>
                    <td><i> CORPORATE GIFTING</i></td>
                    <td><i> ₦150</i></td>
                    <td><i> ₦115</i></td>
                    <td><i> ₦130</i></td>
                    <td><i>30 days</i></td>
                  </tr>
                  <tr>
                    <td> 1.0GB </td>
                    <td><i> SME</i></td>
                    <td><i> ₦230</i></td>
                    <td><i> ₦220</i></td>
                    <td><i> ₦220</i></td>
                    <td><i>30 days</i></td>
                  </tr>
                  <tr>
                    <td> 1.0GB </td>
                    <td><i> CORPORATE GIFTING</i></td>
                    <td><i> ₦250</i></td>
                    <td><i> ₦230</i></td>
                    <td><i> ₦240</i></td>
                    <td><i>30 days</i></td>
                  </tr>
                  <tr>
                    <td> 2.0GB </td>
                    <td><i> SME</i></td>
                    <td><i> ₦460</i></td>
                    <td><i> ₦440</i></td>
                    <td><i> ₦440</i></td>
                    <td><i>30 days</i></td>
                  </tr>
                  <tr>
                    <td> 2.0GB </td>
                    <td><i> CORPORATE GIFTING</i></td>
                    <td><i> ₦500</i></td>
                    <td><i> ₦460</i></td>
                    <td><i> ₦480</i></td>
                    <td><i>30 days</i></td>
                  </tr>

                  <tr>
                    <td> 3.0GB </td>
                    <td><i> SME</i></td>
                    <td><i> ₦690</i></td>
                    <td><i> ₦660</i></td>
                    <td><i> ₦660</i></td>
                    <td><i>30 Days</i></td>
                  </tr>

                  <tr>
                    <td> 3.0GB </td>
                    <td><i> CORPORATE GIFTING</i></td>
                    <td><i> ₦750</i></td>
                    <td><i> ₦690</i></td>
                    <td><i> ₦720</i></td>
                    <td><i>30days</i></td>
                  </tr>

                  <tr>
                    <td> 5.0GB </td>
                    <td><i> SME</i></td>
                    <td><i> ₦1150</i></td>
                    <td><i> ₦1100</i></td>
                    <td><i> ₦1100</i></td>
                    <td><i>30 days</i></td>
                  </tr>

                  <tr>
                    <td> 5.0GB </td>
                    <td><i> CORPORATE GIFTING</i></td>
                    <td><i> ₦1250</i></td>
                    <td><i> ₦1150</i></td>
                    <td><i> ₦1200</i></td>
                    <td><i>30 days</i></td>
                  </tr>
                  <tr>
                    <td> 10.0GB </td>
                    <td><i> SME</i></td>
                    <td><i> ₦2300</i></td>
                    <td><i> ₦2200</i></td>
                    <td><i> ₦2200</i></td>
                    <td><i>30 days</i></td>
                  </tr>

                  <tr>
                    <td> 10.0GB </td>
                    <td><i> CORPORATE GIFTING</i></td>
                    <td><i> ₦2500</i></td>
                    <td><i> ₦2300</i></td>
                    <td><i> ₦2400</i></td>
                    <td><i>30 days</i></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <div>&nbsp;</div>

        <div class="container-fluid ">
          <div class="card"  style="min-height: 485px">
            <div class="card-header card-header-text">
              <h4 class="card-title text-center text-success">GLO <sub>DATA</sub></h4>
            </div>
            <div class="card-content table-responsive">
              <table class="table table-hover">
                <thead class="text-success">
                <tr>
                  <th>Data Type</th>
                  <th>Plan Size</th>
                  <th>Affiliate</th>
                  <th>Top user</th>
                  <th>API user</th>
                  <th>Validity</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                  <td> 1.05GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦450</i></td>
                  <td><i> ₦450</i></td>
                  <td><i> ₦425</i></td>
                  <td><i>(800MB + 250MB) 14 DAYS VALID</i></td>
                </tr>

                <tr>
                  <td> 2.45GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦880</i></td>
                  <td><i> ₦880</i></td>
                  <td><i> ₦850</i></td>
                  <td><i>(1.84GB+ 600MB) 30 DAYS VALID</i></td>
                </tr>
                <tr>
                  <td> 4.1GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦1320</i></td>
                  <td><i> ₦1320</i></td>
                  <td><i> ₦1275</i></td>

                  <td><i>(3.5GB+ 600MB) 30 DAYS VALID</i></td>
                </tr>

                <tr>
                  <td> 5.8GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦1760</i></td>
                  <td><i> ₦1760</i></td>
                  <td><i> ₦1700</i></td>
                  <td><i>(5.2GB+ 600MB) 30 DAYS VALID</i></td>
                </tr>

                <tr>
                  <td> 7.7GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦2200</i></td>
                  <td><i> ₦2200</i></td>
                  <td><i> ₦2125</i></td>
                  <td><i>(6.8GB+ 900MB) 30 DAYS VALID</i></td>
                </tr>

                <tr>
                  <td> 10.0GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦2640</i></td>
                  <td><i> ₦2640</i></td>
                  <td><i> ₦2550</i></td>
                  <td><i>(9GB+ 1GB) 30 DAYS VALIDITY</i></td>
                </tr>

                <tr>
                  <td> 13.25GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦3520</i></td>
                  <td><i> ₦3520</i></td>
                  <td><i> ₦3400</i></td>
                  <td><i>(12.2GB+ 1GB) 30 DAYS VALIDITY</i></td>
                </tr>
                <tr>
                  <td> 18.25GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦4400</i></td>
                  <td><i> ₦4400</i></td>
                  <td><i> ₦4250</i></td>

                  <td><i>(17GB+ 1.25GB) 30 DAY VALIDITY</i></td>
                </tr>

                <tr>
                  <td> 29.5GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦7040</i></td>
                  <td><i> ₦7040</i></td>
                  <td><i> ₦6800</i></td>
                  <td><i>(27.5GB+ 2GB) 30 DAY VALIDITY</i></td>
                </tr>

                <tr>
                  <td> 50.0GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦8800</i></td>
                  <td><i> ₦8800</i></td>
                  <td><i> ₦8500</i></td>
                  <td><i>(46GB+ 4GB) 30 DAY VALIDITY</i></td>
                </tr>

                <tr>
                  <td> 93.0GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦13200</i></td>
                  <td><i> ₦13200</i></td>
                  <td><i> ₦12750</i></td>
                  <td><i>(86GB+ 7GB) 30 DAY VALIDITY</i></td>
                </tr>

                <tr>
                  <td> 119.0GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦15840</i></td>
                  <td><i> ₦15840</i></td>
                  <td><i> ₦15300</i></td>
                  <td><i>(109GB+ 10GB) 30 DAY VALIDITY</i></td>
                </tr>

                <tr>
                  <td> 138.0GB </td>
                  <td><i>GIFTING</i></td>
                  <td><i> ₦17600</i></td>
                  <td><i> ₦17600</i></td>
                  <td><i> ₦17000</i></td>
                  <td><i>(126GB+ 12GB) 30 DAY VALIDITY</i></td>
                </tr>
                </tbody>
              </table>
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