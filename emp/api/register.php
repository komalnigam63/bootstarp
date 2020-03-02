<?php
error_reporting(0);
//echo count($_POST); die;
if($_POST['name']!=''){
include '../conn.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$gender= $_POST['gender'];
$date_of_joining= $_POST['date_of_joining'];
$age= $_POST['age'];
$emp_type= $_POST['emp_type'];
$thumb_storage= $_POST['thumb_storage'];

$sql = "INSERT INTO employee_registration (`name`,`email`,`password`,`dob`,`gender`,`date_of_joining`,`age`,`emp_type`,`thumb_storage`) VALUES ('".$name."','".$email."','".$password."','".$dob."','".$gender."','".$date_of_joining."','".$age."','".$emp_type."','".$thumb_storage."')";

if ($conn->query($sql) === TRUE) {

	$response_array['status'] = '200';
	$response_array['message'] = 'New record created successfully';
    echo json_encode($response_array);

} else {

	$response_array['status'] = '201';
	$response_array['message'] = "Error: " . $sql . "<br>" . $conn->error;
    echo json_encode($response_array);
    
  
}
}else{

$response_array['status'] = '201';
        $response_array['message'] = "Something went wrong.";
    echo json_encode($response_array);

}
?>
