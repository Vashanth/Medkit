<?php
session_start();
include("connect.php");
			$Email=$_POST['emailid'];
			$Password=$_POST['pass'];
			

$sql = "SELECT Blood FROM  tab1 where pwd=(select pwd from tab1 where pwd='".$Password."' and Email='".$Email."')";

$sql2=$conn->query($sql);

if ($sql2->num_rows>0) {

    $_SESSION["status"]="in";
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login successful');
    window.location='./main.html';
    </script>");

}
 
else
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Wrong password or email');
    window.location='./login.html';
    </script>");


}

$conn->close();

?>

