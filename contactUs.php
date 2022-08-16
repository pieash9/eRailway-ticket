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
    <link rel="stylesheet" href="./css/contactUs.css">
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- fontawsome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="d-flex flex-column min-vh-100">
    <!-- our team section -->

    <div class="container header mt-4" ;>
        <div class="header mt-3 text-center ">
            <h2>Contact Us</h2>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 our_team mb-5 py-4">
                <h4>Our Team</h4>
                <hr color="red">
                <div class="card-deck mt-5">

                    <div class="card">
                        <img src="./image/profile-1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Md. Pieash Ahmed</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card ">
                        <img src="./image/profile-2.jpeg" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Abid Hasan Purna</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                    <div class="card ">
                        <img src="./image/profile-31.jpeg" class="card-img-top " alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Jawad Hossain Rudra</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-4 mx-4 mb-5 py-4 contact_us">
                <h4>Get in touch</h4>
                <hr color="crimson">

                <?php
                if (isset($_SESSION['status'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong><?php echo $_SESSION['status'];  ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php
                    unset($_SESSION['status']);
                } ?>
                <form action="./core/contactUsCore.php" method="post">
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" placeholder="Your name" name="name" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="email" class="form-control" placeholder="Your email" name="email" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" id="" cols="30" rows="5" placeholder="Enter your message.." name="message" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3 submit_button">
                        <button type="submit" class="btn btn-lg col-md-12 mb-3" name="submit">Send message</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src=" https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>

<?php require_once("footer.php"); ?>