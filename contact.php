<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="slideshow.css">

    <title>LEGEND'S LAPTOP SERVICE</title>
    <style>
    form {
        border: 3px solid #f1f1f1;
        width: 20%;
        margin: auto;
    }

    /* Full-width inputs */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Add a hover effect for buttons */
    button:hover {
        opacity: 0.8;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

   
    </style>
</head>

<body style="background: linear-gradient(45deg, greenyellow, dodgerblue);">
    <div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="about.html">About us</a></li>
            <li><a href="clientLogin.php">Client Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="clientslot.php">Check Slot</a></li>
            <li style="float:right"><a href="ownerLogin.php">Login</a></li>

        </ul>
    </div>
    <br>

 <form method="post">
    <h3 style="text-align: center;">Contact Us</h3>
    <div class="container">
        <label for="uname"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="uname" required>

        <label for="mail"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="mail" required>

        <label for="message"><b>Message</b></label>
        <textarea placeholder="Message" name="message"></textarea><br><br>

        <label for="ph"><b>Phone Number</b></label>
        <input type="text" placeholder="Enter Phone Number" name="ph" required>

        <button type="submit" name= "submit">Login</button>
    </div>
</form>



<?php
include 'db.php';
    if(isset($_POST['submit']))
    {
        $name = $_POST['uname'];
        $email = $_POST['mail'];
        $ph = $_POST['ph'];
        $ms = $_POST['message'];
        $query = "insert into contact(name,email,phone,message)values('$name','$email','$ph','$ms')";
        $Data = $conn->query($query);

        if($Data){
            ?>
            <script type="text/javascript"> alert ("Thanks for contacting us");</script>
            <?php
        }
    }


?>
    

</body>

</html>