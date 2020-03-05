<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

//Creat Connectivity 
$conn = new mysqli_connect($servername, $username, $password,$dbname);

//check connection
if ($conn->connect_error) {

	die("Connection failed: " . mysqli_connect_error());
}
 echo "connection successfully" 


 // Create database


if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$password= $_POST['password'];

$sql = "INSERT INTO test (`firstname`,`lastname`,`email`,`password`) VALUES ('".$firstname."','".$lastname."','".$email."','".$password."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body {
  background-color: white;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
.btn{padding: 10px;background:lightgray; border-radius: 10px;}

.table{
	border: 1px solid;
}
th, td {
  padding: 7px;
  text-align: left;    
}
	</style>
</head>
<body>
	<!-- <?php

//$y = 4;
/*$car =array("bmw","volvo","toyoto" ); 
var_dump($car);*/
 
 /*print "<h2>Hello world</h2>" ;
 print $x + $y;*/
 //echo strrev("Hello world!"); 

?> -->

<h1>Test</h1>
<form method = "post" action="">
	<table>
		<tr>
			<td>Firstname:</td>
			<td><input type= "text" name = "firstname" required ></td>
		</tr>
		<tr>
			<td>Lastname</td>
			<td><input type = "text" name = "lastname" value = "" required="" ></td>
		</tr>
		<tr>
		<td>Email</td>
		<td><input type="email" name="email"  class="form-control" required ></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" id="password" class="form-control" required ></td>
	</tr>
	<tr>
            	<td rowspan ="2"><input class="btn" type = "submit" name = "submit" value = "submit"></td>

            </tr>

	</table>
<table class = "table">
	<div class = "container">
		
		<h2>table</h2>
		<thead>
			<tr>
				<th>firstname</th>
				<th>lastname</th>
				<th>email</th>
				
			</tr>
		</thead>

		<body>
			<?php 
			$sql = "SELECT * FROM test";
			$result = $conn->query($sql);
           foreach ($result as $value) { 

           
			?>
			

			<tr>
				<td><?php echo $value['id'];?></td> 
				<td><?php echo $value['firstname'];?></td> 
				<td><?php echo $value['lastname'];?></td> 
				<td><?php echo $value['email'];?></td> 

			</tr>
			<?php } ?>

			
		</body>
	</div>

</table>

	
</form>

</body>
</html>