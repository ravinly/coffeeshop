<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$address=$_POST["address"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO info (name,phone,email,address)
VALUES ('$name', '$phone', '$email','$address')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  
echo "<script>alert('YOUR ORDER HAS BEEN PLACED.')</script>";
echo "<script>window.location = '/wad/index.html'</script>";

?>