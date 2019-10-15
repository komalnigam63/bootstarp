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
$username = $_POST['username'];
$email= $_POST['email'];

//username,email
$sql = "UPDATE register SET username ='".$username ."',email='".$email."', WHERE id=".$_REQUEST['id'];
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$sql = "SELECT * from register where id=".$_REQUEST['id'];
$result = $conn->query($sql);

$row=mysqli_fetch_row($result);

//echo "<pre>";
//print_r($row);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">   
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
$(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

</script>
      <br><br><center><form method="post" action="search.php" name="myform">   
        Search: <input type="text" name="term" />
        <input type="submit" name="search" value="search" required> 
      </form></center>
      <br><br>
<body>   
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
               
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                           <table class="table">
    <div class="container">
  <h2>table</h2>
  <thead> 
<tr> 
      <th>id</th>
      <th>username</th>
      <th>email</th> 
      <th>action</th> 
      
    </tr>  

    <tbody>
        <tr>
            <?php
$sql = "SELECT * from register";
$result = $conn->query($sql);
foreach ($result as $value) { 

  ?>
        <tr> 
    <td><?php echo $value['id']; ?></td> 
    <td><?php echo $value['username']; ?> </td> 
    <td><?php echo $value['email']; ?></td> 
    <td><a href="edit.php?id=<?php echo $value['id']; ?>">edit</a> | <a href="delete.php?id=<?php echo $value['id']; ?>">delete</a></td>
      
   </tr>

<?php } ?>
            
    </tbody>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</table>


    </body>
</html>

