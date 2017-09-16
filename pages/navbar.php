<!-- Navbar --><nav class="navbar navbar-default">
  <div class="container-fluid pad-nav">

    <!-- Mobile optimization -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- This is the brand, the title on the navbar that is bold -->
      <a style="color: #fff;" class="navbar-brand" href="index.php"><?php echo $config['servername']; ?></a>
    </div><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <!-- Left side of the navbar | Used for all the links -->
      <ul class="nav navbar-nav">
        <li><a href="index.php"><?php echo $config['nav_home']; ?></a></li>
        <li><a href="forums/"><?php echo $config['nav_forums']; ?></a></li>
        <li><a href="vote.php"><?php echo $config['nav_vote']; ?></a></li>
        <li><a href="staff.php"><?php echo $config['nav_staff']; ?></a></li>
				<li><a href="https://example.buycraft.net"><?php echo $config['nav_store']; ?></a></li>
      </ul>

      <!-- Right side of the navbar | Used for the user icons, etc -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Login</a></li>
        <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Register</a></li>
      </ul>

    </div></div></nav><!-- Navbar --><br>