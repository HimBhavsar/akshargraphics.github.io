<?php
    session_start();

$connection = new mysqli("localhost", "root", "", "akshar_graphics_db");

if ($_POST) {
    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_password'];
    $query = mysqli_query($connection, "select * from user_table where u_email='{$u_email}' and u_password = '{$u_password}'")
            or die(mysql_error($connection));
    $data = mysqli_fetch_row($query);
    if ($data > 0) {
        $_SESSION['name'] = $data[1];
        $_SESSION['id'] = $data[0];
        header("location: dashboard.php");
    } else {
        echo "<script>alert('Login Fail');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href=assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo.jpg">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          Akshar Graphics
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Login</a>
          </div>
        </div>`
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">
  
  
</div> -->
    
      <div class="content">
     
        <div class="row">
          
          <div class="col-md-6" style="padding-right: 38px; padding-top: 88px; padding-bottom: 0px; top: 0px; margin-top: 8‒; right: 0px; left: 277px;">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Login</h5>
              </div>
              <div class="card-body">
                  <form method="post">
                  <div class="row">
                    <div class="col-md-8 ml-auto mr-auto pl-1">
                        <div class="form-group" style="left: 10px; padding-right: 11px;">
                        <label>Username</label>
                        <input  name="u_email" type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-md-8 ml-auto mr-auto Password">
                      <div class="form-group">
                        <label>Password</label>
                        <input name="u_password" type="Password" class="form-control" placeholder="Password" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="login ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Login</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Him Bhavsar
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
</body>

</html>