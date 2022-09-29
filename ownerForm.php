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
            <li><a href="OwnerIndex.php">Home</a></li>
            <li><a class = "active">New Service</a></li>
            <li style="float:right"><a href="ownerLogin.php">Logout</a></li>
        </ul>
    </div>
    <div>
    	<center>
    		<form method="post">
    		<h1>Enter the Service details</h1>
    		<table>
    			<tr>
    				<td>
    					Service Name
    				</td>
    				<td>
    					<input type="text" name="service" required>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					Cost per hour
    				</td>
    				<td>
    					<input type="number" name="cost" required>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					Available Time
    				</td>
    				<td>
    					<input type="time" name="time" required>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					Available Date
    				</td>
    				<td>
    					<input type="Date" name="date" required>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					Available Day
    				</td>
    				<td>
    					<input type="text" name="day" required>
    				</td>
    			</tr><tr>
    				<td>
    					<input type="submit" name="add" required>
    				</td>
    			</tr>
    		</table>
    	</form>
    	</center>
    	
    </div>
    <?php
    	include 'db.php';
    	if(isset($_POST['add'])){
    		$service = $_POST['service'];
    		$cost = $_POST['cost'];
    		$time = $_POST['time'];
    		$date = $_POST['date'];
    		$day = $_POST['day'];
    		$query = "insert into services (ServiceName,Cost,Time,Date,Day) values ('$service', '$cost', '$time', '$date', '$day')";
		$Data = mysqli_query($conn,$query);
		if($Data){
			echo "Added successfully";
		}
		else
		{
			echo "Error";
		}
    	}
    ?>
</body>
</html>