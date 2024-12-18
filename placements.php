<?php

require_once 'conn.php';


$stmt=$conn->prepare("SELECT * FROM placement ORDER BY placement_id DESC");
      $stmt->execute();
      $row=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">


<?php require_once "head.php"; ?>

<body>

<!-- ======= Loader Section ======= -->

<?php require_once "loader.php"; ?>

  <!-- ======= Header ======= -->
   <?php require_once "header.php";  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

      <div class="d-flex justify-content-between align-items-center">
          <h2 >Placements</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Placements</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

      <div class="section-title" data-aos="fade-up">
          <h2 class="orangeborder">Placements</h2>
          <!-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p> -->
        </div>

        <div class="row">

        <?php
        for($i=0; $i <count($row) ; $i++) { 
          
          # code...
        ?>
          <div class="col-md-3 d-flex justify-content-center">
           <div class="card">
              <div class="card-image-container">
             <img src="assets/img/placement_photo/<?php echo $row[$i]['student_photo'];?>" alt="images" class="img-fluid" srcset="">
               </div>
              <p class="card-title"><?php echo $row[$i]['student_name'];  ?></p>
              <p class="card-des">
              <?php echo $row[$i]['student_company'];?>
              </p>
    
            </div>
          </div>

          <?php } ?>

          <!-- <div class="col-md-3">
           <div class="card">
              <div class="card-image-container">
        
               </div>
              <p class="card-title">Card Title</p>
              <p class="card-des">
               Lorem, ipsum dolor    
              </p>
    
            </div>
          </div>

          <div class="col-md-3">
           <div class="card">
              <div class="card-image-container">
        
               </div>
              <p class="card-title">Card Title</p>
              <p class="card-des">
               Lorem, ipsum dolor    
              </p>
    
            </div>
          </div>

          <div class="col-md-3">
           <div class="card">
              <div class="card-image-container">
        
               </div>
              <p class="card-title">Card Title</p>
              <p class="card-des">
               Lorem, ipsum dolor    
              </p>
    
            </div>
          </div> -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <?php require_once "footer.php";   ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>