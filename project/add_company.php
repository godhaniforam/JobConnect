<?php

session_start();

if(!isset($_SESSION["name"])){
   header("location: sign up.php");
}

?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <style>
     <?php include 'css/c8.css'; ?>
  </style>
</head>

<?php

include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $job_catagory = $_POST['job_catagory'];
  $company_name = $_POST['company_name'];
  $location = $_POST['location'];
  $job_time = $_POST['job_time'];
  $salary_range = $_POST['salary_range'];
  $job_description = $_POST['job_description'];

  // company's logo from form

  $filename = $_FILES["img"]["name"];
  $tem_name = $_FILES["img"]["tmp_name"];
  $folder = "img/company_form_logo/" . $filename;

  move_uploaded_file($tem_name , $folder);

  $q1 = "INSERT INTO `company`(`job_catagory`, `company_name`, `location`, `salary`, `job_time`, `job_description`, `comapny_logo`) VALUES ('$job_catagory','$company_name','$location','$salary_range','$job_time','$job_description','$filename')";

  $result = $con->query($q1);

  if($result){
    header("location: jobs_info.php");
  }
  else{
    echo "Something Want Wrong...<br> Please Try Later...";
    exit;
  }

  

}

?>

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

    <form class="main_form" method="POST" enctype="multipart/form-data" autocomplete="off">
      <br>

      <label for="job_catagory">Job Categories :</label><br>
      <input type="text" id="job_catagory" name="job_catagory" class="input my-2" placeholder="php" required>
      <br><br>

      <label for="company_name">Company Name :</label><br>
      <input type="text" id="company_name" name="company_name" class="input my-2" placeholder="Google" required>
      <br><br>


      <label for="location">Location:</label><br>
      <input type="text" id="location" name="location" class="input my-2" placeholder="Surat" required>
      <br><br>

      <label for="salary_range">Salary Range :</label><br>
      <input type="text" id="salary_range" name="salary_range" class="input my-2" placeholder="$2000-$5000" required>
      <br><br>

      <label for="job_time">Job Time :</label><br>
      <input type="text" id="job_time" name="job_time" class="input my-2" placeholder="Full-Time" required>
      <br><br>

      <label for="job_description">Job Description :</label><br>
      <textarea id="job_description" class="sel2 my-2" name="job_description" cols="51" rows="6" placeholder="job_description" required></textarea>
      <br><br>

      <label for="company_img">Company's Logo :</label><br>
      <input type="file" id="company_img" name="img" class="file my-2" required>
      <br><br>

      <center>

        <button class="arc-btn-retro">Place Job</button>

      </center>
      

    </form>


  </div>

  <div class="footer">

    <br>
    <footer class="text-center text-lg-start f2">
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row my-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <a href="home.php" class="fcompany">
              <h6 class="fw-bold mb-4">
                <img src="img/JobConnect logo.png" class="mx-2" alt="JobConnect" height="70px"><span class="h5">       JobConnect</span>
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
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p>
                <a href="#!" class="text-reset">React</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Laravel</a>
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
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4 mx-5">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Surat , Gujrat , India</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                jobconnect155@gmail.com
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

      $(".naa").mouseenter(function () {
        $(this).css("color", "green");
        $(this).css("background-color", "#0f172a");
      });

      $(".naa").mouseleave(function () {
        $(this).css("color", "white");
      });

    $(".na").mouseenter(function () {
      $(this).css("color", "green");
    });

    $(".na").mouseleave(function () {
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