<?php
include 'conn.php';
 if(isset($_POST['submit'])){
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email= $_POST['email'];
 $password= $_POST['password'];
 $contact_number = $_POST['contact_number'];
 $dob = $_POST['dob'];
 $address=$_POST['address'];
 $pincode=$_POST['pincode'];
 $state=$_POST['state'];

//firstname,lastname,email,password,contacta_number,dob,address,pincode,state
 $sql = "UPDATE creataccount SET firstname='".$firstname."',lastname='".$lastname."',email='".$email."',password='".$password."',contact_number='".$contact_number."',dob='".$dob."',address='".$address."',pincode='".$pincode."',state='".$state."' WHERE id=".$_REQUEST['id'];
 if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
 }

$sql = "SELECT * from creataccount where id=".$_REQUEST['id'];
$result = $conn->query($sql);

$row=mysqli_fetch_row($result);

//echo "<pre>";
//print_r($row);

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
            </form>

        </body>
         <a href="studentregistration.php">Back</a>
        </html>
        
