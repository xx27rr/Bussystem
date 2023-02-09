<?php 
include("db.php");

if (isset($_POST)&!empty($_POST)){
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Phone_number = $_POST['Phone_number'];
$Email_adress = $_POST['Email_adress'];
$username = $_POST['username'];
$Password = $_POST['Password'];
}
{
$sql = "INSERT INTO users_data (Fname , Lname , Phone_number , Email_adress , username , Password) VALUES ('$Fname','$Lname','$Phone_number','$Email_adress','$username','$Password')";
$result = mysqli_query($conn, $sql);

}
?>
hello