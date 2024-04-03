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

$sql =  "SELECT * FROM tb_profile";
$result = mysqli_query($conn, $sql);
$datas = array();
if(mysqli_num_rows($result) > 0 ){
    while($row =mysqli_fetch_assoc($result)){
        $datas[] = $row;
    }
}

$sql = "UPDATE tb_coverphotohomepage SET img = '$image', title = '$title' , caption = '$caption' , ToHome = $Tohome WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
    THE COVER PHOTO '. $_FILES["image"]["name"] .' HAS BEEN UPLOADED.</div>';
    header("Location: ../dashboardcontent/ManageElem.php");
  
} else {
  
  
}
?>