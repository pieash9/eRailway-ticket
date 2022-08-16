<?php require_once("./core/configure.php"); ?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $pageTitle = "Login";
  require_once('header.php'); ?>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- login css link  -->
  <link rel="stylesheet" href="./css/login.css">
  <!-- google font link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">


</head>

<body class="d-flex flex-column min-vh-100">
  <!-- form section -->
  <form action="./core/login_core.php" method="POST">
    <div class="login-container d-flex align-items-center justify-content-center">
      <div class="login-form text-center">
        <h2 class="mb-5 font-weight-light text-uppercase ">Login</h2>
        <div class="form-group">
          <input class="form-control" type="text" name="email" id="" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <input class="form-control" type="password" name="password" id="" placeholder="Enter your password">
        </div>
        <div class="forgot-link text-right">
          <a href="#" class="text-danger">Forget password?</a>
        </div>
        <button class="btn btn-block btn-primary mt-3" type="submit" name="submit">Login</button>
        <p class="mt-3 font-weight-normal">Don't have an account? <a href="registration.php"> <strong>Register now</strong></a></p>
      </div>
    </div>
  </form>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>

<?php require_once("footer.php"); ?>