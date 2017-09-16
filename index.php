<!DOCTYPE html>
<?php
$config = include('config.php');
?>	
<html lang="en">
<?php include 'pages/header.php' ?>
<title><?php echo $config['servername']; ?> > Home</title>
</head>
  <body>

<div class="top-banner">

<?php include 'pages/navbar.php' ?>

				<center>
					<!-- Logo and go button area -->
					<h1 class="white-txt"><?php echo $config['servername']; ?></h1>
					<h5 class="white-txt"><?php echo $config['description']; ?></h5>
					<a class="btn btn-default" href="#" role="button"><i class="fa fa-gamepad" aria-hidden="true"></i>&nbsp; <?php echo $config['ip']; ?>:<?php echo $config['port']; ?></a>
				</center>

<br><br><br><br></div>

<!-- Body --><div class="pad-main">

<div class="row">
	<!-- Features, right below the title.
				-
			 Find a list of usable <i> icons here:
			 http://fontawesome.io/icons/
	-->
	<br>
	
  <div class="col-md-4">
<center>
			<i class="fa fa-gamepad fa-5x" aria-hidden="true"></i>
			<h2>A feature</h2>
			<h4>An in-depth description of this feature.</h4>
</center>
	</div>
  <div class="col-md-4">
<center>
			<i class="fa fa-gamepad fa-5x" aria-hidden="true"></i>
			<h2>A feature</h2>
			<h4>An in-depth description of this feature.</h4>
</center>
	</div>
  <div class="col-md-4">
<center>
			<i class="fa fa-gamepad fa-5x" aria-hidden="true"></i>
			<h2>A feature</h2>
			<h4>An in-depth description of this feature.</h4>
</center>
	</div>
</div>

<br><hr><br><!-- Seperator -->

<!-- Body --></div>


<?php include 'pages/footer.php' ?>


    <!-- JavaScript files, don't touch unless you know what your doing -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
