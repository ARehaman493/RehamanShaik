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
    <style>
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
            <li><a class="active" href="#">Home</a></li>
            <li><a href="ownerForm.php">New Servce</a></li>
            <li style="float:right"><a href="index.php">Logout</a></li>
        </ul>
    </div>
   
<div class="container"> 
  <?php
  include 'db.php';
  $data = mysqli_query($conn,"SELECT * FROM booking");?>
      <form method = "post">
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
      </tr>
      <?php 


  ?>
      <?php while($row = $data ->fetch_assoc()){  ?>
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
      </tr> 
     <?php }?>
    </table>
  </form>
</div>




<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</body>

</html>