<?php

session_start();

if(!isset($_SESSION["name"])){
   header("location: sign up.php");
}

?>

<?php

include 'connect.php';

$q1 = "SELECT * FROM `company` WHERE `id`=".$_GET['id'];

$result = $con->query($q1);

if($result){

  if($result->num_rows > 0){

     while($row = $result->fetch_assoc()){
      $id = $row['id'];
      $job_catagory = $row['job_catagory'];
      $company_name = $row['company_name'];
      $location = $row['location'];
      $salary = $row['salary'];
      $job_time = $row['job_time'];
      $comapny_logo = $row['comapny_logo'];
      $job_description = $row['job_description'];
     }

  }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   header("location: job_form.php?id=$id&company_name=$company_name&comapny_logo=$comapny_logo");
}
?>


<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $job_catagory ?> Job Details</title>
  <link rel="icon" href="img/company_form_logo/<?php echo $comapny_logo?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/c2.css">
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

      <div class="card mx-4 my-4 sticky-card" style="width: 350px; box-shadow: 0px 0px 1px 0px white;">
        <span><img src="img/company_form_logo/<?php echo $comapny_logo?>" class="image" height="70px" width="70px"
            style="display: inline; box-shadow: 0px 0px 1px 0px white;">
          <h3 style="display: inline; margin-left: 20px; color:white"><?php echo $company_name ?></h3>
          <br><br>
          <h5 class="cbody mx-2"><?php echo $job_catagory ?></h5><br>
          <img src="img/map-marker.svg" class="mx-2" height="20px" width="20px"><?php echo $location ?>
        </span>
      </div>

    </div>

    <div class="col-8 my-5">
      <h2>Job Description:</h2>
      <br>
      <h6 style="color:#94A3B4; font-style: italic; margin-right: 50px;"><?php echo $job_description ?></h6>

      <br>
      <br>


      <h2>Responsibilities and Duties:</h2>
      <br>
      <h6 style="color:#94A3B4;">
        <pre class="desc h6">
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Building reusable code and libraries for future use<br>
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Optimization of the application for maximum speed and scalability<br>
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Implementation of security and data protection<br>
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Design and implementation of data storage solutions<br>
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Integration of user-facing elements developed by a front-end developers <br> with server side logic<br>

      </pre>
      </h6>

      <h2>Required Experience, Skills and Qualifications:</h2>
      <br>
      <h6 style="color:#94A3B4;">
        <pre class="desc h6">
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Building reusable code and libraries for future use good understanding of SQL<br> and Relational Databases, specifically Microsoft SQL Server.<br>
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Good understanding of object-oriented programming.<br>
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Good understanding of concurrent programming.<br>
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Sound knowledge of application architecture and design.<br>
<img src="img/arrow-right.svg" style="display: inline;" height="20px"> Excellent problem solving and analytical skills. <br>

      </pre>
      </h6>

      <form method="POST">
        <button class="arc-btn-retro">Apply Now</button>
      </form>
     
    </div>

  </div>

  <br>
  <br>

  <center>

    <div class="card ecard1">
      <div class="card-body">
        <h5 class="card-title">Explore a job now!</h5>
        <p class="card-text text-secondary">Search all the open positions on the web. Get your own personalized
          salary<br> estimate. Read reviews on over 30000+ companies worldwide.</p>
        <a href="jobs_info.php"><button class="arc-btn-retro">Explore Now</button></a>
      </div>
    </div>

  </center>

  <br>
  <br><br>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>