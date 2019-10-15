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
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$password= $_POST['password'];
$contact_number= $_POST['contact_number'];
$dob= $_POST['dob'];
$address= $_POST['address'];
$pincode= $_POST['pincode'];
$state= $_POST['state'];
$sql = "INSERT INTO creataccount (`firstname`,`lastname`,`email`,`password`,`contact_number`,`dob`,`address`,`pincode`,`state`) VALUES ('".$firstname."','".$lastname."','".$email."','".$password."','".$contact_number."','".$dob."','".$address."','".$pincode."','".$state."')";
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
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
.btn{padding: 10px;background:white; border-radius: 10px;}

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
	<h2>gmail account</h2>
	<form method="POST" name="creataccount" action="">
		<table>
			<tr>
				<td>firstname:</td>
				<td><input type="text" name="firstname" value="" required></td>
			</tr>
			<tr>
				<td>lastname:</td>
				<td><input type="text" name="lastname" value="" required></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="email" name="email" value="" required></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="text" name="password" value="" required></td>
			</tr>
			<tr>
				<td>contact_number:</td>
				<td><input type="text" name="contact_number" value="" required></td>
			</tr>
			<tr>
				<td>dob:</td>
				<td><input type="text" name="dob" value="" required></td>
			</tr>
			<tr>
				<td>Address:</td>
                <td><textarea name="address"></textarea> </td>
			</tr>
			<tr>
				<td>pincode:</td>
				<td><input type="text" name="pincode" max="6" min="6" /></td>
			</tr>
			<tr>
				<td>state:</td>
				<td><input type="text" name="state" value="" required></td>
		
            <tr>
            	<td rowspan ="2"><input class="btn" type = "submit" name = "submit" value = "submit"></td>

            </tr>
 	    <table class="table">
    <div class="container">
  <h2>table</h2>
        <thead> 
<tr> 
      <th>id</th>
      <th>First name</th> 
      <th>Last name</th> 
      <th>Email</th>
      <th>contact_number</th> 
      <th>dob</th>
      <th>address</th>
      <th>pincode</th>
      <th>state</th>
      <th>reg_date</th>
      <th>action</th>
    </tr> 
    </thead>
    
    <tbody>

 <?php
$sql = "SELECT * from creataccount";
$result = $conn->query($sql);
foreach ($result as $value) { 

  ?>
    <tr> 
    <td><?php echo $value['id'];?></td> 
    <td><?php echo $value['firstname'];?></td> 
    <td><?php echo $value['lastname'];?></td> 
    <td><?php echo $value['email'];?></td>
    <td><?php echo $value['contact_number'];?></td>
    <td><?php echo $value['dob'];?></td>
    <td><?php echo $value['address'];?></td>
    <td><?php echo $value['pincode'];?></td>
    <td><?php echo $value['state'];?></td>
    <td><?php echo $value['reg_date'];?></td>   
    <td><a href="editAccount.php?id=<?php echo $value['id']; ?>">edit</a> | <a href="Delete.php?id=<?php echo $value['id']; ?>">Delete</a></td>
   </tr>
<?php } ?>
 </div>      
</tbody>
</table>
			
		</table>
	</form>
	<form method="post" action="searchAccount.php" name="myform">   
        Search: <input type="text" name="term" />
        <input type="submit" name="search" value="search" required> 
      </form>
      <br><br><br>

</body>
</html>

