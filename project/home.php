<?php

session_start();

if(!isset($_SESSION["name"])){
   header("location: sign up.php");
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $keyword = $_POST['keyword'];
  $location = $_POST['location'];
  $jobtype = $_POST['jobtype'];

  header("location: jobs_info.php?keyword=$keyword&location=$location&jobtype=$jobtype");
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JobConnect - Jobs find you</title>
  <link rel="icon" href="img/JobConnect logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/c1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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

  <div class="d1 text-center">
    <img class="fesbook image" src="img/media/facebook-logo.png" height="50px" width="50px" alt="facebook-logo">
  </div>
  <br>
  <br>

  <div class="d-inline">

    <img class="google image" src="img/media/google-logo.png" height="50px" width="50px" alt="google-logo">

    <img class="android image" src="img/media/android.png" height="50px" width="50px" alt="android-logo">


    <p class="text-center p1">
      Join us & <span style="color:green;">Explore</span><br>
      <span style="color:green">Thousands</span> of Jobs
    </p>

    <p class="p2">Find Jobs, Employment & Career Opportunities. Some of the companies <br> we've helped recruit
      excellent applicants over the years.</p>

    <img class="lenovo image" src="img/media/lenovo-logo.png" height="50px" width="50px" alt="lenovo-logo">

    <img class="linkedin image" src="img/media/linkedin.png" height="50px" width="50px" alt="linkedin-logo">
  </div>

  <br>
  <br>

  <img class="snapchat image" src="img/media/snapchat.png" height="50px" width="50px" alt="snaapchat-logo">


  <br>
  <br>
  <br>
  <br>


  <div class="row">

    <div class="form-container col mx-5 my-1">
      <h2 class="">Find Your Expected Job</h2>
      <h6 style="color:#94A3B4;" class="card-text">Find Jobs, Employment & Career Opportunities. Some of the companies
        we've helped recruit excellent applicants over the years.</h6>
      <form class="form" method="POST">
        <div class="input-group" style="display: inline;">
          <label for="keyword" class="my-2">Search:</label>
          <input type="text" class="my-2" name="keyword" id="keyword" placeholder="Search Your Keyword  Ex. PHP , JAVA">
        </div>
        <div class="input-group">
          <label for="location" class="my-2">Location:</label>
          <input type="text" class="my-2" name="location" id="location" placeholder="Your City  Ex. Surat , Rajkot">
        </div>
        <div class="input-group">
          <label for="jobtype" class="my-2">Job Type:</label>
          <input type="text" class="my-2" name="jobtype" id="jobtype"
            placeholder="Job Type  Ex. Full Time , Internship">
        </div>
        <button class="sign">Search</button>
      </form>
    </div>


    <div class="col">

      <img src="img/woman_working_2.svg" class="mx-5" height="500px">

    </div>


    <br>
    <br>
    <br>
    <br>

    <div class="d2">

      <center>
        <h2 class="cent1">How it's Work?</h2>
        <br>
        <h6 style="color:#94A3B4;">Search all the open positions on the web. Get your own personalized salary <br>
          estimate. Read reviews on over 30000+ companies worldwide.</h6>
      </center>

      <br>
      <br>
      <br>
      <br>

      <div class="row">

        <div class="col d-inline c1">
          <div class="card c3card">
            <div class="card-info">
              <div class="card-img">
                <img src="img/analysis.svg" id="ima1">
              </div>
              <br>
              <div class="card-title">Create Account</div>
              <br>
              <h5 class="ct1 text-center">The phrasal sequence of the is now so that many campaign and benefit</h5>
            </div>
          </div>
        </div>

        <div class="col d-inline c2">
          <div class="card c3card">
            <div class="card-info">
              <div class="card-img">
                <img src="img/user.svg" id="ima1">
              </div>
              <br>
              <div class="card-title">Complete Your Profile</div>
              <br>
              <h5 class="ct1 text-center">The phrasal sequence of the is now so that many campaign and benefit</h5>
            </div>
          </div>
        </div>

        <div class="col d-inline c3">
          <div class="card c3card">
            <div class="card-info">
              <div class="card-img">
                <img src="img/code-branch.svg" id="ima1">
              </div>
              <br>
              <div class="card-title">Apply Job or Hire</div>
              <br>
              <h5 class="ct1 text-center">The phrasal sequence of the is now so that many campaign and benefit</h5>
            </div>
          </div>
        </div>

      </div>

      <br>
      <br>

      <div class="row">

        <div class="col">
          <div class="parent">
            <img class="image1" src="img/ab01.jpg">
            <img class="image2" src="img/ab02.jpg">
          </div>
        </div>

        <div class="col">
          <br>
          <br>
          <h2>Millions of jobs.<br>
            Find the one that's right for you.</h2>
          <br>
          <h6 style="color:#94A3B4;">Search all the open positions on the web. Get your own personalized salary <br>
            estimate. Read reviews on over 30000+ companies worldwide.</h6>
          <br>
          <img src="img/check-circle.svg" style="display: inline;" height="20px">
          <h6 class="mx-2 subsen">Create your own skin to match your brand</h6><br><br>
          <img src="img/check-circle.svg" style="display: inline;" height="20px">
          <h6 class="mx-2 subsen">Our Talented & Experienced Marketing Agency</h6><br><br>
          <img src="img/check-circle.svg" style="display: inline;" height="20px">
          <h6 class="mx-2 subsen">Digital Marketing Solutions for Tomorrow</h6><br><br><br>
          <a href="contact.php" style="text-decoration:none;color:white;"><button class="buttone"> Get in touch
          </button></a>
        </div>

      </div>

      <br>
      <br>
      <br>
      <br>

      <div class="row">
        <div class="col mx-3">
          <br>
          <br>
          <h2>Find Best Companies.</h2>
          <br>
          <h6 style="color:#94A3B4;">Search all the open positions on the web. Get your own personalized salary <br>
            estimate. Read reviews on over 30000+ companies worldwide.</h6>
          <br>
          <img src="img/media/circle-logo.png" height="50px" width="50px" class="image mx-4 ">
          <img src="img/media/facebook-logo.png" height="50px" width="50px" style="margin-left: 250px;" class="image">
          <br>
          <img src="img/media/android.png" height="50px" width="50px" style="margin-left:200px;" class="image my-4">
          <img src="img/media/linkedin.png" height="50px" width="50px" style="margin-left: 200px;" class="image">
          <br>
          <img src="img/media/google-logo.png" height="50px" width="50px" class="image mx-4 ">
          <img src="img/media/lenovo-logo.png" height="50px" width="50px" style="margin-left: 250px;" class="image">
          <br>
          <img src="img/media/snapchat.png" height="50px" width="50px" style="margin-left:200px;" class="image my-4">
          <img src="img/media/skype.png" height="50px" width="50px" style="margin-left: 200px;" class="image">
          <br>
          <img src="img/media/whatsapp.png" height="50px" width="50px" class="image mx-4 ">
          <img src="img/media/telegram.png" height="50px" width="50px" style="margin-left: 250px;" class="image">
          <br>
        </div>

        <div class="col">
          <div class="parent">
            <img class="image3" src="img/1.jpg">
            <img class="image4" src="img/2.jpg">
          </div>
        </div>

      </div>

      <br>
      <br>
      <br>

    </div>


    <div class="d3">
      <center>
        <br>
        <br>
        <br>
        <h2>Popular Jobs</h2>
        <h6 style="color:#94A3B4;">Search all the open positions on the web. Get your own personalized salary <br>
          estimate. Read reviews on over 30000+ companies worldwide.</h6>
      </center>


      <br>
      <br>


      
      <div class="row">

  <?php

  include 'connect.php';

  $q1 = "SELECT * FROM `company` ORDER BY RAND() LIMIT 6";

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


         echo '
         <div class="col mx-3 my-4">
         <a href="job_details.php?id='.$id.'" class="linktext">
         <div class="card c11" style="width: 350px;">
           <span><img src="img/company_form_logo/'.$comapny_logo.'" class="image border-0 rounded-circle" height="50px" width="50px"
               style="display: inline; box-shadow: 0px 0px 2px 0px white;"><br>
             <h3 style=" margin-top: 10px; color:white">'.$company_name.'</h3>
             <h5 class="cbody">'.$job_catagory.'</h5>
             <div class="row">
               <div class="col">
                 <span>
                   <button class="button" id="first">
                     <p class="txt">'.$job_time.'</p>
                   </button>
                 </span>
               </div>
               <div class="col">
                 <span>
                   <button class="button" id="second">
                     <p class="txt">$ '.$salary.'</p>
                   </button>
                 </span>
               </div>
             </div>
           </span>
           <span>
             <button class="button" id="three">
               <img src="img/map-marker.svg" class="mx-2 d-inline" height="20px" width="20px">
               <p class="txt">'.$location.'</p>
             </button>
           </span>
         </div></a>
       </div>';

    }

  }

  }

  

  ?>
  
  </div>

