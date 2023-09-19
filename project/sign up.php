<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign in & Sign up Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/c5.css">
</head>

<?php
// Import 3 PHPMailer library 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['ph_no'];
  $country = $_POST['country'];
  $about = $_POST['about_your_self'];

  // password to hash password converting

  $password = $_POST['password'];
  $hash_pass = password_hash($password , PASSWORD_DEFAULT);

  // user img from form

  $filename = $_FILES["file"]["name"];
  $tem_name = $_FILES["file"]["tmp_name"];
  $folder = "img/user_form_img/" . $filename;

  move_uploaded_file($tem_name , $folder);

  session_start();

  $_SESSION["name"] = $name;
  $_SESSION["password"] = $hash_pass;
  $_SESSION["country"] = $country;
  $_SESSION["phone"] = $phone;
  $_SESSION["email"] = $email;
  $_SESSION["user_img"] = $filename;
  $_SESSION["your_self"] = $about;

  $_SESSION["genrate_otp"] = random_int(1000 , 9999);

  // Mail To User Email For otp

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPSecure = "tls";              
    $mail->SMTPAuth   = true;  
    $mail->SMTPDebug  = 0;                                  
    $mail->Username   = 'jobconnect155@gmail.com';    
    $mail->Password   = 'kokdcmyhojpoqysk';              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('jobconnect155@gmail.com');
    $mail->addAddress($email);     

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = "Account Activation";
    $mail->Body    = '<h2> Hello,'. $name .' <br> Your Account Registration Is Successfully Done! Now Active Your Acount With This otp </h2><b><h1>' . $_SESSION["genrate_otp"] . '</h1></b>';
    
    $send = $mail->send();

    if($send){
        header("location: otp.php");
    }
    else{
        echo "Data could not be sent. Please Try Againe!";

    }

  // End Mail

  }

?>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-up-form" method="POST" enctype="multipart/form-data">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" required>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" require>
          </div>
          <div class="input-field">
            <i class="bi bi-telephone-fill"></i>
            <input type="number" name="ph_no" pattern="[6-9]{1}[0-9]{9}" placeholder="Ph.No" required>
          </div>
          <div class="input-field">
            <i class="bi bi-geo-alt-fill"></i>
            <input type="text" name="country" placeholder="Country" required>
          </div>
          <div class="input-field">
            <i class="bi bi-images"></i><span class="img-text">
              Your Image<input type="file" name="file" style="opacity: 0.5;" required></span>
          </div>
          <div class="input-field">
            <i class="bi bi-text-paragraph"></i>
            <textarea rows="10" cols="200" name="about_your_self" placeholder="About Your Self" required></textarea>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn" value="Sign up">Sign up</button>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Again here ?</h3>
          <p>
            Get Your Space In JobConnect...
          </p><a href="login.php">
          <button class="btn transparent" id="sign-up-btn">
            Login
          </button></a>
        </div>
        <img src="https://i.ibb.co/6HXL6q1/Privacy-policy-rafiki.png" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</body>

</html>