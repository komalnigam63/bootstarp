<?php
include '../conn.php';
if(isset($_POST)){
$id = $_POST['id'];
$sql = "select * FROM creataccount WHERE id=".$id;
$result = $conn->query($sql);
$count=mysqli_num_rows($result);
if($count > 0){

$sql = "DELETE FROM creataccount WHERE id=".$id;
if ($conn->query($sql) === TRUE) {
	echo json_encode(array("status"=>"201","message" => "Record deleted successfully."));
    
} else {
    echo json_encode(array("status"=>"201","message" => "Error."));
}

}else{

	echo json_encode(array("status"=>"201","message" => "record not found."));
}


$conn->close();

}
?>