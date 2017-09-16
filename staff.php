<!DOCTYPE html>
<?php
$config = include('config.php');
?>	
<html lang="en">
<?php include 'pages/header.php' ?>
<title><?php echo $config['servername']; ?> > Staff</title>
</head>
  <body>

<div class="top-banner">

<?php include 'pages/navbar.php' ?>

				<center>
					<!-- Logo and go button area -->
					<h1 class="white-txt">Staff</h1>
					<h5 class="white-txt">Here are all the members that keep <?php echo $config['servername']; ?> running!</h5>
				</center><br><br><br><br>
</div><br>

<!-- Body --><div class="pad-main">
	
	<div class="container">
	<div class="col-md-4">
		<center>
			<img src="https://visage.surgeplay.com/full/256/user.png" alt="user"/>
			<h2>user</h2>
			<span class="label label-primary">Owner</span>
		</center>
	</div>
	<div class="col-md-4">
		<center>
			<img src="https://visage.surgeplay.com/full/256/user.png" alt="user"/>
			<h2>user</h2>
			<span class="label label-danger">Admin</span>
		</center>
	</div>
	<div class="col-md-4">
		<center>
			<img src="https://visage.surgeplay.com/full/256/user.png" alt="user"/>
			<h2>user</h2>
			<span class="label label-warning">Moderator</span>
		</center>
	</div>
	</div>
	
<!-- Body --></div><br>

<!-- Footer-->


<?php include 'pages/footer.php' ?>


    <!-- JavaScript files, don't touch unless you know what your doing -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
