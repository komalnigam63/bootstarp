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
	<table class="table">
  <h2> table </h2>
  <thead> 
<tr> 
      <th>id</th>
      <th>firstname</th> 
      <th>lastname</th> 
      <th>email</th>
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
 if(isset($_POST['search'])){
$term = $_POST['term'];


$sql = "SELECT * from creataccount where firstname LIKE '"."%".$term."%"."' OR email LIKE '"."%".$term."%"."'"; 
$result = $conn->query($sql);
foreach ($result as $value) { 

  ?>
        <tr> 
    <td><?php echo $value['id']; ?></td> 
    <td><?php echo $value['firstname']; ?> </td> 
    <td><?php echo $value['firstname']; ?> </td> 
    <td><?php echo $value['email']; ?></td>
    <td><?php echo $value['contact_number'];?></td>
    <td><?php echo $value['dob'];?></td>
    <td><?php echo $value['address'];?></td>
    <td><?php echo $value['pincode'];?></td>
    <td><?php echo $value['state'];?></td>
    <td><?php echo $value['reg_date'];?></td>   
    <td><a href="editAccount.php?id=<?php echo $value['id']; ?>">edit</a> | <a href="Delete.php?id=<?php echo $value['id']; ?>">Delete</a></td>
   </tr>

<?php } }?>
       
</tbody>
</div>
</table>
<br>
<a href="gmailaccount.php">Back</a>

</body>
</html>

