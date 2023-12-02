<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Portfolio - O2bd</title>
    <link rel="shortcut icon" href="assets/images/logo/favourite_icon.svg">

    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-pro.css">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- Meanmenu - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/meanmenu.min.css">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/cursor.css">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

    <!-- Select - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/odometer.css">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  </head>


  <body>

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

    <!-- Preloder start -->
    <div id="preloader">
      <div class="sk-three-bounce">
          <div class="sk-child sk-bounce1"></div>
          <div class="sk-child sk-bounce2"></div>
          <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
    <!-- Preloder start -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
          <div class="offcanvas__wrapper">
              <div class="offcanvas__content">
                <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                      <a href="Home">
                      <img src="assets/images/logo/site_logo_white.svg" alt="logo not found">
                      </a>
                    </div>
                    <div class="offcanvas__close">
                      <svg class="menu-close-btn" xmlns="http://www.w3.org/2000/svg" width="33.666" height="33.666" viewBox="0 0 33.666 33.666"><path d="m1.414 1.414 30.83763383 30.83763383"></path><path d="M1.414 32.252 32.25163383 1.41436617"></path></svg>
                    </div>
                </div>
                <div class="mobile-menu fix mb-4"></div>
                <div class="offcanvas__contact text-center">
                    <h4 class="offcanvas__title">Contact Info</h4>
                    <div class="offcanvas__contact-text mb-2">
                      <p><a href="https://html.bdevs.net/cdn-cgi/l/email-protection#5b2b3a293a3f34231b3e233a362b373e" target="_blank"><span class="__cf_email__" data-cfemail="374756455653584f77524f565a475b521954585a">[email&#160;protected]</span></a></p>
                      <span><a href="tel:01729277765">01729277765</a></span>
                    </div>
                    <div class="offcanvas__contact-text">
                      <p><a target="_blank" href="https://www.google.com/maps">17, 5th Floor, R. Amin Trade Centre,KDA Ave, Khulna 9100</a></p>
                    </div>
                </div>
                <div class="offcanvas__devider"></div>
                <div class="offcanvas__social">
                    <ul>
                      <li><a target="_blank" href="https://www.facebook.com/">Facebook</a></li>
                      <li><a target="_blank" href="https://www.instagram.com/">Instagram</a></li>
                      <li><a target="_blank" href="https://www.twitter.com/">Twitter</a></li>
                      <li><a target="_blank" href="https://www.linkedin.com/">Linkedin</a></li>
                    </ul>
                </div>
              </div>
          </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

        <!-- Start of Header -->
        <?php include ('include/header.php');?>
        <!-- End of Header -->
      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner text-center">
          <div class="container decoration_wrap">
            <h1 class="page_title">Portfolio Modern</h1>
            <ul class="breadcrumb_nav unordered_list_center">
              <li><a href="Home">Home</a></li>
              <li>Portfolio Modern</li>
            </ul>

            <div class="deco_item shape_1 wow fadeInUp" data-wow-delay=".1s">
              <img src="assets/images/shapes/shape_circle_1.svg" data-parallax='{"y" : -140, "smoothness": 10}' alt="Paradox - Shape Image">
            </div>
            <div class="deco_item shape_2 wow rotateInDownRight" data-wow-delay=".1s">
              <img src="assets/images/shapes/shape_circle_half_1.svg" data-parallax='{"y" : 200, "smoothness": 10}' alt="Paradox - Shape Image">
            </div>
            <div class="deco_item shape_3 wow fadeInDown">
              <img src="assets/images/shapes/shape_1.svg" data-parallax='{"x" : -200, "smoothness": 10}' alt="Paradox - Shape Image">
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Portfolio Section - Start
        ================================================== -->
        <section class="portfolio_section section_space_lg">
          <div class="container">
            <div class="button-group filters-button-group">
              <div class="portfolio_button">
                <button class="active" data-filter="*">View All</button>
                <button data-filter=".graphics">Graphics</button>
                <button data-filter=".uiux">UI/UX</button>
                <button data-filter=".wordpress">WordPress</button>
                <button data-filter=".webdesign">Web Design</button>
              </div>
            </div>
            
            <div class="row grid">
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item graphics">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_4.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">Graphics</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Taxi car for online transportation 
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item uiux">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_3.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">UI/UX</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Landing Page Marketing Theme
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item wordpress">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_2.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">WordPress</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Location Tracking 3D Illustration
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item webdesign">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_1.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">Web Design</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Website Redesign
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item webdesign">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_5.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">Web Design</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Location Tracking 3D Illustration
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item wordpress">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_6.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">WordPress</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Furniture E-Commerce App
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item uiux">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_7.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">UI/UX</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Landing Page Marketing Theme
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item graphics">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_1.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">Graphics</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Taxi car for online transportation 
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col col-xl-4 col-lg-4 col-md-6 element-item webdesign">
                <div class="portfolio_item layout_grid text-center">
                  <div class="item_image">
                    <a href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_lfi_image_5.jpg" alt="Paradox Portfolio Image">
                    </a>
                  </div>
                  <div class="item_content">
                    <ul class="category_list unordered_list_center">
                      <li><a href="#!">Web Design</a></li>
                    </ul>
                    <h3 class="item_title mb-0">
                      <a href="portfolio_details.html">
                        Location Tracking 3D Illustration
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="pagination_wrap">
              <ul class="pagination_nav unordered_list_center">
                <li><a href="#!"><i class="far fa-angle-left"></i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li><a href="#!">2</a></li>
                <li><a href="#!">3</a></li>
                <li><a href="#!"><i class="far fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </section>
        <!-- Portfolio Section - End
        ================================================== -->

        <!-- Calltoaction Section - start
        ================================================== -->
        <div class="calltoaction_section style_1 bg_primary">
          <div class="container">
            <div class="row align-items-center">
              <div class="col col-lg-6 order-lg-last">
                <div class="cta_image decoration_wrap">
                  <img src="assets/images/calltoaction/cta_image_1.png" alt="Paradox Call To Action Image">
                  <div class="deco_item shape_1">
                    <img class="wow zoomIn" data-wow-delay=".1s" src="assets/images/shapes/shape_circle_3.svg" alt="Paradox Shape Image">
                  </div>
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="cta_content">
                  <div class="section_heading text-white">
                    <h2 class="heading_subtitle text-uppercase">
                      <span class="double_icon">
                        <i class="fas fa-sharp fa-square-full"></i>
                        <i class="fas fa-sharp fa-square-full"></i>
                      </span>
                      <span>Get In Touch</span>
                    </h2>
                    <h3 class="heading_title mb-30">
                      Ready to Get Started A New Project ?
                    </h3>
                  </div>
                  <a href="pricing.html" class="bd-btn-link btn_warning">
                    <span class="bd-button-content-wrapper">
                       <span class="bd-button-icon">
                        <i class="fa-light fa-arrow-right-long"></i>
                       </span>
                       <span class="pd-animation-flip">
                          <span class="bd-btn-anim-wrapp">
                             <span class="bd-button-text">Get started</span>
                             <span class="bd-button-text">Get started</span>
                          </span>
                       </span> 
                    </span>
                 </a>
                </div>
              </div>
            </div>
          </div>
        </div>        
        <!-- Calltoaction Section - end
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->

        <!-- Start of Header -->
        <?php include ('include/footer.php');?>
        <!-- End of Header -->


    </div>
    <!-- Body Wrap - End -->

    <!-- Fraimwork - Jquery Include -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-dropdown-ml-hack.js"></script>

    <!-- animation - jquery include -->
    <script src="assets/js/cursor.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tilt.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- Carousel - Jquery Include -->
    <script src="assets/js/slick.min.js"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="assets/js/magnific-popup.min.js"></script>

    <!-- Select - Jquery Include -->
    <script src="assets/js/nice-select.min.js"></script>
    
    <!-- Counter - Jquery Include -->
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>

    <!-- Isotope Filter - Jquery Include -->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- Meanmenu Filter - Jquery Include -->
    <script src="assets/js/meanmenu.min.js"></script>

    <!-- Masonry - Jquery Include -->
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- Countdown Timer - jquery include -->
    <script src="assets/js/countdown.js"></script>

    <!-- Type - jquery include -->
    <script src="assets/js/type.js"></script>

    <!-- Setting - jquery include -->
    <script src="assets/js/setting.js"></script>

    <!-- Custom - Jquery Include -->
    <script src="assets/js/main.js"></script>

  </body>

</html>