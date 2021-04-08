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

        <title>Dowling Login</title>
    </head>

<body>
<!-- Bootsrap CDN js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<nav>

            <div class="container-fluid px-3 dispark-nav">

                <ul>
                    <li><a href="index.php">Dowling</a></li>
                    <li style="float:right"><a href="createAccount.php">Create Account</a></li>
                    <li style="float:right"><a class="active" href="login.php">Login</a></li>
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
                    <h3 class="fs-sm-5 mb-2 pt-4">Login</h3>
                </div>
            </div>
        </div>
        <!-- end of .container-->


        <div class="container" align="left">
            <form method="post">
                <div class="form-group">
                    <div class="col-2"><label class="" for="email">Email Address</label></div>
                    <input class="form-control" id="email" type="email" name="email"
                           placeholder="example@example.com" maxlength="100">
                </div>
                <br>
                <div class="form-group">
                    <div class="col-2"><label class="" for="password">Password</label></div>
                    <input class="form-control" id="password" type="password" name="password"
                           placeholder="Password" maxlength="100">
                </div>
                <br>

            <button class="btn btn-primary login" type="submit">Login</button>
            </form>
            

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
