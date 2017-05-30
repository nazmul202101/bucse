<?php include("config.php") ?>
<?php 
$name=$_POST["name"];
$username=$_POST["username"];
$eamil=$_POST["email"];
$password=$_POST["password"];
 ?>

<?php 
$sql="INSERT INTO student_info(name,usermane,email,password) VALUES('$name','$username','$eamil','$password')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>