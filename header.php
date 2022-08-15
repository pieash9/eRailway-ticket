<?php require_once("./core/configure.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>

        <?php if (isset($pageTitle)) {
            echo $pageTitle;
        } else {
            echo "eRailway BD ";
        } ?>
    </title>

    <!-- css link  -->
    <link rel="stylesheet" href="css/header.css">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

    <!-- font awesome link     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- nav bar start -->
    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="container">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
            <!-- <img src="image/logo.jpg" alt=""> -->
            <ul>
                <li><a class="text-decoration-none text-dark" href="home1.php">Home</a></li>
                <li><a class="text-decoration-none text-dark" href="#">Verify Ticket</a></li>
                <li><a class="text-decoration-none text-dark" href="login.php">Login</a></li>
                <li><a class="text-decoration-none text-dark" href="registration.php">Register</a></li>
                <li><a class="text-decoration-none text-dark" href="#">Contact us</a></li>
            </ul>
        </div>
    </nav>
    <!-- nav bar end -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>