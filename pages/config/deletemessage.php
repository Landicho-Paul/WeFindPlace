<?php
session_start();
include "dbcon.php";

$id = $_GET['id'];
$sql = "DELETE FROM tb_messages WHERE messageid= '$id'";


if ($conn->query($sql) === TRUE) {
    $_SESSION['mdelete'] = '<div class="alert alert-danger">
    <strong>Success! </strong> Message Successfully Deleted </a>.
  </div>';
    header('Location: ../dashboardcontent/inbox.php');
} else {
    $_SESSION['mdelete'] = '<div class="alert alert-danger">
    <strong>Failed!</strong>Something went wrong , please try again</a>.
  </div>';
    header('Location: ../dashboardcontent/inbox.php');
}

?>
