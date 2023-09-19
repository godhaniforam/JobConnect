<?php

session_start();

if(!isset($_SESSION["name"])){
   header("location: sign up.php");
}

include 'connect.php';



$q1 = "SELECT * FROM `company` WHERE `id`=".$_GET['id']; 

$id = $_GET['id'];
$company_name = $_GET['company_name'];
$comapny_logo = $_GET['comapny_logo'];

$result = $con->query($q1);

if($result){

  if($result->num_rows > 0){

     while($row = $result->fetch_assoc()){
      $job_catagory = $row['job_catagory'];
     }

  }
}
else{
  echo "Somthing Went Wrong!...";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
   $user_name = $_POST['user_name'];
   $user_email = $_POST['user_email'];
   $user_phone = $_POST['user_phone'];
   $user_location = $_POST['user_location'];
   $user_cover_letter = $_POST['user_cover_letter'];

   $filename = $_FILES["file"]["name"];
   $tem_name = $_FILES["file"]["tmp_name"];
   $folder = "img/user_resume/" . $filename;
 
   move_uploaded_file($tem_name , $folder);

   $q2 = "INSERT INTO `user_apply`(`comapny_id`, `company_name`, `company_logo`, `user_name`, `user_email`, `user_phone`, `user_location`, `user_cover_letter`, `user_resume`, `use_apply_time`) VALUES ('$id','$company_name','$comapny_logo','$user_name','$user_email','$user_phone','$user_location','$user_cover_letter','$filename',current_timestamp())";

   $result2 = $con->query($q2);

   if($result2){
    header("location: home.php");
   }
   else{
    echo "Somthing Went Wrong!...<br> Try Againe...";
   }


}
?>


<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $job_catagory ?> Job Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/c3.css">
</head>

<body>


<nav class="navbar navbar-expand-lg">
    <div class="container-fluid"><a href="home.php">
        <img class="navbar-brand" height="70px" src="img/JobConnect logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active mx-2 na" style="color:white;" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 na" style="color:white;" href="jobs_info.php">Jobs & Internships</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle na" style="color:white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Pages
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item naa" style="color:white;" href="your_apply.php">Your Applys</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item naa" style="color:white;" href="contact.php">Contact Us</a></li>
          </ul>
        </li>
        </ul>
        <form class="d-flex">
          <input class="form-control mx-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>

    <a href="user_profile.php">
        <img class="rounded-circle" height="50px" style="margin-right:10px;" src="img/user_form_img/<?php echo $_SESSION["user_img"]?>">
    </a>
    
  </nav>
  <br>

  <div class="form1">

    <form class="main_form" method="POST" enctype="multipart/form-data">
      <br>

      <label>Job Categories :</label><br>
      <input type="text" class="input my-2" value="<?php echo $job_catagory ?>" readonly>
      <br><br>

      <label for="name">Your Name :</label><br>
      <input type="text" id="name" class="input my-2" name="user_name" value="<?php echo $_SESSION["name"] ?>" readonly>
      <br><br>



      <label for="email">Email Address :</label><br>
      <input type="email" id="email" class="input my-2" name="user_email" value="<?php echo $_SESSION["email"] ?>" readonly>
      <br><br>

      <label for="phone">Phone No. :</label><br>
      <input type="tel" maxlength="10" id="phone" class="input my-2" name="user_phone" value="<?php echo $_SESSION["phone"] ?>" readonly>
      <br><br>

      <label for="location">Location:</label><br>
      <select class="my-2 sel" id="location" name="user_location">
        <option selected>Work From Office</option>
        <option>Work From Home</option>
        <option>Remotly</option>
      </select>
      <br><br>

      <label for="cover">Coverting Letter :</label><br>
      <textarea id="cover" name="user_cover_letter" class="sel2 my-2" cols="51" rows="6" placeholder="Message :" required></textarea>
      <br><br>

      <label for="fil">Upload Resume :</label><br>
      <input type="file" id="fil" name="file" class="file my-2" required>
      <br><br>

      <center>

        <button class="arc-btn-retro">Apply Now</button>

      </center>
      

    </form>


  </div>

  <div class="footer">

    <br>
    <!-- Footer -->
    <footer class="text-center text-lg-start">
        <br>
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <a href="home.php" class="fcompany">
                  <h6 class="fw-bold mb-4">
                    <img src="img/JobConnect logo.png" class="mx-2" alt="JobConnect" height="70px"><span class="h5">
                      JobConnect</span>
                  </h6>
                </a>
                <p>Search all the open positions on the web. Get your own personalized
                  salary estimate. Read reviews on over 30000+ companies worldwide.</p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Languages
                </h6>
                <p>
                  <p class="text-reset">Php</p>
                </p>
                <p>
                  <p class="text-reset">jquery</p>
                </p>
                <p>
                  <p class="text-reset">css</p>
                </p>
                <p>
                  <p class="text-reset">Bootstrap</p>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="contact.php" class="text-reset">Contact Us</a>
                </p>
                <p>
                  <a href="your_apply.php" class="text-reset">Your Applys</a>
                </p>
                <p>
                  <a href="jobs_info.php" class="text-reset">Jobs & Internships</a>
                </p>
                <p>
                  <a href="user_profile.php" class="text-reset">Profile</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 mx-5">Contact</h6>
                <p><i class="fas fa-home me-3"></i> Surat , Gujrat , India</p>
                <p emailTo:"jobconnect155@gmail.com">
                  <i class="fas fa-envelope me-3"></i><a style="text-decoration:none; color:white;" href="mailto:jobconnect155@gmail.com">
                  jobconnect155@gmail.com</a>
                </p>
                <p><i class="fas fa-phone me-3"></i> + 91 70167 07102</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © <span id="year"></span> Copyright:
          <a class="text-reset fw-bold fcompany">JobConnect</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->

  </div>

  

  <script>

$(".na").mouseenter(function () {
  $(this).css("color", "green");
});

$(".na").mouseleave(function () {
  $(this).css("color", "white");
});

$(".naa").mouseenter(function () {
  $(this).css("color", "green");
  $(this).css("background-color", "#0f172a");
});

$(".naa").mouseleave(function () {
  $(this).css("color", "white");
});

const year = new Date().getFullYear();
document.getElementById("year").innerHTML = year;

</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>