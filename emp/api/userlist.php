<?php

include '../conn.php';
$sql = "select * from creataccount";
$result = $conn->query($sql);
$rowcount=mysqli_num_rows($result);
$rows=mysqli_fetch_all($result);
//print_r($rows);die;
$list_item=array();
$list_arr["records"]=array();
foreach ($rows as $value) {
//echo "<pre>";
//print_r($value);die;
	$list_item['id'] = $value[0];
	$list_item['name'] = $value[1];
	$list_item['email'] = $value[2];
 
    array_push($list_arr["records"], $list_item);
	
}

if ($rowcount) {
   
$value = array("status"=>"200","message" => "user list found.",$list_arr); 

    echo json_encode($value);

} else {
   
    echo json_encode(array("status"=>"201","message" => "user list not found."),$list_arr);

}

?>