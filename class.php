<?php
  include 'FetchClass.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Google Classroom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#"><i class="fa fa-bars"></i><span style="margin-left: 20px"><?php echo $subject;?></span></a>
  
  <!-- Links -->
  
  <ul class="navbar-nav" style="margin-left: 330px">
    <li class="nav-item">
      <a class="nav-link" href="./class.php"><b>Stream</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./classwork.html"><b>Classwork</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./people.html"><b>People</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><b>Grades</b></a>
    </li>
  </ul>
</nav> 
<div class="container">
  <div class="card bg-primary text-white" style="margin-top: 40px">
    <div class="card-body" style="height: 220px"><span style="font-size: 40px"><?php echo $subject;?></span></div>
  </div>
</div> 
  
<div class="container">
<div class="card bg-light text-dark" style="margin-left: 280px">
  <div class="card-body" style="margin-left: 50px"><span style="color: blue"><span style="margin-right: 10px"><i class="fa fa-user-plus"></span></i>Anounce something to your class</span></div>
</div>
</div>
</div>
<div class="container">
  <div class="card bg-light text-dark" style="max-width: 200px;">
    <div class="card-body"><h6>Upcoming</h6>
    <P>NO work due Soon</P>
   <a href="./view.html"><h6 style="margin-left: 100px"><span style="color: black">View all</span></h6></a>
  </div>

  </div>
  </div>
  </div>
  
<div class="container" style="height: 250px">
  <div class="card bg-light text-dark" style="margin-left: 280px">
  <div class="card-body"><b>Communicate with your class here </b></h5><br><br>
    <p><i class="fa fa-file" style="margin-right: 10px"></i>Create and schedule announcements</p>
    <p><i class="fa fa-folder-o" style="margin-right: 10px"></i> Respond to student posts</p>
  </div>
  </div>
  </div>
</body>
</html>