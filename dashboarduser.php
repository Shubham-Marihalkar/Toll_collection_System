<?php
  include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboarduser.php">
        <img src="icon.png">
        <div class="sidebar-brand-text mx-3">Toll Payment System</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="dashboarduser.php">
          <i class="fas fa-fw fa-th-large"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
       
      </div>


      <li class="nav-item">
        <a class="nav-link collapsed" href="addvehicle.php" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">

          <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></i>
          <span>Add Vehicle</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="entries.php" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
          <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></i>
          <span>View Entries</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="finedentriesUser.php" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
          <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></i>
          <span>Pending transactions</span>
        </a>
      </li>
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
       Details
      </div>

      <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
      
      </li>

     <li class="nav-item">
        <a class="nav-link" href="about.php">
          <i class="fas fa-fw fa-file"></i>
          <span>About</span>
        </a>
      
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php
                    echo $login_session;
                  ?>
                </span>
                <i class="fas fa-fw fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
              
                <a class="dropdown-item" href="about.php">
                  <i class="fas fa-file fa-sm fa-fw mr-2 text-gray-400"></i>
                  About
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
                <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="row">

            <div class="col-xl-6 col-md-5 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        <?php
                              $sql="SELECT vname,vtype,vnumber FROM vehical_registry WHERE $rowid=userid";
                              $result = mysqli_query($link,$sql);
                        ?>
                          <p style="font-size:18px">Vehicle Details</p>
                      </div>
                      
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        
                        echo"Vehicle Name : ".($row['vname']);
                        echo "</br>";
                        echo"Vehicle Type : ".($row['vtype']);
                        echo "</br>";
                        echo"Vehicle Number: ".($row['vnumber']);
                        echo "</br>";echo "</br>";
                      }
                      ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-car" style="font-size:72px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Previous Trip</h6>
                  
                <div class="card-body">
                 <?php
                      $sql="SELECT toll_booth,time FROM vehical_entry WHERE $rowid=userid and time = (SELECT MAX(time) FROM vehical_entry WHERE userid=$rowid)
                          ORDER BY slno, time DESC;";
                      $result = mysqli_query($link,$sql);
                      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  
                      $date=explode(" ",$row['time']);                   
                       echo "</br>";
                       echo"Toll Booth : ".($row['toll_booth']);
                       echo "</br>";
                       echo"Date : ".($date[0]);
                       echo "</br>";
                       echo"Time: ".($date[1]);
                     }
                ?>
                </div>
              </div>
            </div>

                <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button type="button" style="width:1000px" class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal" >
            Make Payment
            </button>
          </div>
          <div id="records_content">  </div>
        </div>

    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Toll Payment</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Choose Vehicle</label>
            
                 <?php
                $sql = "SELECT vname FROM vehical_registry where userid=$rowid";
                $result = mysqli_query($link,$sql);
                echo "<select name='vname' id='vname' class='form-control'>";
                echo "<option value=''>Select Vehicale Name</option>";
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                  echo "<option value='" . $row['vname'] ."'>" . $row['vname'] ."</option>";
                }
               echo "</select>";
                ?>
            </div>

            <div class="form-group">
              <label>Choose Vehicle Type</label>
            
                 <?php
                $sql = "SELECT vtype FROM vehical_registry where userid=$rowid";
                $result = mysqli_query($link,$sql);
                echo "<select name='vtype' id='vtype' class='form-control'>";
                echo "<option value=''>Select Vehicale Type</option>";
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                  echo "<option value='" . $row['vtype'] ."'>" . $row['vtype'] ."</option>";
                }
               echo "</select>";
                ?>
            </div>

            <div class="form-group">
              <label>Choose Vehicle Number</label>
            
                 <?php
                $sql = "SELECT vnumber FROM vehical_registry where userid=$rowid";
                $result = mysqli_query($link,$sql);
                echo "<select name='vnumber' id='vnumber' class='form-control'>";
                echo "<option value=''>Select Vehicale Number</option>";
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                  echo "<option value='" . $row['vnumber'] ."'>" . $row['vnumber'] ."</option>";
                }
               echo "</select>";
                ?>
            </div>
            <div class="form-group">
              <label>Toll Booth</label>
            
                 <?php
                $sql = "SELECT * FROM tollbooths";
                $result = mysqli_query($link,$sql);
                echo "<select name='tollbooth' id='tollbooth' class='form-control'>";
                echo "<option value=''>Select Starting_point</option>";
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                  echo "<option value='" . $row['location'] ."'>" . $row['location'] ."</option>";
                }
               echo "</select>";
                ?>
            </div>

          <div class="form-group">
          <label> Enter OTP:</label>
          
          <input placeholder="<?php echo "OTP"?>"
           type="text" name="otp" id="otp" class="form-control">
        </div>          
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="addRecord()">Pay</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

   

    </div>
  </div>
</div>

          </div>
        </div>
      </div>

          </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto"id="google_translate_element">
            Copyright &copy; Toll_Collection

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>


<script>
  
  function addRecord(){

    var vname =  $("#vname").val();
    var vtype =  $("#vtype").val();
    var vnumber =  $("#vnumber").val();
    var tollbooth =  $("#tollbooth").val();
    var otp =  $("#otp").val();

    $.ajax({

      url:"payment.php",
      type:'POST',
      data: {
        vname:vname,
        vtype:vtype,
        vnumber:vnumber,
        tollbooth:tollbooth,
        otp:otp,
      },
      success:function(data, status){
        window.location.reload();
      },

    });

  }
</script>



<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div></div>
      </footer>

    </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/sb-admin-2.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>

  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>
