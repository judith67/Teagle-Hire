<?php
session_start();
include('./connection.php');
if (isset($_POST['id']) and isset($_POST['pass'])){
$loginid = $_POST['id'];
$logpass = $_POST['pass'];
$query = "SELECT * FROM registration WHERE studentid='$loginid' and password='$logpass'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['loginid'] = $loginid;
header("location:./index.html");
}
else{
header("location:../index.html");
echo "<script> alert('*Invalid Login Credentials.'); </script>";
}
}
?>
