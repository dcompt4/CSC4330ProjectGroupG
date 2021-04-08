<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CDN css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Local css -->
        <link rel="stylesheet" href="style.css">

        <title>Bike Web App</title>
    </head>
    <body>
        <!-- Bootsrap CDN js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Local js -->
        <script><?php echo "var bike_data = ". file_get_contents("bike-data.json") .";"; ?></script>
        <script src="script.js"></script>

        <nav>

            <div class="container-fluid px-3 dispark-nav">

                <ul>
                    <li><a href="dowling.html">Dowling</a></li>
                    <li style="float:right"><a href="createAccount.html">Create Account</a></li>
                    <li style="float:right"><a href="login.html">Login</a></li>
                    <li style="float:right"><a class="active" href="dowling.html">Bike Rentals and Returns</a></li>
                </ul>


                <div class=" navbar-collapse" id="navbarSupportedContent">

                </div>

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
                            <h3 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":"1.5","delay":0}'>Bike Rentals</h3>
                        </div>
                    </div>
                    <br>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":"1.5","delay":0.2}'/>
                    </div>
                </div>
                <!-- end of .container-->


                <div class="container" align="left">
                    <form>
                        <div class="form-group">
                            <div class="col-2"><label class="col-2" for="email">Email Address</label></div>
                            <input class="form-control" id="email" type="email"
                                   placeholder="example@example.com" maxlength="100">
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-2"><label class="col-2" for="password">Password</label></div>
                            <input class="form-control" id="password" type="password"
                                   placeholder="Password" maxlength="100">
                        </div>
                        <br>


                    </form>
                    <button class="btn login" type="submit" href="#">Login</button><br>
                    <p>or</p><br>
                    <a class="" type="submit" href="createAccount.html">Create Account</a>

                </div>


            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->





        <footer><a target="_blank" href="undefined/icons/set/electric-bike">Electric Bike icon</a> icon by <a target="_blank" href="">Icons8</a></footer>
    </body>
</html>
