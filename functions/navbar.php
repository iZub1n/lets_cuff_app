<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
	<img src="assets/logo.png" alt="logo" style="height:50px"></img>
    </div>
    <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Zodiacs.php">Zodiacs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="DateRec.php">Date Ideas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="DateLocations.php">Date Locations</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="waifu-builder.php">W Builder</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="DEX.php">DEX</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="ContactUs.php">Contact Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="FAQ.php">FAQ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profileEdit.php">Edit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profile.php"><?php echo $_SESSION['username'];?></a>
    </li>
    <li>
    <form action="functions/logout.php" method="post" name="login_form">
            <button type="submit" class="btn btn-danger" name="login">Sign Out 👋🏻</button>
    </form> 
    </li>
  </ul>
  <div id='heart'>💕</div>
  </div>
</nav>
