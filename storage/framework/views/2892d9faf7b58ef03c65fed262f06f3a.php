<html lang="en">  

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  <title>Portfolio website - Sapnil Suad</title> 
  <meta content="" name="description">
  <meta content="" name="keywords"> 

  <!-- Vendor CSS Files -->    
  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File --> 
  <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet"> 
 
</head>

<body>
 
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
 
      <h1 class="logo"><a href="http://localhost:8000/">Portfolio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
 
      <nav id="navbar" class="navbar"> 
        <ul>    
          <li><a class="nav-link" href="http://localhost:8000">Home</a></li> 
          <li><a class="nav-link" href="http://localhost:8000/#about">About</a></li>   
          <li><a class="nav-link" href="/work-experience">Work experience</a></li>
          <li><a class="nav-link active" href="/projects">Projects</a></li>      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i> 
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="hero hero-single route bg-image" style="background-image: url(<?php echo e(asset('assets/img/overlay-bg.jpg')); ?>)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table" >
      <div class="table-cell"> 
        <div class="container"> 
          <h2 class="hero-title mb-4">project Details</h2>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
 
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('assets/img/portfolio-details-1.jpg')); ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo e(asset('assets/img/portfolio-details-2.jpg')); ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo e(asset('assets/img/portfolio-details-3.jpg')); ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>  
          </div>

          <div class="col-lg-4"> 
            <div class="portfolio-description">  
              <h2><?php echo e($project['title']); ?></h2>  
              <p>  
                <?php echo e($project['description']); ?>

              </p>
            </div> 
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Sapnil Suad</strong>. All Rights Reserved</p>
            <div class="credits">  
              Designed by <a href="#">Sapnil Suad</a>
            </div>
          </div> 
        </div>
      </div>
    </div> 
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->  
  <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/typed.js/typed.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->   
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH D:\xampp\htdocs\portfolio\resources\views/details.blade.php ENDPATH**/ ?>