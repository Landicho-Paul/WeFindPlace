<?php
session_start();
include "dbcon.php";


if (isset($_POST['submit']))
{
    $username = $_POST['name'];
    $pass = $_POST['pass'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "INSERT INTO tb_sellerinfo (name, country, city, barangay, number, email, pass)
      VALUES ('$username', '$country', '$city', '$barangay', '$number' , '$email', '$pass')";
      
      if ($conn->query($sql) === TRUE) {
        header("Location: ../../index.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
}

?>