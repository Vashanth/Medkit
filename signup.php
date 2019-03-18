
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{		
include('connect.php');
$Name=$_POST['name'];
$Password=$_POST['password'];
$Email=$_POST['email'];
$Message=$_POST['message'];
$Gender=$_POST['gender'];
$Blood=$_POST['blood'];

if($Name!='')
{
$sql = "INSERT INTO tab1 VALUES ('$Name','$Email','$Password','$Message','$Gender','$Blood')";
if ($conn->query($sql) === TRUE) {
	echo "<script>window.alert('Account Created')</script>";
    echo "Account created successfully";
    header("location:/hci-interface/main.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("location:/hci-interface/signup.html");
}
}
$conn->close();
}
?>