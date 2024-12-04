<!DOCTYPE html>
<html lang="en">

<?php require_once "head.php"; ?>

<style>
  
/* accordion cources */
 
    
.accordion-container {
    width: 100%;
    /* max-width: 500px; */
    margin: 0 auto;
  }
  
  .menu-button {
    width: 100%;
    padding: 10px 20px;
    margin-top: 2px;
    font-size: 18px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: none;
    background-color: #e6e6e6;
    cursor: pointer;
  }
  
  .menu-button:hover {
    background-color: #ccc;
  }
  
  .icon {
    font-size: 20px;
    transition: 0.4s;
  }
  
  .menu-button.open .icon {
    transform: rotate(45deg);
  }
  
  .content {
    padding: 0 20px;
    background-color: #f2f2f2;
    transition: 0.4s;
    height: 0;
    overflow: hidden;
  }


  ul{
    color:#000;
    list-style-type: circle;
  }
  
/*  */
</style>

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
          <h2>Contact Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page p-0">
      <div class="container">
      <section id="services" data-scroll-reveal="enter left move 10px over 1s after 0.2s">


<div class="container-fluid">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio pt-0  h-100">
        <div class="container">

            <div class="section-title ">
                <h2 class="mb-0" style="letter-spacing:0px; margin-bottom:30px;">Our Software Testing Syllabus</h2>
                <!--<span class="text-info">______</span>-->
                <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
            </div>

            <!-- <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
      </ul>
    </div>
  </div> -->

            <div class="row portfolio-container accordion-container mt-5 h-100">

                <div class="col-md-6 mb-2">
                <div class="accordion">
<button class="menu-button">testing Introduction<span class="icon">&plus;</span></button>
<div class="content">
                                <ul>
                                    <li>Quality</li>
                                     <li>Quality Assurance</li>
                                     <li>Quality Control</li>
                                     <li>Verification</li>
                                     <li>Validation</li>
                                     <li>Testing</li>
                                     <li>7 Principles of Testing</li>
                                     <li>Difference between product and project</li>
                                     <li>Activities before Software Development</li>
                                     <li>Conclusion,                                 </li>
                                </ul>
