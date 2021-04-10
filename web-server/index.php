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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

		<!-- Local css -->
		<link rel="stylesheet" href="style.css">

		<title>Dowling</title>
	</head>
	<body>
		<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>






		<!-- Local js -->
		<script>var email = "<?php echo $_POST['email']; ?>";var password = "<?php echo $_POST['password']; ?>";</script>
		<script><?php echo "var bike_data = ". file_get_contents("bike-data.json") .";"; ?></script>
		<script><?php echo "var user_data = ". file_get_contents("user-data.json") .";"; ?></script>
		<script src="script.js"></script>
		<script src="modal.js"></script>




		<nav>

			<div class="">

				<ul>
					<li><a class="inactive" href="index.php">Dowling</a></li>
					<li style="float:right"><a class="logout" href="login.php">Logout</a></li>
					<li style="float:right"><a class="inactive">Hello, User</a></li>
					<li style="float:right"><a class="active" href="index.php">Bike Rentals and Returns</a></li>
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

				<div class="pt-5 p-3 " align="center">

					<div class="row pb-5" align="center">

					<!-- Dock 1 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 1</h1>
						<p>Bikes Available:</p>
						<h2>3 / 6</h2>
						<div class="pt-3 row">
						<button class="btn btn-success checkOut" type="submit">Check Out</button>
						<button class="btn btn-success" type="button" data-toggle="modal" data-target="#damageModal">Check In</button>
						</div>
					</div>
					<!-- /Dock 1 ============================-->

					<!-- Dock 2 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 2</h1>
						<p>Bikes Available:</p>
						<h2>6 / 6</h2>
						<div class="pt-3 row">
						<button class="btn btn-success checkOut" type="submit">Check Out</button>
						<button class="btn btn-danger checkIn" type="submit" disabled>Check In</button>
						</div>
					</div>
					<!-- /Dock 2 ============================-->

					<!-- Dock 3 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 3</h1>
						<p>Bikes Available:</p>
						<h2>0 / 6</h2>
						<div class="pt-3 row">
						<button class="btn btn-danger checkOut" type="submit" href="#" disabled>Check Out</button>
						<button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
						</div>
					</div>
					<!-- /Dock 3 ============================-->

					<!-- Dock 4 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 4</h1>
						<p>Bikes Available:</p>
						<h2>3 / 6</h2>
						<div class=" pt-3 row">
						<button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
						<button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
						</div>
					</div>
					<!-- /Dock 4 ============================-->

					<!-- Dock 5 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 5</h1>
						<p>Bikes Available:</p>
						<h2>3 / 6</h2>
						<div class="pt-3 row">
						<button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
						<button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
						</div>
					</div>
					<!-- /Dock 5 ============================-->

					</div>

					<div class="row pb-5" align="center">

					<!-- Dock 6 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 6</h1>
						<p>Bikes Available:</p>
						<h2>3 / 6</h2>
						<div class="pt-3 row">
						<button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
						<button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
						</div>
					</div>
					<!-- /Dock 6 ============================-->

					<!-- Dock 7 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 7</h1>
						<p>Bikes Available:</p>
						<h2>3 / 6</h2>
						<div class="pt-3 row">
						<button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
						<button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
						</div>
					</div>
					<!-- /Dock 7 ============================-->

					<!-- Dock 8 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 8</h1>
						<p>Bikes Available:</p>
						<h2>3 / 6</h2>
						<div class="pt-3 row">
						<button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
						<button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
						</div>
					</div>
					<!-- /Dock 8 ============================-->

					<!-- Dock 9 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 9</h1>
						<p>Bikes Available:</p>
						<h2>3 / 6</h2>
						<div class=" pt-3 row">
						<button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
						<button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
						</div>
					</div>
					<!-- Dock 9 ============================-->

					<!-- Dock 10 ============================-->
					<div class="col-2 p-3 dock">
						<h1>Dock 10</h1>
						<p>Bikes Available:</p>
						<h2>3 / 6</h2>
						<div class="pt-3 row">
						<button class="btn btn-success checkOut" type="submit" href="#">Check Out</button>
						<button class="btn btn-success checkIn" type="submit" href="#">Check In</button>
						</div>
					</div>
					<!-- /Dock 10 ============================-->



<!-- .modal -->
	<div class="modal fade" id="damageModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				    <h4 class="modal-title">
                        Bike Damages Check In
                    </h4>

				</div>
				<div class="modal-body">
					Is the bike damaged?
				</div>
				<div class="modal-footer">
					<a href="receipt.php"><button type="button" class="btn btn-success">
						No
					</button></a>
					<a href="receipt.php"><button type="button" class="btn btn-success">
						Yes
					</button></a>
				</div>
			</div>
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
