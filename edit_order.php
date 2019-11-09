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

    if (!isset($_GET['eid'])) {
    }
    $a = $_GET['eid'];
    
    if ($_POST) {    
        $o_status = $_POST['o_status'];
        $o_paymentType =$_POST ['o_paymentType'];
        $o_paymentDate = $_POST['o_paymentDate'];
        $c_id = $_POST['c_id'];
        $mtr_id = $_POST['mtr_id'];
        $q_id = $_POST['q_id'];
    
        $query = $mysqlicon->query("UPDATE `order_table` SET `o_status`='{$o_status}',`o_paymentType`='{$o_paymentType}',`o_paymentDate`='{$o_paymentDate}',`c_id`='{$c_id}',`mtr_id`='{$mtr_id}',`q_id`='{$q_id}' WHERE o_id='{$a}'")
                    or die("Error in Query Using Die" . $mysqlicon->error);
        if ($query) {
            // header ('Location:disp_attendance_table.php');
            echo "<script>alert('Record updated');window.location='view_order.php';</script>";
        }
    }
    $fetch_query = $mysqlicon->query("select * from order_table where o_id='{$a}'") or die("Error in Query" . $mysqlicon->error);
    $fetchdata = $fetch_query->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href=" assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href=" assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Update Order Details
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
                            <a class="navbar-brand" href="edit_order.php">Update Order Details</a>
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
                <h5 class="card-title">Update Order Details</h5>
              </div>
              <div class="card-body">
                  <form method="post">
                  <div class="row">
                    <div class="col-md-6 pr-1 px-1">
                        <div class="form-group" style="padding-left: 12px; padding-bottom: 5px;">
                        <label>Client Name</label>
                        <?php
                            echo "<select name='c_id'  class='form-control'>";
                            $c_name = $mysqlicon->query("select * from  client_table where c_id='{$fetchdata['c_id']}' ") or die("Error in Query" . $mysqlicon->error);
                            $fetchuser = $c_name->fetch_array();
                            echo "<option value='{$fetchuser['c_id']}'>{$fetchuser['c_name']}</option>";
                            $query = $mysqlicon->query("select * from client_table") or die("Error in Query" . $mysqlicon->error);

                            while ($row = $query->fetch_array()) {
                                echo "<option value='{$row['c_id']}'>{$row['c_name']}</option>";
                            }
                                    
                            echo "</select>";
                        ?>
                      </div>
                    </div>
                    <div class="col-md-5 pr-1 px-1">
                        <div class="form-group">
                        <label>Material Type</label>
                        <?php
                            echo "<select name='mtr_id'  class='form-control'>";
                            $mtr_id = $mysqlicon->query("select * from material_table where mtr_id='{$fetchdata['mtr_id']}' ") or die("Error in Query" . $mysqlicon->error);
                            $fetchuser = $mtr_id->fetch_array();
                            echo "<option value='{$fetchuser['mtr_id']}'>{$fetchuser['mtr_type']}</option>";
                            $query = $mysqlicon->query("select * from material_table") or die("Error in Query" . $mysqlicon->error);

                            while ($row = $query->fetch_array()) {
                                echo "<option value='{$row['mtr_type']}'>{$row['mtr_type']}</option>";
                            }
                            echo "</select>";
                        ?>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-4 pr-1 px-1">
                        <div class="form-group" style="padding-left: 12px; padding-bottom: 5px;">
                        <label>Order Status</label>
                        <select  class="form-control" name="o_status">
                            <option >Select</option>
                            <option >Completed</option>
                            <option >Pending</option>
                            <option >In Progress</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1 px-1">
                        <div class="form-group">
                        <label>Order Payment Type</label>
                        <select  class="form-control" name="o_paymentType">
                            <option>Select</option>
                            <option>Cash</option>
                            <option>Cheque</option>
                            <option>Online</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 pr-1 px-1">
                        <div class="form-group">
                        <label>Order Date</label>
                        <input id="form_name" name="o_paymentDate" type="date" class="form-control" value="<?php echo $fetchdata['o_paymentDate']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="update" class="btn btn-primary btn-round">Update</button>
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
                    <a href="./view_order.php">View Order Details</a>
                </li>
                <li>
                    <a href="./ins_order.php">Insert Order Details</a>
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