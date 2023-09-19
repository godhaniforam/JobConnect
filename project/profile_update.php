<?php 

session_start();

if(!isset($_SESSION["name"])){
   header("location: sign up.php");
}

include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_SESSION['email'];
    session_unset();
    session_destroy();
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $your_self = $_POST['your_self'];

    $q1 = "UPDATE `user` SET `user_name`='$name',`phone_number`='$phone',`country`='$country',`your_self`='$your_self' WHERE `email`='".$email."'";

    $result = $con->query($q1);

    if($result){

        session_start();

        $q2 = "SELECT * FROM `user` WHERE `email`='".$email."'";

        $result2 = $con->query($q2);

        while($row = $result2->fetch_assoc()){
            $user_name = $row['user_name'];
            $phone = $row['phone_number'];
            $country = $row['country'];
            $user_img = $row['user_img'];
            $your_self = $row['your_self'];
        }

       $_SESSION["name"] = $user_name;
       $_SESSION["country"] = $country;
       $_SESSION["phone"] = $phone;
       $_SESSION["email"] = $email;
       $_SESSION["user_img"] = $user_img;
       $_SESSION["your_self"] = $your_self; 

       header("location: user_profile.php");
    }
}

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Profile</title>
    <link rel="icon" href="img/JobConnect logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="css/c9.css">
    <style>
        body {
            color: white;
            background-color: #0e2431;
            font-family: system-ui;
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

    <form method="POST">
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12" style="width: 760px;">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"><br>
                                        <img src="img/user_form_img/01.jpg" height="80px" class="img-radius"
                                            alt="User-Profile-Image">
                                    </div>
                                    <h4 class="f-w-600"><input type="text" name="name" style="width:100px;" value="<?php echo $_SESSION["name"];?>"></h4><br>
                                    <br><button class="btn btn-success">Update</button>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600"></h6>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400">
                                                <?php echo $_SESSION['email'];?>
                                            </h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="m-b-10 f-w-600">Phone</p>
                                            <h6 class="text-muted f-w-400">
                                            <input type="number" style="width:120px;" name="phone" value="<?php echo $_SESSION['phone'];?>">
                                            </h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="m-b-10 f-w-600">country</p>
                                            <h6 class="text-muted f-w-400">
                                            <input type="text" style="width:120px;" name="country" value="<?php echo $_SESSION['country'];?>">
                                            </h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">
                                                <textarea rows="6" cols="50" name="your_self"><?php echo $_SESSION['your_self'];?></textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

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