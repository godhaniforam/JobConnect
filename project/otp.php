<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Authentication otp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <style>
     <?php include 'css/c6.css'; ?>
  </style>

</head>

<?php 

include 'connect.php';

session_start();

$name = $_SESSION["name"]; 
$hash_pass = $_SESSION["password"];
$country = $_SESSION["country"];
$phone = $_SESSION["phone"];
$email = $_SESSION["email"];
$filename = $_SESSION["user_img"];
$about = $_SESSION["your_self"];

 echo "<script>
  const email ='".$email.
 "';</script>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $opt1 = $_POST['otp1'];
  $opt2 = $_POST['otp2'];
  $opt3 = $_POST['otp3'];
  $opt4 = $_POST['otp4'];

  $final_otp = $opt1.$opt2.$opt3.$opt4;

  if($final_otp == $_SESSION["genrate_otp"]){

    $q1 = "INSERT INTO `user`(`user_name`, `password`, `phone_number`, `email`, `country`, `user_img`, `your_self`) VALUES ('$name' , '$hash_pass' , '$phone' , '$email' , '$country' , '$filename' , '$about')";

    $result = $con->query($q1);

    if(!$result){
      echo "Something Want Wrong...<br> Please Try Later...";
    }

    header("location: home.php");
  }
  else{
     echo '<div class="alert alert-danger fade show" role="alert"><strong> AUTHENTICATION CODE WRONG! </strong> Please Try Again.. </div>"';
  }
}

?>

<body>
  <center>

  <section data-id="notification" class="mt-4 mx-4"></section>



    <form class="form mt-5" method="POST" autocomplete="off">

      <div class="info">
        <span class="title">Two-Factor Verification</span>
        <p class="description">Enter the two-factor authentication code provided by the authenticator</p>
      </div>
      <div class="input-fields">
        <input maxlength="1" class="in" type="tel" name="otp1" placeholder="">
        <input maxlength="1" class="in" type="tel"  name="otp2" placeholder="">
        <input maxlength="1" class="in" type="tel" name="otp3" placeholder="">
        <input maxlength="1" class="in" type="tel" name="otp4" placeholder="">
      </div>

      <div class="action-btns">
        <button type="submit" class="verify">Verify</button>
        <button type="reset" class="clear">Clear</button>
      </div>

    </form>
  </center>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <script>

function notification(data){
    $( "[data-id=notification]" ).append( data ).delay(5000).fadeOut(400); // I've tried adding .dialog('close')
    $('#noti').alert('close');
  }

    notification('<div class="alert alert-success fade show" role="alert">We Send <strong>OTP</strong> On '+ email +'</div>');


    </script>
    
</body>

</html>