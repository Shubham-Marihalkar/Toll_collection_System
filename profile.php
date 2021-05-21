<?php
          include_once("database.php");
          include("inc/config.inc.php"); 
          include("inc/header.php"); 
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
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
          </div>

          <div class="row">

            <div class="col-xl-10 col-md-5 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        <?php
                              $sql="SELECT * FROM users WHERE $rowid=userid";
                              $result = mysqli_query($link,$sql);
                          ?>
                          <p style="font-size:18px"> User Profile</p>
                      </div>
                      
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        
                        echo"Name : ".($row['firstname'])." ".($row['lastname']);
                        echo "</br>";echo "</br>";
                        echo" Username : ".($row['username']);
                        echo "</br>";echo "</br>";
                        echo"Phone Number: ".($row['phoneno']);
                        echo "</br>";echo "</br>";

                    
                      ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-circle"  style="font-size:140px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


           
                <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button type="button" style="width:920px" class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal" >
            Update Profile
            </button>
          </div>
          <div id="records_content">  </div>
        </div>

    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"> Update profile</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            
            <div class="form-group">
                    <label>First Name </label>
                   <input value="<?php echo $row['firstname'];?>" type="text" name="firstname" id="firstname" class="form-control">
            </div>

            <div class="form-group">
                    <label>Last Name </label>
                   <input value="<?php echo $row['lastname'];?>" type="text" name="lastname" id="lastname" class="form-control">
            </div>

            <div class="form-group">
                    <label>Phone Number </label>
                   <input value="<?php echo $row['phoneno'];?>" type="text" name="phoneno" id="phoneno" class="form-control">
            </div>


            <div class="form-group">
                    <label>Security Question </label>
                   <select name="securityqst" id="securityqst" class="form-control">
                         <option><?php echo $row['securityqst'];?></option>
                         <option value="What was the name of your first/current/favorite pet?">What was the name of your first/current/favorite pet?</option>
                         <option value="Where is your favorite place to vacation?">Where is your favorite place to vacation?</option>
                         <option value="Which is your birth place?">Which is your birth place?</option>
                          <option value="Which is your favorite street food?">Which is your favorite street food?</option>
                      </select>
            </div>


            <div class="form-group">
                    <label>Security Answer </label>
                   <input value="<?php echo $row['securityans'];?>" type="text" name="securityans" id="securityans" class="form-control">
            </div>


          <div class="form-group">
                    <label>Password</label>
                   <input value="<?php echo $row['password'];?>" type="text" name="password" id="password" class="form-control">
            </div>




               
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" data-dismiss="modal" onclick="UpdateRecord()">Update</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
  function UpdateRecord(){
    
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      var username = $("#username").val();
      var phoneno= $("#phoneno").val();
      var securityqst = $("#securityqst").val();
      var securityans= $("#securityans").val();
      var password= $("#password").val();

    $.ajax({
      type:'PATCH',
      url:"userprofilebackend.php",
      data: {
          firstname: firstname,
          lastname: lastname,
          username: username,
          phoneno: phoneno,
          securityqst: securityqst,
          securityans: securityans,
          password: password,
      },

      success:function(data, status){
        window.location.reload();
      },
    });

  }

function readRecords(){
    
    var readrecords;
    
    $.ajax({
      type:"PATCH",
      url:"userprofilebackend.php",
      data:{readrecords:readrecords},
      success:function(data,status){
        $('#records_content').html(data);   
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
