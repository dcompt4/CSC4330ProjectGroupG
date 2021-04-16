<?php
    if (!isset($_POST['email']) or !isset($_POST['password']))
    {
        header('Location: ./login.php');
    }     
?>
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
    <body onload="setup()">
        <!-- Bootsrap CDN js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Local js -->
        <script>var email = "<?php echo $_POST['email']; ?>";var password = "<?php echo $_POST['password']; ?>";</script>
        <script><?php echo "var bike_data = ". file_get_contents("bike-data.json") .";"; ?></script>
        <script><?php echo "var user_data = ". file_get_contents("user-data.json") .";"; ?></script>
        <script src="script.js"></script>
        <script>
            var user_name = check_credentials(email, password);
            if (user_name == null)
                window.location.replace("login.php");
        </script

        <nav>

            <div class="px-3">

                <ul>
                    <li><a class="inactive" href="index.php">Dowling</a></li>
                    <li style="float:right"><a class="logout" href="login.php">Logout</a></li>
                    <li style="float:right"><a class="inactive">Hello, <span id="user_name">User</span></a></li>
                    <li style="float:right"><a class="active" href="index.php">Bike Rentals and Returns</a></li>
                </ul>

            </div>
                </div>
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

                <div class="pt-5 p-3 " align="center">

                    <div class="row pb-5" align="center">

                    <div class="col-2 p-3 dock">
                        <h1>Dock 1</h1>
                        <p>Bikes Available:</p>
                        <h2>3 / 6</h2>
                        <div class="pt-3 row">
                        <button class="btn btn-success checkOut" type="submit">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit">Check In</button>
                        </div>
                    </div>

                    <div class="col-2 p-3 dock">
                        <h1>Dock 2</h1>
                        <p>Bikes Available:</p>
                        <h2>6 / 6</h2>
                        <div class="pt-3 row">
                        <button class="btn btn-success checkOut" type="submit">Check Out</button>
                        <button class="btn btn-danger checkIn" type="submit" disabled>Check In</button>
                        </div>
                    </div>

                    <div class="col-2 p-3 dock">
                        <h1>Dock 3</h1>
                        <p>Bikes Available:</p>
                        <h2>0 / 6</h2>
                        <div class="pt-3 row">
                        <button class="btn btn-danger checkOut" type="submit" href="#">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
                        </div>
                    </div>

                    <div class="col-2 p-3 dock">
                        <h1>Dock 4</h1>
                        <p>Bikes Available:</p>
                        <h2>3 / 6</h2>
                        <div class=" pt-3 row">
                        <button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
                        </div>
                    </div>

                    <div class="col-2 p-3 dock">
                        <h1>Dock 5</h1>
                        <p>Bikes Available:</p>
                        <h2>3 / 6</h2>
                        <div class="pt-3 row">
                        <button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
                        </div>
                    </div>

                    </div>

                    <div class="row pb-5" align="center">

                    <div class="col-2 p-3 dock">
                        <h1>Dock 6</h1>
                        <p>Bikes Available:</p>
                        <h2>3 / 6</h2>
                        <div class="pt-3 row">
                        <button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
                        </div>
                    </div>

                    <div class="col-2 p-3 dock">
                        <h1>Dock 7</h1>
                        <p>Bikes Available:</p>
                        <h2>3 / 6</h2>
                        <div class="pt-3 row">
                        <button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
                        </div>
                    </div>

                    <div class="col-2 p-3 dock">
                        <h1>Dock 8</h1>
                        <p>Bikes Available:</p>
                        <h2>3 / 6</h2>
                        <div class="pt-3 row">
                        <button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
                        </div>
                    </div>

                    <div class="col-2 p-3 dock">
                        <h1>Dock 9</h1>
                        <p>Bikes Available:</p>
                        <h2>3 / 6</h2>
                        <div class=" pt-3 row">
                        <button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
                        </div>
                    </div>

                    <div class="col-2 p-3 dock">
                        <h1>Dock 10</h1>
                        <p>Bikes Available:</p>
                        <h2>3 / 6</h2>
                        <div class="pt-3 row">
                        <button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
                        <button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
                        </div>
                    </div>

                    </div>



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
