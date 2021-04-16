<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CDN css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Local css -->
        <link rel="stylesheet" href="style.css">

        <title>Dowling Receipt</title>

        <script src="script.js"></script>
        <script>
            var oldTime = <?php echo $_GET['time'] ?>;
            var damaged = "<?php echo $_GET['damaged'] ?>";
            var oldDock = <?php echo $_GET['old'] ?>;
            var newDock = <?php echo $_GET['new'] ?>;
        </script>
    </head>

<body onload="receipt();">
<!-- Bootsrap CDN js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<nav>

            <div class="">

                <ul>
                    <li><a class="inactive" href="index.php">Dowling</a></li>
                    <li style="float:right"><a class="logout" href="login.php">Logout</a></li>
                    <li style="float:right"><a class="inactive">Hello, User</a></li>
                    <li style="float:right"><a class="" href="index.php">Bike Rentals and Returns</a></li>
                </ul>

            </div>

        </nav>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="text-center pb-0" style="padding-bottom: 200px !important">

        <div class="container-fluid">

            <div class="overflow-hidden align-content-center" align="center">
                <div class="col-md-8" align="center">
                    <h3 class="fs-sm-5 mb-2 pt-4">Receipt</h3>
                </div>
            </div>
        </div>
        <!-- end of .container-->


        <div class="container" align="left">

        <hr>

        <h4>Time Elapsed</h4>
        <p id="time">45 Minutes</p>
        <div class="row">
            <h4 class="col-6">Time Fee</h4>
            <p class="col-6" align="right" id="fee">$9</p>
        </div>

        <hr>

        <h4>Start Dock</h4>
        <p id="oldDock">Dock 2</p>
        <h4>End Dock</h4>
        <p id="newDock">Dock 3</p>
        <div class="row">
            <h4 class="col-6">Dock Fee</h4>
            <p class="col-6" align="right" id="fee2">$25</p>
        </div>

        <hr>

        <h4>Damages</h4>
        <p id="damages">No</p>
        <div class="row">
            <h4 class="col-6">Damage Fee</h4>
            <p class="col-6" align="right" id="fee3">$0</p>
        </div>

        <hr>

        <div class="row">
            <h4 class="col-6">Total</h4>
            <p class="col-6" align="right" id="total">$34</p>
        </div>

        <p>Payment will be made automatically from the payment method on your account.</p>
        <a href="index.php"><button class="btn btn-success" type="button">Return</button></a>


        </div>


    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

</body>
</html>
