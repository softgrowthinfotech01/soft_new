        <?php 
         $path = $_SERVER['REQUEST_URI'];
         $path = explode('/',$path);
         $path = end($path);

        ?>
        
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="assets/img/soft_logo_org.png" alt="logo" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a <?php if($path == "index") {echo "class='active nav-link scrollto'" ; }  ?>  class="nav-link scrollto" href="index#wellcome">Home</a></li>
          <li><a <?php if($path == "about") {echo "class='active nav-link scrollto'" ; }  ?> class="nav-link scrollto" href="about">About</a></li>
          <li><a <?php if($path == "services") {echo "class='active nav-link scrollto'" ; }  ?> class="nav-link scrollto" href="services">Services</a></li>
          <li><a <?php if($path == "portfolio") {echo "class='active nav-link scrollto'" ; }  ?> class="nav-link scrollto " href="portfolio">Portfolio</a></li>
          <li><a <?php if($path == "placements") {echo "class='active nav-link scrollto'" ; }  ?> class="nav-link scrollto" href="placements">Placements</a></li>
          <li class="dropdown"><a <?php if($path == "frontend") {echo "class='active nav-link scrollto'" ; } elseif ($path == "testing") {echo "class='active nav-link scrollto'" ;}  ?> href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a <?php if($path == "frontend") {echo "class='active nav-link scrollto'" ; }  ?> href="frontend" style="" class="">Front-End Development</a></li>
              <li><a <?php if($path == "testing") {echo "class='active nav-link scrollto'" ; }  ?> href="testing" style="" class="">Software Testing </a></li>
              
            </ul>
          </li>
          <li><a <?php if($path == "contact") {echo "class='active nav-link scrollto'" ; }  ?>  class="nav-link scrollto" href="contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="http://softgrowthblog.com/">Blog</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle text-light"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->