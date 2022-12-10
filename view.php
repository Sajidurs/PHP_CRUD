
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

<div class="container">
  <h2>Condensed Table</h2>
  <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
  

    <?php
     $sql = "SELECT * FROM zoo";
     $query = mysqli_query($connect, $sql);
     
     echo "<table class='table table-condensed'>";

     while($data = mysqli_fetch_assoc($query)){
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $password = $data['password'];

        echo $id. '' .$name. '' .$email. '' .$mobile. '' .$email;
     }
     ?>

    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>john@example.com</td>
        <td>01307453627</td>
        <td>AHGF@#$3322</td>
      </tr>
    </tbody>
  </table>
</div>


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