<center>
        <a href="jobs_info.php" style="text-decoration: none;">
          <button class="b11">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path fill="currentColor"
                d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z">
              </path>
            </svg>
            <span>Launch More</span>
          </button>
        </a>
      </center>

    </div>

    <div class="d4">

      <br>
      <br>
      <br>

      <center>
        <h2>Here's why you'll love it Jobstack</h2>
        <h6 style="color:#94A3B4;">Search all the open positions on the web. Get your own personalized salary <br>
          estimate. Read reviews on over 30000+ companies worldwide.</h6>
      </center>

      <br>
      <br>

      <div class="row" style="margin-left: 5px;">

        <div class="col d-inline co1">
          <div class="card card11">
            <div class="card-info">
              <div class="card-img" id="carimg">
                <img src="img/briefcase.svg">
              </div>
              <br>
              <div class="card-title">Tech & Startup Jobs</div>
              <br>
              <h5 class="ct1 text-center">Many desktop publishing now use and a search for job.</h5>
            </div>
          </div>
        </div>

        <div class="col d-inline co2">
          <div class="card card12">
            <div class="card-info">
              <div class="card-img" id="carimg">
                <img src="img/cloud.svg">
              </div>
              <br>
              <div class="card-title">Quick & Easy</div>
              <br>
              <h5 class="ct1 text-center">This Is Make Easy And Quick To Find Jobs And Internships.</h5>
            </div>
          </div>
        </div>

        <div class="col d-inline co3">
          <div class="card card13">
            <div class="card-info">
              <div class="card-img" id="carimg">
                <img src="img/cloud-check.svg">
              </div>
              <br>
              <div class="card-title">Save Time</div>
              <br>
              <h5 class="ct1 text-center">JobConnect Save Your Important Time For Searching Jobs And Internships.</h5>
            </div>
          </div>
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
            <a href="jobs_info.php"><button class="arc-btn-retro">Apply Now</button></a>
          </div>
        </div>

      </center>

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