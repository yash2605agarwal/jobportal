<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Your Profile</title>
</head>

<body>
<center>
<input type="button" onclick="window.location='index.php'" class="Redirect" value="Home Page"/>
</center>
</body>
</html>
<?php
error_reporting(0);
session_start();

    require 'db.connect.php';
	$con= new mysqli("localhost", "root", "", "jobsportal");
	 echo "Your Profile";
	 $seeker_login_email=$_SESSION['email'];
	 //echo $seeker_login_email;
 
 
$sql = "SELECT * FROM seeker_details where email_id='$seeker_login_email'";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Email ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Gender</th>";
                echo "<th>Maritial Status</th>";
                echo "<th>Mobile Number</th>";
                echo "<th>Address</th>";
                echo "<th>Country</th>";
                echo "<th>State</th>";
                echo "<th>City</th>";
                echo "<th>Pincode</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['email_id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['marriage_status '] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['country'] . "</td>";
                 echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['pincode'] . "</td>";
             

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

 
 
?>
<html>

<head>
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<link rel="stylesheet" href="css/footer_bar.css" type="text/css" />
</head>

<body>
<div align="center" id="footer">
		<div id="footer_menu">		
			 <p>To edit your response kindly email your correct details at xyz@gmail.com</p>
		</div>
		
		 
</div>
</body>
</html>