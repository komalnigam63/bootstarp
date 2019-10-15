<?php
include '../conn.php';
if(isset($_POST)){
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

	$response_array['status'] = '200';
	$response_array['message'] = 'New record created successfully';
    echo json_encode($response_array);

} else {

	$response_array['status'] = '201';
	$response_array['message'] = "Error: " . $sql . "<br>" . $conn->error;
    echo json_encode($response_array);
    
  
}
}
?>
