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
  <title>Jobs & Internships</title>
  <link rel="icon" href="img/JobConnect logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="css/c4.css">
  <style>

    .ad,.linktext{
      text-decoration:none;
    }

    .company {
      display: block;
      width: 100%;
      background-color: #23D26F;
      padding: 0.75rem;
      text-align: center;
      color: rgba(17, 24, 39, 1);
      border: none;
      margin-top: 50px;
      border-radius: 0.375rem;
      font-weight: 600;
    }

  </style>
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



  <br>


  <div class="row">

    <div class="form-container col mx-5 my-1">
      <h2 class="">Find Your Expected Job</h2>
      <h6 style="color:#94A3B4;" class="card-text">Find Jobs, Employment & Career Opportunities. Some of the companies
        we've helped recruit excellent applicants over the years.</h6>
      <form class="form">
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

      <img src="img/home.png" class="mx-5" height="500px">
      <a href="add_company.php" class="ad">
        <button class="company">ADD NEW COMPANY</button>
      </a>
    </div>
  </div>
  <br>
  <br>

  <div class="row">

  <?php

  include 'connect.php';

  if(isset($_GET['keyword'])){

  $keyword = $_GET['keyword'];
  $location = $_GET['location'];
  $job_type = $_GET['jobtype'];

    $q2 = "SELECT * FROM `company` where `job_catagory` ='".$keyword."' or `location`='".$location."' or `job_time`='".$job_type."'";

    $result2 = $con->query($q2);
  
    if($result2){
  
    if($result2->num_rows > 0){

      while($row = $result2->fetch_assoc()){
  
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

  }
  else{

    $q1 = "SELECT * FROM `company`";

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

  }

 

  

  ?>
  
  </div>

  <br>
  <br>
  <br>

  <!-- Footer -->
  <footer class="text-center text-lg-start text-light">
        <br>
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <a href="home.php" class="fcompany" style="text-decoration:none;">
                  <h6 class="fw-bold mb-4">
                    <img src="img/JobConnect logo.png" class="mx-2" alt="JobConnect" height="70px"><span class="h5 text-light">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>