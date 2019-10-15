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
if(isset($_POST['update-submit'])){
$username = $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];

//username,email
$sql = "UPDATE register SET username='".$username."',email='".$email."',password='".$password."' WHERE id=".$_REQUEST['id'];
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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">   
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="style.css">

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
               
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <form id="register-form" method="post" role="form" >
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php echo $row[1]; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?php echo $row[2]; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" value="<?php echo $row[3]; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="update-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="update Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="userlist.php">Back</a>