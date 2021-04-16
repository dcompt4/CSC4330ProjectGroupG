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
    </head>

<body>
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
                    <h3 class="fs-sm-5 mb-2 pt-4">Weekly Report</h3>
                </div>
            </div>
        </div>
        <!-- end of .container-->


        <div class="container" align="left">

        <table class="table">
            <thead>
                <tr>
                    <th>Ride ID Number</th>
                    <th>Start Dock</th>
                    <th>End Dock</th>
                    <th>Time Elapsed</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dock 2</td>
                    <td>Dock 2</td>
                    <td>10 minutes</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dock 9</td>
                    <td>Dock 7</td>
                    <td>30 minutes</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dock 6</td>
                    <td>Dock 4</td>
                    <td>91 minutes</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
                    <thead>
                        <tr>
                            <th>Dock Number</th>
                            <th>Dock Revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dock 1</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 2</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 3</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 4</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 5</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 6</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 7</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 8</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 9</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Dock 10</td>
                            <td>$0</td>
                        </tr>



                    </tbody>
                </table>



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
