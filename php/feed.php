<?php

require_once("db.php");
 session_start();


        if (isset($_POST['sub']))
        {
            $target = "userPhoto/";    
            $name = $_SESSION['Name'];
            $Photo=$_FILES['photo']['name'];
            $message = mysqli_real_escape_string($conn,$_POST['message']);
            $target1 = $target.$name.basename($_FILES['photo']['name']);
            $userPhoto = $name.$_FILES['photo']['name'];
            $status = move_uploaded_file($_FILES['photo']['tmp_name'],$target1);
            $query = "insert into feed (`message`, `photo`) values ('$message','$userPhoto')";
            $result = mysqli_query($conn, $query);
            if ($result)
            {

                echo "<script>window.open('dashboard.php', '_self')</script>";
               /*$from = "divij.tripathi4@gmail.com";
               $subject = "Welcome";
               $message = "Welcome to our portal";
               mail($email, $subject, $message, $from);*/
            }
                
        mysqli_close();
    }
    ?>
