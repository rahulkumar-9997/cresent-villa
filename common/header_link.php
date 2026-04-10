<?php
$curpage =  basename($_SERVER['PHP_SELF']); 
$urlpages = array("index.php" => '', "main-index.php" => '', "varanasi.php" => "Varanasi", "facilities.php" => "Facilities", "accommodation.php" => "Accommodation", "restaurant.php" => "Restaurant", "tariff_plan.php" => "Tariff Plan", "gallery.php" => "Gallery", "contact_us.php" => "Contact Us");

$urlpages[$curpage] = "<b>$urlpages[$curpage]</b>";

?>
 <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid text-right">
      <span><i class="icofont-phone"></i> +91 91612 88222</span>
   <span> <i class="icofont-envelope"></i> cresentvilla@yahoo.com</span>
    </div>
  </section>
 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid d-flex align-items-center">

      <div class="logo mr-auto ">
        <div class="text-light"><a href="index.php"><span><img src="assets/img/cresent villa logo new.png" alt="Cresentvilla-Logo"class="f-logo f-logo-center">
		<!--h1 class="image-text-logo image-text-log">CRESENT VILLA</h1-->
		<img src="assets/img/text logo.png" alt="Cresentvilla-Textlogo"class="image-text-logo text-logo-center"></span></a></div>
		
   <div class="text-light1"><a href="index.php"><span><img src="assets/img/cresent villa logo new.png" alt="Cresentvilla-Logo" style="width: 120px;padding: 10px;"class="s-logo"><img src="assets/img/text logo.png" alt="Cresentvilla-Textlogo"class="image-text-logo image-text-log"></span></a></div>
    
      </div>
	  
      <nav class="nav-menu d-none d-lg-block">
        <ul>
		<li><a href="https://asiatech.in/booking_engine/index3?token=Njc4Ng==" target="_blank">Book Here</a></li>
          <li class=""><a href="varanasi.php"><?=$urlpages["varanasi.php"]?></a></li>
          <li><a href="accommodation.php"><?=$urlpages["accommodation.php"]?></a></li>
          <li><a href="restaurant.php"><?=$urlpages["restaurant.php"]?></a></li>
          <li><a href="facilities.php"><?=$urlpages["facilities.php"]?></a></li>
         <!--<li><a href="#specials">Art Gallery</a></li>-->
          <li><a href="tariff_plan.php"><?=$urlpages["tariff_plan.php"]?></a></li>
          <!--li><a href="javascript:;"><?=$urlpages["gallery.php"]?></a></li-->
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact_us.php"><?=$urlpages["contact_us.php"]?></a></li>
		  

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <div class="book1">   
    <a href="https://asiatech.in/booking_engine/index3?token=Njc4Ng==" target="_blank"><img src="assets/img/booknow2.gif" target="_blank"></a>  
</div>