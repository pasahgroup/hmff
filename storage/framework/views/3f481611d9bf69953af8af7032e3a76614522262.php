<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
     <title><?php echo e($title ?? 'HM Academy'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HM Academy" name="keywords">
    <meta content="HM Academy" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->

   <link href="../website/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="../website/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
  <script src="../website/lib/jquery-3.4.1.min.js"></script>
  <link href="../css/all.min.css" rel="stylesheet">
 <link href="../css/style-shortline.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../website/css/style.css" rel="stylesheet">
    <!-- <link href="../slider_header/style.css" rel="stylesheet"> -->

     <link href="../slider_header/style_slider.css" rel="stylesheet">
</head>
   
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="#">Help</a>
                    <a class="text-body mr-3" href="#">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Login</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/login" class="dropdown-item" type="button">Login</a>
                        </div>
                    </div>
                  <!--   <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div> -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h3 text-uppercase text-primary bg-dark px-2">HM</span>
                    <span class="h3 text-uppercase text-dark bg-primary2 px-2 ml-n1" style="background-color:red">Academy</span>
                </a>
            </div>
            <div class="col-lg-5 col-6 text-left">                          
                            
                              
                                <div class="overflow-hidden" style="width: 735px;">                                 
                                <div id="note" class="ps-2">
                                   <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                    <img src="<?php echo e(URL::asset('/storage/photos/'.$student->photo)); ?>" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt="">
                                    <a href="#"><p class="text-white mb-0 link-hover"></p></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                </div>                                   
                            </div> 


            </div>
            <div class="col-lg-3 col-6 text-right">
                <b class="m-0"><?php if(isset($contact->phone)): ?><?php echo e($contact->phone); ?> <?php endif; ?></b>
                <h5 class="m-0"><?php if(isset($contact->email)): ?><?php echo e($contact->email); ?> <?php endif; ?></h5>
            </div>
        </div>
    </div>


      <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">           
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                         
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Vulnarable<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <br>
                                    <a href="/trained/trained-students" class="dropdown-item">Vulnarable Youth</a>
                                    <a href="/trained-staff/trained-staff" class="dropdown-item">Trained Staff</a>
                                    <a href="/trained-lodges/lodges" class="dropdown-item">Trained Lodges</a>
                                </div>
                            </div>

                              <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Opportunity<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <br>
                                    <a href="#" class="dropdown-item">Trainee Registration</a>
                                    <a href="#" class="dropdown-item">Vulnarable Youth Registration</a>
                                </div>
                            </div>

                               <a href="/aboutus" class="nav-item nav-link">About us</a>
                            <a href="/mailing" class="nav-item nav-link">Contact</a>
                        </div>                      
                    </div>
                </nav>
            </div>
        </div>
    </div>
   

    <!-- Navbar End -->
 <?php echo $__env->yieldContent('content'); ?>
     <!-- Featured End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
         
            <div class="col-lg-8 col-md-12">
                <div class="row">
                   
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Pages</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <!-- <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a> -->
                          <!--   <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a> -->
                        </div>
                    </div>

                     <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Trainee Registration</a>
                             <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Vulnarable Youth Registration</a>
                            <!-- <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a> -->
                          <!--   <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="/mailing"><i class="fa fa-angle-right mr-2"></i>Contact Us</a> -->
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p></p>
                       <form method="POST" id="post_form" role="form" class="registration-form" action="<?php echo e(route('subscribe.store')); ?>" enctype="multipart/form-data">

      <?php echo csrf_field(); ?>
                          
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

               <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Contact</h5>
                
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><?php if(isset($contact->address)): ?><?php echo e($contact->address); ?> <?php endif; ?></p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><?php if(isset($contact->email)): ?><?php echo e($contact->email); ?> <?php endif; ?></p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><?php if(isset($contact->phone)): ?><?php echo e($contact->phone); ?> <?php endif; ?></p>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary text-center" href="#">HM Academy</a>. All Rights Reserved by Hakuna Matata Academy.
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
   <script src="../website/lib/bootstrap.bundle.min.js"></script>
    
    <script src="../website/lib/easing/easing.min.js"></script>
    <script src="../website/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../website/mail/jqBootstrapValidation.min.js"></script>
    <script src="../website/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../website/js/main.js"></script>
</body>
</html><?php /**PATH /home/hmacadem/public_html/resources/views/website/layouts/app_hm.blade.php ENDPATH**/ ?>