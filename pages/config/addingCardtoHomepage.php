<?php
session_start();
include "dbcon.php";


$image = $_POST['img'];
$title = $_POST['title'];
$caption = $_POST['caption'];
$id = $_POST['id'];
$Tohome = $_POST['tohome'];

if($Tohome == 0){
  $Tohome = 1;
}else{
  $Tohome = 0;

}
$sql = "UPDATE tb_cardHomepage SET img = '$image', title = '$title' , ammount = '$caption' , ToHome = $Tohome WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
    THE FILE '. $_FILES["image"]["name"] .' HAS BEEN UPLOADED.</div>';
    header("Location: ../dashboard/ManageElem.php");
  
} else {
  
  
}



?>
