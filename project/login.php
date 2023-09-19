<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/c7.css">
</head>

<?php

include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$email = $_POST['email'];
$password = $_POST['password'];

$q1 = "SELECT * FROM `user` WHERE email='".$email."'";

$result = $con->query($q1);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $hash_password = $row['password'];
    $user_name = $row['user_name'];
    $phone = $row['phone_number'];
    $country = $row['country'];
    $user_img = $row['user_img'];
    $your_self = $row['your_self'];
  }

  if(password_verify($password, $hash_password)){
       session_start();
 
       $_SESSION["name"] = $user_name;
       $_SESSION["country"] = $country;
       $_SESSION["phone"] = $phone;
       $_SESSION["email"] = $email;
       $_SESSION["user_img"] = $user_img;
       $_SESSION["your_self"] = $your_self;

       header("location: home.php");
  }
  else{
    echo '<script>alert("Wrong Credential...");</script>';
  }

}
else{
  echo '<script>alert("You Must Sign Up...");</script>';
}


}

?>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-up-form" method="POST">
          <h2 class="title">Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" name="email" placeholder="Email" require>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" require>
          </div>
          <button type="submit" class="btn" value="Sign up">Login</button>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New To Here ?</h3>
          <p>
            Get Your Space In JobConnect...
          </p><a href="sign up.php">
          <button class="btn transparent" id="sign-up-btn">
            Sign Up
          </button></a>
        </div>
        <img src="https://i.ibb.co/nP8H853/Mobile-login-rafiki.png" class="image" alt="" />
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