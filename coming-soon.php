<!DOCTYPE html>
<?php
$config = include('config.php');
?>	
<html lang="en">
<?php include 'pages/header.php' ?>
<title><?php echo $config['servername']; ?> > Coming Soon</title>
</head>
  <body>

<div class="top-banner">

<?php include 'pages/navbar.tpl' ?>

				<center>
					<!-- Logo and go button area -->
					<h1 class="white-txt">Coming soon!</h1>
					<h5 class="white-txt">This page is currently under construction, please wait!</h5>
					<a class="btn btn-default" href="index.php" role="button"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Head back home.</a>
				</center><br><br><br><br>
</div><br>

<!-- Footer-->


<?php include 'pages/footer.tpl' ?>


    <!-- JavaScript files, don't touch unless you know what your doing -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
