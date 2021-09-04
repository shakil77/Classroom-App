<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>
    Google Classroom
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<!------------------- heading start here------------ -->

<section>
<body style="background-color: silver"> 
  <div class="container" style="margin-left: 210px">
    
    <!------------------- Modal start here --------------->
    <div class="container">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left: 93%">
        <span class="glyphicon glyphicon-plus"></span>+ 
      </button>
      
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              <a href="./create-class.php">Create Class</a>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
              <a href="">Join Class</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -------------------Modal end here------------ -->
     
    <div class="second_navbar">
    <i class="fas fa-folder" style="margin-left: 80px"></i>
     <a href="">To-do</a>
     <i class="fas fa-file" style="margin-left: 80px"></i>
     <a href="">To-review</a>
     <i class="fas fa-calendar" aria-hidden="true" style="margin-left: 80px"></i>
     <a href="">Calender</a>
  </div> 
     <?php
        
          include 'FetchAllClasses.php';       
        
     ?>
    </div>
  </div>
</section>
  <!----------- Heading end here------------ -->

<!------------------- wrapper start here -------------------- -->

<section>
<div class="">
  <div class="wrapper">
    <div class="sidebar" data-color="orange" style="width: 200px">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="sidebar-wrapper" id="sidebar-wrapper" style="width: 210px">
        <ul class="nav">
          <li class="active ">
            <a href="./index.html">
            <i class="fas fa-bars"></i>
              <p>Google Classroom</p>
            </a>
          </li>
          <li>
            <a href="http://localhost:90/project/class.php?cname=DWM">
              <i class="now-ui-icons education_atom"></i>
              <p style="font-size: medium">MCA-601</p>
            </a>
          </li><br>
          <li>
           <a href="#">
              <i class="now-ui-icons location_map-big"></i>
              <p style="font-size: medium">MCA-602</p>
            </a>
          </li><br>
          <li>
            <a href="#">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p style="font-size: medium">MCA-603</p>
            </a>
          </li><br>
          <li>
          <a href="#" onclick="document.getElementById('Index').submit();">
              <i class="now-ui-icons users_single-02"></i>
              <p style="font-size: medium">MCA-604</p>
            </a>
          </li>
          </div>
          </div>
  </div>
</section>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    });
  </script>
</body>
</html>