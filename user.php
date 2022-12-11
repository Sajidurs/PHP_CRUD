<?php

// include 'connect.php'; 
// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $mobile=$_POST['mobile'];
//     $password=$_POST['password'];

//     $sql="insert into `zoo` (name,email,mobile,password)
//     values('$name', '$email', '$mobile', '$password')";

//     $result=mysqli_query($con, $sql);
//     if($result){
//         echo "It Worked";
//     } else{
//         die(mysqli_error($con));
//     }
// }

//  Connecting Database
$connect = mysqli_connect('localhost', 'root', '', 'crud');

if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $mobile= $_POST['mobile'];
  $password= $_POST['password'];

  $sql = "INSERT INTO zoo(name, email, mobile, password) 
  values ('$name', '$email', '$mobile', '$password')";

  if(mysqli_query($connect,$sql) == TRUE){
    echo "Punggai Kapor Ache";

    // Making it non submitable again after refreshing the page
    header('location:insert.php');
  } else{
    echo "Need Nelps?";
  }

}
// ?>

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  <link rel="manifest" href="site.webmanifest" />
  <link rel="apple-touch-icon" href="icon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- icofont -->
  <link rel="stylesheet" href="css/icofont.min.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/responsive-testimonials.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>


<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Add an User</h2>

              <form method="POST" action="view.php">

                <div class="form-outline form-group mb-4">
                  <input type="text" id="form3Example1cg" name="name" autocomplete="off" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" autocomplete="off" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cg" name="mobile" autocomplete="off" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Mobile</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" name="password" autocomplete="off" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary">Add User</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Want to see all users? <a href="view.php"
                    class="fw-bold text-body"><u>See All Details</u></a></p>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/jquery-3.6.1.min.js"></script>
  <!-- boostrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="js/countMe.min.js"></script>
  <script src="js/responsive-testimonials.js"></script>
  <script src="js/main.js"></script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>






