<?php
if(isset($_POST)){
include '../../conn.php';
$json = $_POST['data'];
//$arrData = json_decode($data, true);

/*
$json = '{
    "addresses": [
        {
            
            "name": "hcl",
            "email": "B86",
            "password": "noida",
            "phone": "noida"
       
        },
        {
            
            "name": "hcl",
            "email": "B86",
            "password": "noida",
            "phone": "noida"
        }
        
    ],
    "status": "success",
    "message": "listing sucessful!"
}';*/

$obj = json_decode($json, true);

//print_r($obj);

foreach ($obj as $key => $value) {

	foreach ($value as $key => $value) {

$name = $value['name'];
$email= $value['email'];
$password= $value['password'];
$phone= $value['phone'];

$sql = "INSERT INTO employee (`name`,`email`,`password`,`phone`) VALUES ('".$name."','".$email."','".$password."','".$phone."')";

$result = $conn->query($sql);
//print_r($result);




	}
	
	


}
if ($result) {

	$response_array['status'] = '200';
	$response_array['message'] = 'New record created successfully';
    echo json_encode($response_array);
	# code...
}else{
    $response_array['status'] = '201';
	$response_array['message'] = 'New record not created';
    echo json_encode($response_array);
}
}
?>
