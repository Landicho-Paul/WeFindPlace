<?php
session_start();

include "dbcon.php";

if (isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $send_message = $conn->prepare("INSERT INTO tb_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
  $send_message->bind_param("ssss", $name, $email, $subject, $message);

  if($send_message->execute())
  {
   $_SESSION['send'] = '<div class="alert alert-success">
   <strong>Success!</strong> Message sended successfully</a>.
 </div>';
 header('Location: ../../index.php');
  }
  else 
  {
    $_SESSION['send'] = '<div class="alert alert-danger">
   <strong>Error !</strong> Please try again</a>.
 </div>';
 header('Location: ../../index.php');
  }

}

?>