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
 
  <!-- ======= Hero Section ======= --> 
  <div id="hero" class="hero route" style="height: 90px; width: 100%; background-color: #000;">  
    
  </div><!-- End Hero Section -->

  <main id="main"> 
    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row"> 
          <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <div class="col-md-4">   
                <div class="work-box">
                  <a href="<?php echo e(asset('assets/img/work-1.jpg')); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="<?php echo e(asset('assets/img/work-1.jpg')); ?>" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">   
                        <h2 class="w-title"><?php echo e($project['title']); ?></h2>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">  
                          <a href="/projects/<?php echo e($loop->index); ?>" style="font-size: 18px;"> Details</a>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
          

        </div>
      </div>
    </section><!-- End Portfolio Section -->
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

</html><?php /**PATH D:\xampp\htdocs\portfolio\resources\views/projects.blade.php ENDPATH**/ ?>