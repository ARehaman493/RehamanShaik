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
#candidates{
        font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
        border-collapse: collapse;
        width:100%;
      }
      #candidates td,#candidates th{
        border:1px solid #ddd;
        padding:8px;
      }
      #candidates tr:nth-child(even){background-color: #f2f2f2;}
      #candidates tr:hover{background-color: #ddd;}
      #candidates th{
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color:white;
      }
      tr,td{
        background-color: white;
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
    <b><label for="phone">Phone number</b><font color="red">*</font></label>
    <input type="numeric" name="phone" maxlength="10" required="required" id="phone">
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
        $query = "SELECT * FROM booking where name = '$_POST[name]' and phone = '$_POST[phone]';";

        $info = mysqli_query($conn,$query); ?>
        <table id="candidates">
      <tr>
        <th>S.NO</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Service</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Time</th>
        <th>Date</th>
        <th>Update</th>
      </tr>
      <?php while($row = $info ->fetch_assoc()){  ?>
      <tr>
        <td><?php echo $row['Sno']; ?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['service'];?></td>
        <td><?php echo $row['brand'];?></td>
        <td><?php echo $row['model'];?></td>
        <td><?php echo date("H:ia",strtotime($row['Time']));?></td>
        <td><?php echo $row['Date'];?></td>
        <td><a href="update.php"><input type="submit" value="Update"></a></td>
      </tr> 
     <?php 


   }





 }
 ?>
    </table>

    
    
</body>
</html>    