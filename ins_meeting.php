<?php
function connection_open()
{
//First we have to Connect Our Database 
//ServerName,UserName,Password,DBName
//Created Object of Connection Function
//Die() Will Stop the execution of program if there are some error. 
//connect->error function will print System Error.
 $mysqlicon = new mysqli("localhost", "root", "", "akshar_graphics_db")          or die("<h1>Error in Connection Please Check DB Name </h1>".$mysqlicon->connect_error) ;

 return $mysqlicon;
}


function admin_login_check()
{
    
}
$mysqlicon = connection_open();

if ($_POST) {
    
    $mtg_date = $_POST['mtg_date'];
    $mtg_place =$_POST ['mtg_place'];
    $mtg_type = $_POST['mtg_type'];
    $v_id = $_POST['v_id'];
    $query = $mysqlicon -> query("insert into meeting_table (mtg_date, mtg_place, mtg_type, v_id) values ('{$mtg_date}','{$mtg_place}','{$mtg_type}','{$v_id}')")
            or die("Error in Query Using Die" . $mysqlicon->error);
    if ($query) {
        echo "<script>alert('Record Inserted');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href=" assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href=" assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Meeting Form
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href=" assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href=" assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=" assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src=" assets/img/logo.jpg">
          </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Akshar Graphics
          <!-- <div class="logo-image-big">
            <img src=" assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li>
                            <a href="./dashboard.php">
                                <i class="nc-icon nc-bank"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="./map.php">
                                <i class="nc-icon nc-pin-3"></i>
                                <p>Maps</p>
                            </a>
                        </li>
                        <li>
                            <a href="./view_user.php">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>View User</p>
                            </a>
                        </li>
                        <li>
                            <a href="./view_materials.php">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>View Materials</p>
                            </a>
                        </li>
                        <li>
                            <a href="./view_Visitor.php">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>View Visitor</p>
                            </a>
                        </li>
                        <li>
                            <a href="./view_meeting.php">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>View Meeting</p>
                            </a>
                        </li>
                        <li>
                            <a href="./view_client.php">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>View Clients</p>
                            </a>
                        </li>
                        <li>
                            <a href="./view_quotation.php">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>View Quotation</p>
                            </a>
                        </li>
                        <li>
                            <a href="./view_order.php">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>View Order</p>
                            </a>
                        </li>
                        <li>
                            <a href="./view_bill.php">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>View Bill</p>
                            </a>
                        </li>
                    </ul>
                </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
          <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="ins_meeting.php">Insert Meeting Details</a>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <form method="get" >
                                <div class="input-group no-border">
                                    <input type="text" name="search" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <button type="submit" style="border-radius: 5px 5px 5px 5px;cursor: pointer;"><i class="nc-icon nc-zoom-split"></i></button>
                                            </div>
                                        </div>
                                </div>
                            </form>
                            <ul class="navbar-nav">
                                <li class="nav-item btn-rotate dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="nc-icon nc-circle-10"></i>
                                        <p><span class="d-lg-none d-md-block">Profile</span></p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="login.php">logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">
  
  
</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Meeting Form</h5>
              </div>
              <div class="card-body">
                  <form method="post">
                  <div class="row">
                    <div class="col-md-11 pr-1 px-1">
                        <div class="form-group" style="padding-left: 12px; padding-bottom: 5px;">
                        <label>Visitor Name</label>
                        <?php
                            $query = $mysqlicon->query("select * from  visitor_table") or die("Error in Query" . $mysqlicon->error);
                            echo "<select name='v_id'  class='form-control'>";
                            while ($row = $query->fetch_array()) {
                                echo "<option value='{$row['v_id']}'>{$row['v_name']}</option>";
                            }
                            echo "</select>";
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Meeting Place</label>
                        <input id="form_name" name="mtg_place" type="text" class="form-control" placeholder="Place of Meeting">
                      </div>
                    </div>
                    <div class="col-md-2 px-1">
                      <div class="form-group">
                        <label>Meeting Type</label>
                        <select  class="form-control" name="mtg_type">
                            <option >Select</option>
                            <option >F2F</option>
                            <option >call</option>
                            <option >Skype</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                        <div class="form-group">
                            <label>Meeting Date</label>
                            <input id="form_name" name="mtg_date" type="date" class="form-control" >
                        </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Submit</button>
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
          	<nav class="footer-nav">
              <ul>
                <li>
                    <a href="./view_meeting.php">View Meeting Details</a>
                </li>
                
              </ul>
          </nav>
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
  <script src=" assets/js/core/jquery.min.js"></script>
  <script src=" assets/js/core/popper.min.js"></script>
  <script src=" assets/js/core/bootstrap.min.js"></script>
  <script src=" assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src=" assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src=" assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=" assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src=" assets/demo/demo.js"></script>
</body>

</html>