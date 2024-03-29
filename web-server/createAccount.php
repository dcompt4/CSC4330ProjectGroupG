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

        <title>Dowling Create Account</title>
    </head>


<body>
        <!-- Bootsrap CDN js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
        <!-- Local js -->
        <script src="script.js"></script>

 <nav>

            <div class="">

                <ul>
                    <li><a href="index.php">Dowling</a></li>
                    <li style="float:right"><a class="active" href="createAccount.php">Create Account</a></li>
                    <li style="float:right"><a href="login.php">Login</a></li>
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

        <div class="container-fluid pt-4">


            <div class="overflow-hidden align-content-center" align="center">
                <div class="col-md-8" align="center">
                    <h3 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":"1.5","delay":0}'>Create Account</h3>
                </div>
            </div>
        </div>
        <!-- end of .container-->


        <div class="container" align="left">
            <form id="user_info">
                <div class="form-group">
                    <div class="col-2"><label for="email">Email Address</label></div>
                    <input class="form-control" id="email" type="email"
                           placeholder="example@example.com" maxlength="100" required>
                </div>

                <div class="form-group">
                    <div class="col-2"><label for="password">Password</label></div>
                    <input class="form-control" id="password" type="password"
                           placeholder="Password" maxlength="100" required>
                </div>

                <div class="form-group">
                    <div class="col-2"><label for="name">Name</label></div>
                    <input class="form-control" id="name" type="name" placeholder="Name" maxlength="100" required>
                </div>

                <div class="form-group">
                    <div class="col-2"><label for="address">Address</label></div>
                    <input class="form-control" id="address" type="address"
                           placeholder="12345 Street Name, City, State, ZIP" maxlength="200" required>
                </div>

                <div class="form-group">
                    <div class="col-2"><label for="birthdate">Birthdate</label></div>
                    <input class="form-control" id="birthdate" type="date"
                           placeholder="01/01/2000" maxlength="100" required>
                </div>

                <div class="form-group">
                    <div class="col-2"><label for="phone">Phone Number</label></div>
                    <input class="form-control" id="phone" type="phone"
                           placeholder="225-123-4567" maxlength="14" required>
                </div>

                <div class="form-group">
                    <div class="col-2"><label for="credit">Credit Card Number</label></div>
                    <input class="form-control" id="credit" type="credit"
                           placeholder="1234-1234-1234-1234" maxlength="19" required>
                </div>

                <div class="form-group">
                    <div class="col-2"><label for="date">Expiration Date</label></div>
                    <input class="form-control" id="date" type="date"
                           placeholder="00/00" maxlength="5" required>
                </div>

                <div class="form-group">
                    <div class="col-2"><label for="pin">Security Code</label></div>
                    <input class="form-control" id="pin" type="pin"
                           placeholder="123" maxlength="6" required>
                </div>

                <div class="form-group">
                    <div class="checkbox custom-checkbox">
                      <label><input type="checkbox" id="tos">  I agree to the <a href="tos.php" target="_blank">Terms of Service</a>.</label>
                    </div>
                </div>

                <button class="btn btn-success createAccount" type="button" onclick="create_account()">Create Account</button>
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
