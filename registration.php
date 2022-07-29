
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php $pageTitle = "Registration"; require_once('header.php'); ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- login css link  -->
    <link rel="stylesheet" href="css/register.css">
       <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">


  </head>
  <body>
    <!-- registration section -->
    <div class="container mt-4";>
<div class="header mt-3 text-center ">
    <h2>Register Now</h2>
    <hr color="green" width="100%">
</div>
</div>

<div class="registration-container mt-5">
  <div class="container">
    <form>
  <div class="row">
    <div class="col-sm-6 mb-3">
      <input type="text" class="form-control" placeholder="First name" name="first_name" required>
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 mb-3">
      <input type="email" class="form-control" placeholder="Email" name="email" required>
    </div>
    <div class="col mb-3">
      <input type="number" class="form-control" placeholder="Mobile number" name="mobile_number" required>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 mb-3">
      <input type="password" class="form-control" placeholder="Enter password" name="password" required>
    </div>
    <div class="col mb-3">
      <input type="password" class="form-control" placeholder="Confiirm password" name="confrim_password" required>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 mb-3">
      <input type="number" class="form-control" placeholder="NID number" name="nid_number" required>
    </div>
    <div class="col mb-3">
      <input type="number" class="form-control" placeholder="Post code" name="post_code" required>
    </div>
  </div>
  <div class="row">
    <textarea class="form-control m-3" name="address" id="" cols="30" rows="5" placeholder="Enter your address" required></textarea>
  </div>
  <div class="row btn-submit">
    <button type="button" class="col-sm-3 col-md-3 btn btn-success btn-lg  m-3" name="submit">Sign up</button>
    <a class="already-registered-btn col-sm-3 col-md-3 text-nowrap pt-2 my-3" href="#">Already registered?</a>
  </div>
</form>
  </div>
</div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  </body>
</html>