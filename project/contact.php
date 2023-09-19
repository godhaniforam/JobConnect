<?php

include 'connect.php';

session_start();

$user_email = $_SESSION["email"];
$user_name = $_SESSION["name"];

if($_SERVER['REQUEST_METHOD'] == "POST"){

  $subject = $_POST['question'];
  $comment = $_POST['comment'];

  $q1 = "INSERT INTO `query`(`user_email`, `user_name`, `subject`, `comment`) VALUES ('$user_email','$user_name','$subject','$comment')";

    $result = $con->query($q1);

    if(!$result){
      echo "Something Want Wrong...<br> Please Try Later...";
    }

}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="icon" href="img/JobConnect logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/c11.css">
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

      <div class="row">

        <div class="col">
    
          <img src="img/contact.svg" class="mx-5" height="700px" width="600px">
    
        </div>

        <div class="form-container col mx-5 my-1">
          <h2 class="h2">Get in touch !</h2>
          <form class="form" method="POST">
            <div class="input-group" style="display: inline;">
              <label for="keyword" class="my-2">Your Name:</label>
              <input type="text" class="my-2" name="name" id="keyword" value="<?php echo $_SESSION["name"]?>" readonly>
            </div>
            <div class="input-group">
              <label for="location" class="my-2">Your Email:</label>
              <input type="text" class="my-2" name="email" id="location" value="<?php echo $_SESSION["email"]?>" readonly>
            </div>
            <div class="input-group">
              <label for="jobtype" class="my-2">Your Question:</label>
              <input type="text" class="my-2" name="question" id="jobtype" placeholder="Subject:" required>
            </div>
            <div class="input-group">
              <label for="jobtype" class="my-2">Your Comment:</label>
              <textarea class="my-2 te" name="comment" id="jobtype" cols="70" rows="6" placeholder="Message:" required></textarea>
            </div>
            <button class="sign">Send Message</button>
          </form>
        </div>    
    </div>
        <br>
        <br>
        <br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>