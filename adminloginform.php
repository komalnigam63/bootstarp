<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbName="komal";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
if(isset($_POST['submit'])){
$email= $_POST['email'];
$password= $_POST['password'];
$sql = "INSERT INTO admin_login (`email`,`password`) VALUES ('".$email."','".$password."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

<html>
<head>
	<style type="text/css">
		body {
  background-color: white;
}

h1 {
  color: black;
}

p {
  font-family: verdana;
  font-size: 20px;
}
.btn{padding: 10px;background:lightgray; border-radius: 10px;}


 td {
  padding: 7px;
  text-align: left;    
}
	</style>
</head>
<body>
 <h1>Login</h1>
 <form method="post" name="" action="">
 <table>
 	
 	<tr>
 		<td>Email:</td>
 		<td><input type="email" name="email" class="form-control" placeholder="email" value="" required></td>
 	</tr>
 	<tr>
 		<td>Password:</td>
 		<td><input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password"></td>
 	</tr>
 	<tr>
 		<td><input type="submit" name="submit" value="Login"></td>
 	</tr>
 </table> 
 	
 </form>
</body>
</html>