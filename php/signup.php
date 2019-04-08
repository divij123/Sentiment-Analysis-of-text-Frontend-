<?php

require_once("db.php");

     if (isset($_POST['sub']))
        {
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $number = mysqli_real_escape_string($conn,$_POST['number']);
            $ngoname = mysqli_real_escape_string($conn,$_POST['ngoname']);
            $cause = mysqli_real_escape_string($conn,$_POST['cause']);
            $pass = mysqli_real_escape_string($conn,$_POST['pass']);
            $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
            $key = md5($pass);
            if(strlen($pass)<6)
            {
                echo "<script>alert ('Password must be greater then 6 latters')</script>";
           exit();
            }
            if ($pass==$cpass)
            {
               $query = "select * from registration where email = '$email' ";
            $res = mysqli_query($conn, $query);
            $check = mysqli_num_rows($res);
            if ($check==1)
            {
                echo "<script>alert ('Already Registered!!')</script>";
           exit();
            }
      else{
            $query = "insert into registration (`name`, `email` , `phone` , `ngoname` , `cause` , `password`) values ('$name', '$email', '$number','$ngoname','$cause', '$key')";
            $result = mysqli_query($conn, $query);
            if ($result)
            {
                echo "<script>alert('New User Registered!')</script>";
                echo "<script>window.open('../index.html', '_self')</script>";
             
            }
        }
      }
        else {
            echo "<script>alert ('Password does not match!!')</script>";
           exit();
        }
      
    
        mysqli_close($result);
    }
?>