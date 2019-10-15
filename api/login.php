<?php
include '../conn.php';
if(isset($_POST)){
$username = $_POST['username'];
$password= $_POST['password'];
$sql = "select * from admin where username='".$username."' and password='".$password."'";
$result = $conn->query($sql);
$rowcount=mysqli_num_rows($result);
//print_r(count($status));die;
if ($rowcount) {
    
   $response_array['status'] = '200';
	$response_array['message'] = 'login successfully';
    echo json_encode($response_array);

} else {
   
    $response_array['status'] = '201';
	$response_array['message'] = 'login not successfully';
    echo json_encode($response_array);

}

}
?>