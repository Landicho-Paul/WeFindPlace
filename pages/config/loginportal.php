<?php
session_start();
include "dbcon.php";


if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // Using prepared statements to prevent SQL injection
    $sql = "SELECT username, pass, verified, user_id FROM tb_userdata WHERE username = ? AND  pass = BINARY ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['user_id'];

        if(strpos($username, "@student"))
        {
            if($row['verified'] == 0)
            {
                $_SESSION['status'] = "pending";
                header("Location: ../login.php");
              
                
            }
            else
            {
                $_SESSION['status'] = $id;
                header("Location:  ../usercontent/userdashboard.php");
            }
        }
        else if(strpos($username, "@admin"))
        {
            $_SESSION['status'] = "admin";
            header("Location: ../dashboard/dashboard.php");
          
        }
    } else {
        // Display danger alert if login fails
        $_SESSION['status'] = "error";
        header("Location: ../login.php");
        
    }
    $stmt->close();
}

?>