<!DOCTYPE html>
<?php
$config = include('config.php');
?>	
<html lang="en">
<?php include 'pages/header.php' ?>
<title><?php echo $config['servername']; ?> > Template</title>
</head>
  <body>

<div class="top-banner">

<?php include 'pages/navbar.php' ?>

				<center>
					<!-- Logo and go button area -->
					<h1 class="white-txt">Empty Template</h1>
					<h5 class="white-txt">Use this file to create your own pages, make sure to link them in the navbar!</h5>
				</center><br><br><br><br>
</div><br>

<!-- Footer-->


<?php include 'pages/footer.php' ?>


    <!-- JavaScript files, don't touch unless you know what your doing -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
