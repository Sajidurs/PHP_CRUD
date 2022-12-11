<?php


//  Connecting Database
$connect = mysqli_connect('localhost', 'root', '', 'crud');
if($_GET['id']){
  $getid= $_GET['id'];

  $sql = "SELECT * FROM zoo WHERE id=$getid";

  $query = mysqli_query($connect, $sql);
  $data = mysqli_fetch_assoc($query);

  $id       = $data['id'];
  $name     = $data['name'];
  $email    = $data['email'];
  $mobile   = $data['mobile'];
  $password = $data['password'];
}
  // Set up
  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $u_name = $_POST['name'];
    $u_email = $_POST['email'];
    $u_mobile = $_POST['mobile'];
    $u_password = $_POST['password'];

    $sqli = "UPDATE zoo 
    SET name ='$u_name', email='$u_email', mobile='$u_mobile', password='$u_password' WHERE id = '$id'";
 
    if(mysqli_query($connect, $sqli) == TRUE){
    header('location:view.php');
    echo "Update Success";
    } else{
    echo "Sorry Data Not Updated";
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
              <h2 class="text-uppercase text-center mb-5">You're Editing The User</h2>

              <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

                <div class="form-outline form-group mb-4">
                  <input type="text" id="form3Example1cg" value="<?php echo $name ?>" name="name" autocomplete="off" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" value="<?php echo $email ?>" name="email" autocomplete="off" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cg" value="<?php echo $mobile ?>" name="mobile" autocomplete="off" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Mobile</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" value="<?php echo $password ?>" name="password" autocomplete="off" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Password</label>
                </div>

                <input type="text" value="<?php echo $id ?>" name="id" autocomplete="off" class="form-control form-control-lg" hidden />

                <div class="d-flex justify-content-center">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
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






