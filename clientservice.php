<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="slideshow.css">
    <meta charset="utf-8">

    <title>LEGEND'S LAPTOP SERVICE</title>
    <style>
      form{
    margin: 0 auto;
    width:700px;
  }
input[type=text],input[type=numeric],input[type="date"],input[type="email"],textarea,select {
  width: 50%;
  padding: 12px 20px;
  margin: 10px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit],input[type=reset] {
  width: 40%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit],input[type=reset]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  padding: 10px;
}
    </style>
</head>

<body style="background: linear-gradient(45deg, greenyellow, dodgerblue);">
    <div>
        <ul>
            <li><a  href="index.php">Home</a></li>
            <li><li><a href="about.html">About us</a></li></li>
            <li><a href="clientLogin.php">Client Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="clientslot.php">Check Slot</a></li>
            <li style="float:right"><a href="ownerLogin.php">Login</a></li>
        </ul>
    </div>
<?php
  include 'db.php';
?>
<center>
  <div>
  <form method="post" action=" "><font color="grey"></font>
  <p>
    <p><b><label for="name">Name</b><font color="red">*</font></label></p>
    <input type="text" name="name" maxlength="50" required="required" id="name">
  </p>
  <p>
    <b><label for="Address">Address</b><font color="red">*</font></label>
    <input type="text" name="Address" required="required" id="Address">
  </p>

  <p>
    <b><label for="phone">Phone number</b><font color="red">*</font></label>
    <input type="numeric" name="phone" maxlength="10" required="required" id="phone">
  </p>
  <p>
    <label for="service">Service:</label>
    <select name="service" id="service">
      <option value="">--- Choose a service ---</option>
      <option value="part">Part Replacement</option>
      <option value="install">Software Installation</option>
      <option value="servicing">Laptop Servicing</option>
    </select>
    
  </p>
  <p>
    <b>Brand</b><font color="red">*</font>
    <input type="text" name="brand" required="required" id="brand">
  </p>
  
  <p>
    <b>Model</b><font color="red">*</font>
    <input type="text" name="Model" required>
  </p>
  <p>
    <b>Time</b><font color="red">*</font>
    <input type="time" name="time" required>
  </p>
  <p>
    <b>Date</b><font color="red">*</font>
    <input type="date" name="date" required>
  </p>
  <p>
  <input type="submit" name="submit" value="submit";>
</p>
<p>
    <input type="reset" value="reset" value="reset">
  </p>
  

</form>
</div>
</center>

  <?php 
  include 'db.php';


    if(isset($_POST['submit']))
    {
        $query = "SELECT * FROM booking where Date = '$_POST[date]' LIMIT 1";

        $info = mysqli_query($conn,$query);
              if($i>0){
                while($row = $info->fetch_assoc())
                {
                  if((date("H:i",strtotime($row['Time'])) == $_POST['time']))
                  {
                   echo "<script>alert('Time slot taken! try another slot');</script>";
                  }
                }
              }
                else
                  {
                   $Data = mysqli_query($conn,"INSERT INTO booking(name,address,phone,service,brand,model,Time,Date) VALUES('$_POST[name]','$_POST[Address]','$_POST[phone]','$_POST[service]','$_POST[brand]','$_POST[Model]','$_POST[time]','$_POST[date]')");
                    if($Data)
                      echo "<script> alert('Booking confirmed');</script>";
                    else
                      echo "<script> alert('Error plz try again');</script>";
                  }
              

}
  ?>
    
    
</body>
</html>    