<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home | AFA Bulk SMS</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/lightbox/dist/css/lightbox.min.css">
<link rel="stylesheet" href="assets/css/styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="container">
    <header>
    	<h1><a href="/">AFA<span>BULK SMS</span></a></h1>
        <h2>Laugh, giggle, gaffaws</h2>
    </header>
    <nav>
    	<ul>
        	<li class="start selected"><a href="http://localhost/mysms/">Home</a></li>
            <li class=""><a href="about.php">About Us</a></li>
            <li><a href="our_vision.php">Our Vision</a></li>
            <li><a href="our_mission.php">Our Mission</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="end"><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <?php 
        require_once 'config/dbc.php';
        $getAllSlider = mysqli_query($connection, "SELECT * FROM media WHERE status='ACTIVE' AND media_type='slideshow' LIMIT 3") or die(mysqli_error($connection));		
        $active = true;
        while ($viewAllSlider = mysqli_fetch_array($getAllSlider)) {
      ?>
    <div class="carousel-item <?php echo ($active == true)?"active":"" ?>">
	    <img src="uploads/<?php echo $viewAllSlider['media_img']; ?>" alt="<?php echo $viewAllSlider['title']; ?>" />
    </div>
    <?php 
      $active = false;
    ?>
    <?php } ?>
    
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


