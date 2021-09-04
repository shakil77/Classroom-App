<?php
//$connection = mysqli_connect('r', 'root', '');
$con = new mysqli("localhost", "croom","c@123" , "classroom");
//$db = mysqli_select_db($connection, "classroom");

    $cname  = $_POST['cname'];
    $section = $_POST['section'];
    $subject = $_POST['subject'];
    $room = $_POST['room'];
    $query = "INSERT INTO class (cname, section, subject, room)
    VALUES ('$cname', '$section', '$subject', '$room')";
    $con->query($query);
    //echo'Saved!';
    echo "<script>window.location.href = 'class.php?cname=$cname'</script>"
?>


