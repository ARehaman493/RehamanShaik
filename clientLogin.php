<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="slideshow.css">
    <meta charset="utf-8">
    <title>LEGEND'S LAPTOP SERVICE</title>
</head>

<body style="background: linear-gradient(45deg, greenyellow, dodgerblue);">
    <div>
        <ul>
            <li><a  href="index.php">Home</a></li>
            <li><li><a href="about.html">About us</a></li></li>
            <li><a class="active" href="clientLogin.php">Client Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="clientslot.php">Check Slot</a></li>
            <li style="float:right"><a href="ownerLogin.php">Login</a></li>
        </ul>
    </div>
<?php
  include 'db.php';

    $Data = mysqli_query($conn,"select * from services");
    $i = mysqli_num_rows($Data);
    if($i>0){
?>





    <div class="container">
  <div>
    <?php     
     while ($row = $Data->fetch_assoc()) {  
          if($row['available'] == 1){
      ?>
    <div>
      <div>
        <img style="width:100%;height:100%;" src="./img/1.jpg">
      </div>
      <div>
        <center><strong>
            <p>
              <?php
                echo $row['ServiceName'];
              ?>
            </p>
            <p>
              <h5><b>Cost per hour:</b></h5>
              <?php
                echo "$".$row['Cost'];
              ?>
            </p>
            <p>
              <?php
                echo $row['Time'];
              ?>
            </p>
            <p>
              <?php
                echo $row['Date']." i.e. ".$row['Day'];
              ?>
            </p>
          </strong>
        </center>
      </div>
      <div>
        <center> <a href="clientservice.php"><button>Click here!</button></a></center>
      </div>
    </div>
    <hr>
  <?php } else{ ?>
    <div>
      <div>
        <img style="width:100%;height:100%;" src="./img/1.jpg">
      </div>
      <div>
        <center><strong>
            <p>
              <?php
                echo $row['ServiceName'];
              ?>
            </p>
            <p>
              <h5><b>Cost per hour:</b></h5>
              <?php
                echo "$".$row['Cost'];
              ?>
            </p>
            <p>
              <?php
                echo $row['Time'];
              ?>
            </p>
            <p>
              <?php
                echo $row['Date']." i.e. ".$row['Day'];
              ?>
            </p>
          </strong>
        </center>
      </div>
      <div>
        <center> <h1>Slot Unavailable</h1></center>
      </div>
    </div>
<?php
}
}

}



   ?>

</div>
</div>
    
    
    
</body>
</html>    