</div>
</div>
                   
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">Software Testing<span class="icon">&plus;</span></button>
                    <div class="content">
                        
                                <ul>
                                    <li> 	Software Testing Principal </li>
                                    <li>	Software Development Life Cycle </li>
                                    <li>	Software Testing Life Cycle </li>
                                    <li>	Level Of Testing </li>
                                   
                                </ul>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                <div class="accordion">
                    <button class="menu-button">SDLC Models<span class="icon">&plus;</span></button>
                    <div class="content">
                    
                                <ul>
                                    <li> Software Development Life Cycle (SDLC)</li>
                                    <li> Different Software Development Model</li>
                                    <li> Waterfall Model</li>
                                    <li>V- Model</li>
                                    <li>Iterative Model</li>
                                    <li>Agile Model</li>
                                    <li>	Spiral Model,</li>
                                </ul>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">Testing Methodology<span class="icon">&plus;</span></button>
                    <div class="content">
                    
                                <ul>
                                    <li>	White Box Testing </li>
                                    <li>	Black Box Testing </li>
                                    <li>Gray Box Testing </li>
                                </ul>
                            </div>
                        
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                     <div class="accordion">
                <button class="menu-button">Black Box Testing Technique<span class="icon">&plus;</span></button>
                <div class="content">
                   
                       

                                <ul>
                                    <li>	Use Case </li>
                                    <li>	Decision Table </li>
                                    <li>	Cause- Effect Testing </li>
                                    <li>	State Transition </li>
                                    <li>	Statement Coverage </li>
                                    <li>	Decision Coverage </li>
                                    
                                </ul>

                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                <div class="accordion">
                <button class="menu-button">Types Of Testing<span class="icon">&plus;</span></button>
                <div class="content">
                   
                   
                                <ul>
                                    <li>Static/Non- Execution Based testing </li>
                                    <li>Dynamic Testing </li>
                                    <li>Ad-hoc Testing </li>
                                    <li>Negative Testing </li>
                                    <li>Positive Testing </li>
                                    <li>Exploratory Testing </li>
                                    <li>System Testing </li>
                                    <li>Smoke Testing </li>
                                    <li>Sanity Testing </li>
                                    <li>Regression Testing </li>
                                    <li>Retesting </li>
                                    <li>Non Functional Requirement (NFR) Testing </li>
                                    <li>Security Testing </li>
                                    <li>Compatibility Testing </li>
                                    <li>Localization Testing </li>
                                    <li>Performance Testing </li>
                                    <li>Usability Testing </li>
                                    <li>Accessibility Testing </li>
                                    <li>Database Testing </li>
                                    <li>Maintainability Testing </li>
                                    <li>Reliability Testing </li>
                                    <li>Portability Testing </li>
                                    <li>Difference between Desktop, Client - server and Web Application </li>
                                    <li>Different Types of Web Testing </li>
                                    
                                </ul>

                          
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">Types of Functional Testing<span class="icon">&plus;</span></button>
                <div class="content">
                   
                       
                                <ul>
                                    <li> 	Unit testing </li>
                                    <li>	Integration Testing </li>
                                    <li>	System testing </li>
                                    <li>	User Acceptance Testing(UAT) </li>
                                  
                                </ul>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">	Types of Non-Functional Testing<span class="icon">&plus;</span></button>
                    <div class="content">
                       
                                <ul>
                                    
                                    <li>	Recovery Testing</li>                                         
                                    <li>Security Testing </li>
                                    <li>Compatibility Testing </li>
                                    <li>Performance Testing </li>
                                    <li>Usability Testing </li>
                                   
                                </ul>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">	Process of Testing<span class="icon">&plus;</span></button>
                    <div class="content">
                      
                                <ul>
                                    <li>	Test Planning </li>
                                    <li>	Test Analysis </li>
                                    <li>	Test Design  </li>
                                    

                                </ul>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">Test Design For Functional Testing <span class="icon">&plus;</span></button>
                    <div class="content">
                       
                                <ul>
                                    <li> 	Introduction to test design </li>
                                    <li>	Test Scenario </li>
                                    <li>	Test Cases </li>
                                    <li>	Test data </li>
                                    <li>	Requirement Traceability Matrix(RTM) </li>
                                  
                                </ul>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">Test Execution <span class="icon">&plus;</span></button>
                    <div class="content">
                       
                        
                                <ul>
                                    <li>	Test Execution Cycle </li>
                                    <li>	Entry Criteria for Test Execution </li>
                                    <li>	Smoke/Sanity Testing </li>
                                    <li>	Test Execution </li>
                                    <li>	Re-Testing and Regression Testing </li>

                                </ul>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">	Defect Management<span class="icon">&plus;</span></button>
                    <div class="content">
                       
                                <ul>
                                    <li>	Defect/Bug </li>
                                    <li>	Defect Reporting </li>
                                    <li>	Severity and Priority </li>
                                    <li>	Defect Life Cycle </li>
                                    
                                    
                                </ul>
                           
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="accordion">
                    <button class="menu-button">	Quality And Process Management<span class="icon">&plus;</span></button>
                    <div class="content">
                       
                                <ul>
                                    <li>1.	Define What Is Quality </li>
                                    <li>	Application Of Concept Of Quality To Software Application </li>
                                    <li>	Quality Assurance </li>
                                    <li>	Quality Control </li>

                                   
                                </ul>
                            
                        </div>
                    </div>
                </div>

                

            </div>

        </div>
    </section>
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


  
  <script>
     const menuBtns = document.querySelectorAll(".menu-button");

menuBtns.forEach((menuBtn) => {
  menuBtn.addEventListener("click", function () {
    //----- open only one menu --------------
    const activeAccordion = document.querySelector(".menu-button.open");
    if (activeAccordion && activeAccordion !== this) {
      activeAccordion.nextElementSibling.style.height = 0;
      activeAccordion.classList.remove("open");
    }
    //------------------------------------------------

    this.classList.toggle("open");
    const content = this.nextElementSibling;
    if (this.classList.contains("open")) {
      content.style.height = content.scrollHeight + "px";
    } else {
      content.style.height = 0;
    }
  });
});
  </script>

</body>

</html>