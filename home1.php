<?php require_once("./core/configure.php"); ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $pageTitle = "Home";
    require_once('header.php'); ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- login css link  -->
    <link rel="stylesheet" href="css/home1.css">
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">


</head>

<body>
    <!-- home section -->
    <div class="container mt-4" ;>
        <div class="header mt-3 text-center ">
            <h2>Book ticket now</h2>
        </div>
    </div>

    <div class="Home-container m-5">
        <div class="container">
            <form action="#" method="POST">
                <div class="col-sm-8">

                    <div class="row">

                        <div class="col-sm-6 mb-3 ">
                            <label class="font-weight-bold" style="font-size: 18px;" for="from_station">From:</label>
                            <div style="border: 1px solid #dbdddd ; border-radius:4px">
                                <select data-live-search="true" class="form-control selectpicker" placeholder="From station" name="from_station" id="from_station" required>
                                    <option value="Choose">From station</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="AC_S">AC_S</option>
                                    <option value="SNIGDHA">SNIGDHA</option>
                                    <option value="F_BERTH">F_BERTH</option>
                                    <option value="F_SEAT">F_SEAT</option>
                                    <option value="F_CHAIR">F_CHAIR</option>
                                    <option value="S_CHAIR">S_CHAIR</option>
                                    <option value="SHOVAN">SHOVAN</option>
                                    <option value="SHULOV">SHULOV</option>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label class="font-weight-bold" style="font-size: 18px;" for="to_station">To:</label>
                            <div style="border: 1px solid #dbdddd ; border-radius:4px">
                                <select data-live-search="true" class="form-control selectpicker " placeholder="To station" name="to_station" id="to_station" required>
                                    <option value="Choose">To station</option>
                                    <option value="tangail">Tangail</option>
                                    <option value="AC_S">AC_S</option>
                                    <option value="SNIGDHA">SNIGDHA</option>
                                    <option value="F_BERTH">F_BERTH</option>
                                    <option value="F_SEAT">F_SEAT</option>
                                    <option value="F_CHAIR">F_CHAIR</option>
                                    <option value="S_CHAIR">S_CHAIR</option>
                                    <option value="SHOVAN">SHOVAN</option>
                                    <option value="SHULOV">SHULOV</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="font-weight-bold" style="font-size: 18px;" for="choose_date">Date of journey:</label>
                            <input type="text" class="datepicker form-control hasDatepicker" placeholder="Choose date" name="choose_date" id="choose_date" data-date-format="dd/mm/yyyy" readonly="true" required>
                        </div>
                        <div class="col mb-3">
                            <label class="font-weight-bold" style="font-size: 18px;" for="choose_class">Choose Class:</label>
                            <select type="text" class="form-control" placeholder="To station" name="to_station" id="to_station" required>
                                <option value="Choose">To station</option>
                                <option value="AC_B">AC_B</option>
                                <option value="AC_S">AC_S</option>
                                <option value="SNIGDHA">SNIGDHA</option>
                                <option value="F_BERTH">F_BERTH</option>
                                <option value="F_SEAT">F_SEAT</option>
                                <option value="F_CHAIR">F_CHAIR</option>
                                <option value="S_CHAIR">S_CHAIR</option>
                                <option value="SHOVAN">SHOVAN</option>
                                <option value="SHULOV">SHULOV</option>
                            </select>
                        </div>
                    </div>
                    <div class="row btn-submit">
                        <button type="submit" class="btn-block btn btn-success btn-lg  m-3" name="submit">Search ticket</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>

<?php require_once("footer.php"); ?>