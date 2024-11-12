<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Knight Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/soft_logo.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Knight - v4.3.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    
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
  
  </style>
</head>

<body>

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

    <section class="inner-page"> 
      <div class="container">
                <div class="container">

                    <div class="section-title ">
                        <h2 class="mb-0" style="letter-spacing:0px; margin-bottom:30px;">Our Front-End Syllabus</h2>
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

                    <div class="row portfolio-container  accordion-container mt-5 h-100">

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">web Introduction<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>
                                                Web-Development Introduction
                                            </li>
                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">HTML Introduction<span class="icon">&plus;</span></button>
                            <div class="content">
                                
                                        <ul>
                                            <li> History of HTML</li>
                                            <li> What you need to do to get going and make your first HTML page</li>
                                            <li> What are HTML Tags and Attributes?</li>
                                            <li> HTML Tag vs. Element</li>
                                            <li> HTML Attributes:</li>
                                            <li> How to differentiate HTML Document Versions</li>
                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">HTML Basic Formatting Tags<span class="icon">&plus;</span></button>
                            <div class="content">
                                
                            
                                        <ul>
                                            <li> HTML Basic Tags</li>
                                            <li> HTML Formatting Tags</li>
                                            <li> HTML Color Coding</li>
                                        </ul>

                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button"> HTML Grouping Using Div & Span<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li> Div and Span Tags for Grouping</li>
                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button"> HTML Lists<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Unordered lists</li>
                                            <li>Ordered lists</li>
                                            <li>Definition lists</li>
                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button"> HTML-Images<span class="icon">&plus;</span></button>
                            <div class="content">
                              
                                        <ul>
                                            <li>Images and Images Mapping</li>

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button"> HTML-Hyperlinks <span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>URL - Uniform Resourse Locator</li>
                                            <li>URL Encoding</li>

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">HTML-Table<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>table tag</li>
                                            <li>th tag</li>
                                            <li>tr tag</li>
                                            <li>td tag</li>
                                            <li>caption tag</li>
                                            <li>thead tag</li>
                                            <li>tbody tag</li>
                                            <li>tfoot tag</li>
                                            <li>colgroup tag</li>
                                            <li>col tag</li>

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button"> HTML-Iframe<span class="icon">&plus;</span></button>
                            <div class="content">
                                
                                        <ul>
                                            <li>Attributes Using</li>
                                            <li>iframe as a target</li>

                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button"> HTML-Form<span class="icon">&plus;</span></button>
                            <div class="content">
                                
                                        <ul>
                                            <li>input tag</li>
                                            <li>textarea tag</li>
                                            <li>button tag</li>
                                            <li>select tag</li>
                                            <li>label tag</li>

                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button"> HTML-Headers<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Title</li>
                                            <li>Base</li>
                                            <li>Link</li>
                                            <li>Style</li>
                                            <li>Script</li>
                                            <li>meta</li>

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">HTML-miscellaneous <span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>HTML meta tag</li>
                                            <li>XHTML</li>
                                            <li>HTML deprecated tags & Attributes</li>

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3-Introduction <span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Benifites of CSS</li>
                                            <li>CSS Versions History</li>
                                            <li>CSS Syntax</li>
                                            <li>External Style Sheet Usage</li>
                                            <li>Multiple Style Sheets </li>
                                            <li>Value Lengths and Percentages </li>

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3-Syntax <span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>CSS Syntax</li>
                                            <li>Single Style Sheets</li>
                                            <li>Multiple Style Sheets</li>
                                            <li>Value Lengths and Percentages</li>

                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3-Selectors <span class="icon">&plus;</span></button>
                            <div class="content">

                                        <ul>
                                            <li>ID Selectors</li>
                                            <li>Class Selectors</li>
                                            <li>Grouping Selectors</li>
                                            <li>Universal Selectors</li>
                                            <li>Descendant / Child Selectors</li>
                                            <li>Attribute Selectors</li>
                                            <li>CSS – Pseudo Classes</li>

                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3 - Background, Cursor <span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>background-image</li>
                                            <li>background-repeat</li>
                                            <li>background-position</li>
                                            <li>CSS Cursor</li>


                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3- Color, Text, Fonts<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>color</li>
                                            <li>background-color</li>
                                            <li>text-decoration</li>
                                            <li>text-align</li>
                                            <li>vertical-align</li>
                                            <li>text-indent</li>
                                            <li>text-transform</li>
                                            <li>white-space</li>
                                            <li>letter-spacing</li>
                                            <li>word-spacing</li>
                                            <li>line-height</li>
                                            <li>font-family</li>
                                            <li>font-size</li>
                                            <li>font-style</li>
                                            <li>font-variant</li>
                                            <li>font-weight</li>

                                        </ul>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3- Lists Tables <span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>List-style-type</li>
                                            <li>List-style-position</li>
                                            <li>list-style-image</li>
                                            <li>list-style</li>
                                            <li>CSS Tables</li>
                                            <li>I. border</li>
                                            <li>II. width & height</li>
                                            <li>III. text-align</li>
                                            <li>IV. vertical-align</li>
                                            <li>V. padding</li>
                                            <li>VI. color</li>


                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3- Box Model<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Borders & Outline</li>
                                            <li>Margin & Padding</li>
                                            <li>Height and width</li>
                                            <li>CSS Dimensions</li>

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3- Display Positioning <span class="icon">&plus;</span></button>
                            <div class="content">
                                
                                        <ul>
                                            <li>CSS Visibility</li>
                                            <li>CSS Display</li>
                                            <li>CSS Scrollbars</li>
                                            <li>CSS Positioning</li>
                                            <li>1. Static Positioning</li>
                                            <li>2. Fixed Positioning</li>
                                            <li>3. Relative Positioning</li>
                                            <li>4. Absolute Positioning</li>
                                            <li>CSS Layers with Z-Index</li>

                                        </ul>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">CSS3- Floats <span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>The float Property</li>
                                            <li>The clear Property</li>

                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Javascript<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <!-- <li>The float Property</li>
                                            <li>The clear Property</li> -->

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Introduction<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Javascript Introduction</li>
                                            <!-- <li>The clear Property</li> -->

                                        </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Language Syntax <span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Variable Declaration </li>
                                            <li>Operators</li>
                                            <li>Control Statements</li>
                                            <li>Error Handeling</li>
                                            <li>Understanding Arrays</li>
                                            <li>Function Declaration</li>

                                        </ul>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Built In Functions<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Built In Functions</li>
                                            <li>Standard Date and Time Functions</li>
                                           
                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">HTML Forms<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>HTML Document Object Model</li>
                                            <li>Working with HTML form and its elements</li>
                                           
                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">HTML DOM<span class="icon">&plus;</span></button>
                            <div class="content">
                             
                                        <ul>
                                            <li>HTML Document object Model</li>
                                            <li>Other Document Object Model</li>
                                           
                                        </ul>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Coockies<span class="icon">&plus;</span></button>
                            <div class="content">
                              
                                        <ul>
                                            <li>Working With Coockies</li>
                                           
                                        </ul>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Object And Classes<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Working with Objects</li>
                                            <li>Call method in JavaScript</li>
                                            <li>Inheritance in JavaScript using prototype</li>
                                           
                                        </ul>
                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Bootstrap<span class="icon">&plus;</span></button>
                            <div class="content">
                                
                                        <ul>
                                            <li>Introduction of Bootstrap </li>
                                            <li>Syntax of Bootstrap </li>
                                            <li>Container and Container-ﬂuid </li>
                                            <li>Connectivity of Bootstrap in page </li>
                                            <li>Bootstrap Versions </li>
                                           
                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Bootstrap Components<span class="icon">&plus;</span></button>
                            <div class="content">
                                
                                        <ul>
                                            <li>Jumbotron </li>
                                            <li>Button </li>
                                            <li>Grid </li>
                                            <li>Table </li>
                                            <li>Form </li>
                                            <li>Alert </li>
                                            <li>Wells </li>
                                            <li>Badge and label </li>
                                            <li>Panels </li>
                                            <li>Pagination </li>
                                            <li>Pager </li>
                                            <li>Image </li>
                                            <li>Glyphicon </li>
                                            <li>Carousel </li>
                                            <li>Progress Bar </li>
                                            <li>List Group </li>
                                            <li>Dropdown </li>
                                            <li>CollapseSyntax of Bootstrap </li>
                                            <li>Container and Container-ﬂuid </li>
                                            <li>Connectivity of Bootstrap in page</li>
                                           
                                        </ul>
                                 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Bootstrap Advanced Components<span class="icon">&plus;</span></button>
                            <div class="content">
                                
                                        <ul>
                                            <li>Tabs/Pill</li>
                                            <li>Navbar </li>
                                            <li>Input Types </li>
                                            <li>Modals </li>
                                            <li>Popover</li>
                                            <li>Scrollspy </li>
                                            
                                        </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="accordion">
                            <button class="menu-button">Bootstrap Utilities<span class="icon">&plus;</span></button>
                            <div class="content">
                               
                                        <ul>
                                            <li>Bootstrap Border</li>
                                            <li>Bootstrap Clearﬁx</li>
                                            <li>Bootstrap Close Icons</li> 
                                            <li>Bootstrap Colors</li>
                                            <li>Display Flexbox</li>
                                            <li>Display Property</li>
                                            <li>Image Replacement</li>
                                            <li>Invisible Content</li>
                                            <li>Bootstrap Position</li>
                                            <li>Responsive helpers</li>
                                            <li>Screen Readers
                                            </li><li>Bootstrap sizing</li>
                                            <li>Bootstrap spacing</li>
                                            <li>Bootstrap Typography </li>
                                            
                                        </ul>
                                  
                                </div>
                            </div>
                        </div>


                    </div>

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