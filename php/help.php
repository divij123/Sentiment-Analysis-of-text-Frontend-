<?php
session_start();
require_once("db.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/PHPMailer.php'; 
require '../PHPMailer-master/src/Exception.php'; 



if (isset($_POST['sub'])) {
  $name = $_POST['cause'];
  $email = $_POST['ngoname'];
  $message = $_POST['message'];

  $sql = "INSERT INTO help (cause, ngoname, message) VALUES ('$name','$email','$message')";
      

    if (mysqli_query($conn, $sql)) {
     $mail = new PHPMailer(true);                             
   

      try {
        
          $mail->setFrom('contact@hindtowardschange.com', 'HindTowardsChange');
          $mail->addAddress($_SESSION['Email']);
          $mail->addReplyTo('contact@hindtowardschange.com', 'HindTowardsChange');

         
          $mail->isHTML(true);                                
          $mail->Subject = 'New help request';
          $mail->Body    = "<table border=\"1px solid black\"> <tr> <th style=\"text-align:left;padding:10px\">Cause</th> <td style=\"text-align:left;padding:10px\">{$_POST['cause']}</td> </tr> <tr> <th style=\"text-align:left;padding:10px\">NGO Name</th> <td style=\"text-align:left;padding:10px\">{$_POST['ngoname']}</td> </tr> <tr> <th style=\"text-align:left;padding:10px\">Message</th> <td style=\"text-align:left;padding:10px\">{$_POST['message']}</td> </tr> </table>";
          $mail->AltBody = "Cause: {$_POST['cause']}\nNGO Name: {$_POST['ngoname']}\nMessage: {$_POST['message']}\n";

          $mail->send();
          
/*          echo 'Message has been sent';
*/
          echo "<script>window.open('../index.html', '_self')</script>";

      } catch (Exception $e) {
          echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      }
     http_response_code(200);
     echo "New record created successfully";
    } else {
     http_response_code(400);
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

}

?>
