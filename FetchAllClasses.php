<?php
include 'Connect.php';
$count = 0;
    $sql = "Select * from class";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($rows = $result->fetch_assoc()) {
            $subject = $rows['subject'];
            $count++;
            //You have to write code to display card here
            echo '<div class="card-deck text-center" style="margin-top: 30px"> ';
echo '      <div class="card bg-primary" > ';
echo '         <div class="card-header" style="background-color: whitesmoke"><span style="font-size: large">'. $subject .'</span></div> ';
echo '        <div class="card-body text-center"> ';
echo '          <p class="card-text" style="height: 200px"></p> ';
echo '          <p class="card-text"></p> ';
echo '          <p class="card-text"></p> ';
echo '          <p class="card-text"></p> ';
echo '        </div>';
echo '        <div class="card-footer" style="background-color: white"></div> ';
echo '        </div> '; 
echo '        <div class="card bg-warning">';
echo '        <div class="card-header" style="background-color: whitesmoke"> <span style="font-size: large">' . $subject . ' </span></div> ';
echo '        <div class="card-body text-center">';
echo '        <p class="card-text"></p>';
echo '         </div>';
echo '        <div class="card-footer" style="background-color: white"></div>';
echo '        </div>';
echo '        <div class="card bg-success">';
echo '        <div class="card-header" style="background-color: whitesmoke"><span style="font-size: large">' . $subject .'</span></div>';
echo '         <div class="card-body text-center">';
echo '        <p class="card-text"></p>';
echo '        </div>';
echo '         <div class="card-footer" style="background-color: white"></div>';
echo '         </div>';
echo '        <div class="card bg-danger">';
echo '        <div class="card-header" style="background-color: whitesmoke"><span style="font-size: large">'. $subject .'</span></div>';
echo '          <div class="card-body text-center">';
echo '          <p class="card-text"></p>';
echo '         </div>';
echo '         <div class="card-footer" style="background-color: white"></div>';
echo '        </div>';  
echo '        </div>';  
    }
}






        
    

    
    
