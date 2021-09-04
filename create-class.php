<!DOCTYPE html>
<html lang="en">
<head>
  <title> Google Classroom </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 
  <form action="connection.php" method="Post" id="CreateClass">
<div class="container" style="max-width: 530px">
  <div class="card-group" style="margin-top: 50px">
    <div class="card" style="background-color: azure">
      <div class="card-body text-center" style="height: 480px">
        <p class="card-text"></p>
        <h5 style="margin-right: 30px">Create class</h5>
        <label for="cname" style="color: blue"><b>Create Name</b></label><br>
        <input class="form-contr1" type="text" id="cname" name="cname" placeholder="Create Name" required>
        <hr>
        <label for="section"><b> Section</b></label><br>
        <input class="form-contr1" type="text" id="section" name="section" placeholder="Section" required>
        <hr>
        <label for="subject"><b> Subject</b></label><br>
        <input class="form-contr1" type="text" id="subject" name="subject" placeholder="Subject" required>
        <hr>
        <label for="room"><b> Room</b></label><br>
        <input class="form-contr1" type="text" id="room" name="room" placeholder="room" required>
        <hr>
        <a href="#" style="margin-left: 250px">Cancel</a>
        <a href="#" style="margin-left: 50px" onclick="document.getElementById('CreateClass').submit();"><span>Create</span></a>
      </div>
    </div>  
  </div>
</div>
</form>
</body>
</html>