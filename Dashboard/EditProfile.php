<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>Profile || Ibn Mas'ud Telecom</title>
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
      <h3><img src="../img/IB.png" class="img-fluid rounded-5" alt="Ibn Mas'ud Logo"/><span>Welcome</span></h3>
    </div>
    <ul class="list-unstyled components">
      <li  class="active">
        <a href="#" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
      </li>

      <div class="small-screen navbar-display">
        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
          <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">notifications</i><span> 4 notification</span></a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu0">
            <li><a href="#">You have 5 new messages</a></li>
            <li><a href="#">You're now friend with Mike</a></li>
            <li><a href="#">Wish Mary on her birthday!</a></li>
            <li><a href="#">5 warnings in Server Console</a></li>
          </ul>
        </li>

        <li  class="d-lg-none d-md-block d-xl-none d-sm-block"><a href="#"><i class="material-icons">apps</i><span>apps</span></a></li>
        <li  class="d-lg-none d-md-block d-xl-none d-sm-block"><a href="#"><i class="material-icons">person</i><span>user</span></a></li>
      </div>


      <li class="dropdown">
      <li><a href="./buyData.html"><i class="material-icons">signal_cellular_alt</i><span>Buy Data</span></a></li>
      <li><a href=""><i class="material-icons">call</i><span>Buy Airtime</span></a></li>


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

      <li><a href="./pricing.html"><i class="material-icons">payments</i><span>Pricing</span></a></li>
      <li><a href="#"><i class="material-icons">question_mark</i><span>F.A.Qs</span></a></li>
      <li><a href="#"><i class="material-icons">person</i><span>Account</span></a></li>
      <li><a href="#"><i class="material-icons">settings</i><span>Settings</span></a></li>
      <li><a href="#"><i class="material-icons">logout</i><span>Logout</span></a></li>
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

          <a class="navbar-brand" href="#">Edit Profile </a>

          <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-icons">more_vert</span>
          </button>

          <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="dropdown nav-item active">
                <a href="#" class="nav-link" data-toggle="dropdown">
                  <span class="material-icons">notifications</span>
                  <span class="notification">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">You have 5 new messages</a>
                  </li>
                  <li>
                    <a href="#">You're now friend with Mike</a>
                  </li>
                  <li>
                    <a href="#">Wish Mary on her birthday!</a>
                  </li>
                  <li>
                    <a href="#">5 warnings in Server Console</a>
                  </li>

                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="material-icons">apps</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="material-icons">person</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="material-icons">settings</span>
                </a>
              </li>
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
              <h4 class="card-title text-center font-weight-bold text-primary">Edit your profile</h4>
            </div>

            <div class="card-content">
              <form action="" id="changePinForm">


                <div class="form-group">
                  <label for="bankName">Bank Name</label>
                  <select class="form-control" name="" id="">
                    <option value="" selected>-------</option>
                    <option value="gt-bank">Guaranty Trust Bank</option>
                    <option value="first-bank">First Bank</option>
                    <option value="jaizBank">Jaiz Bank</option>
                    <option value="zenith-bank">Zenith Bank</option>
                    <option value="eco-bank">ECO Bank</option>
                    <option value="fcmb-bank">FCMB Bank</option>
                    <option value="uba-bank">UBA Bank</option>
                    <option value="stanbic-bank">Stanbic Bank</option>
                    <option value="sterlling-bank">Sterlling Bank</option>
                    <option value="heritage-bank">Heritage Bank</option>
                    <option value="WemaBank">Wema Bank</option>
                    <option value=polarise-bank">Polarise Bank</option>
                    <option value="union-bank">Union Bank</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="accountName">Account Name</label>
                  <input type="text" class="form-control" id="accountName" >
                </div>

                <div class="form-group">
                  <label for="accountNumber">Account Number</label>
                  <input type="number" class="form-control" id="accountNumber">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="No Password Set." id="password" disabled>
                  <small style="text-align: justify">
                    Raw passwords are not stored, so there is no way to see this user’s password, but you can change the password using this
                    <a class="text-primary" href="">Form</a>
                  </small>
                </div>

                <button class="btn btn-primary mt-3 w-100">Proceed</button>
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


