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
  <style>
   .table{

  border: 1px solid black;
 
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
      <th>username</th> 
      <th>email</th> 
      
    </tr> 
    </thead>
    
    <tbody>

 <?php
 if(isset($_POST['search'])){
$term = $_POST['term'];


$sql = "SELECT * from register where username LIKE '"."%".$term."%"."' OR email LIKE '"."%".$term."%"."'"; 
$result = $conn->query($sql);
foreach ($result as $value) { 

  ?>
        <tr> 
    <td><?php echo $value['id']; ?></td> 
    <td><?php echo $value['username']; ?> </td> 
    <td><?php echo $value['email']; ?></td> 
    <td><a href="edit.php?id=<?php echo $value['id']; ?>">edit</a> | <a href="delete.php?id=<?php echo $value['id']; ?>">delete</a></td>   
   </tr>

<?php } }?>
       
</tbody>
</div>
</table>
<br>
<a href="userlist.php">Back</a>

</body>
</html>

