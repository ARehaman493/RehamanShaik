<head>
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

    /* The "Forgot password" text */
    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
    }
    </style>
</head>



<form method="post">
    <h3 style="text-align: center;">Owner Login</h3>
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" name= "submit">Login</button>
    </div>
</form>



<?php
include 'db.php';
    if(isset($_POST['submit']))
    {
        $username = $_POST['uname'];
        $password = $_POST['psw'];
        $query = "select * from ologin";
        $Data = $conn->query($query);
        if ($Data->num_rows > 0) {
            while ($row = $Data->fetch_assoc()) {
                if($username == $row['username'] && $password == $row['password'])
                {
                    ?>
                    <script> alert("Login Successfull!");
                    window.location.href = "ownerIndex.php";</script>
                    <?php
                }
                else
                {
                    ?>
                    <script> alert("Login Failed!");</script>
                    <?php
                }
            }
        }

    }


?>