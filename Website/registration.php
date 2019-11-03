<?php
include("./connection.php");

$username = $_POST["username"];
$password = $_POST["password"];
$sql = "INSERT INTO registration VALUES('$username','$password')";
if ($conn->query($sql) === TRUE) {
 header("location:../index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
