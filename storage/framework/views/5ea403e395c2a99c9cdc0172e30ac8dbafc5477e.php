<?php $__env->startSection('content'); ?>


   <!-- Libraries Stylesheet -->
    <!-- <link href="../website/lib/animate/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="../website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="../website/css/style.css" rel="stylesheet"> -->
    <!-- Carousel Start -->


<!--   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  
 -->
    <!-- Font Awesome -->
  

    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCount-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                    <div class="carousel-inner">                      
                       <?php if(isset($slider_first)): ?>
                        <div class="carousel-item position-relative active" style="height: 500px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slider_first->attachment ?? '')); ?>" style="object-fit: cover;" alt="No Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slider_first->title); ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?php echo e($slider_first->description); ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slider_first->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 500px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slides->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slides->title); ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?php echo e($slides->description); ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slider_first->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php if(isset($slider1)): ?>
                <div class="product-offer mb-30" style="height: 230px;">
                    <img class="img-fluid" src="<?php echo e(URL::asset('/storage/uploads/'.$slider1->attachment)); ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo e($slider1->title); ?></h6>
                           <a href="/detail-page/<?php echo e($slider1->id); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                  <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>
                
<?php if(isset($slider2)): ?>
                <div class="product-offer mb-30" style="height: 240px;">
                    <img class="img-fluid" src="<?php echo e(URL::asset('/storage/uploads/'.$slider2->attachment)); ?>" alt="" style="object-fit: cover;">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo e($slider2->title); ?></h6>
                        <a href="/detail-page/<?php echo e($slider2->id); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                  <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>
            </div>
        </div>
    </div>
  
    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Trained Students</span></h2>
        <div class="row px-xl-5 pb-3">
 <?php $__currentLoopData = $student_webs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="#">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="<?php echo e(URL::asset('/storage/photos/'.$student->photo)); ?>" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></h6>
                            <small class="text-body"><?php echo e($student->session); ?></small>
                        </div>
                    </div>
                </a>
            </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </div>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-9 pb-1">
  
</div> 
  <div class="col-lg-2 col-md-2 col-sm-2 pb-1">
  <a href="/login" target="_blank" class="btn btn-primary float-right">Explore More</a>
</div>
</div>
       
                       
    </div>
    <!-- Categories End -->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
           
            <div class="col-md-4">                     
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCountFooter1-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                       <div class="carousel-inner">                      
                       
                        <?php if(isset($footer1)): ?>
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$footer1->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($footer1->title); ?></h2>
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($footer1->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $footer1_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide_f1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slide_f1->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slide_f1->title); ?></h1>
                                   
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slide_f1->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            


             <div class="col-md-4">                     
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCountFooter2-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                       <div class="carousel-inner">                      
                        
                         <?php if(isset($footer2)): ?>
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$footer2->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($footer2->title); ?></h2>
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($footer2->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $footer2_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide_f2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slide_f2->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slide_f2->title); ?></h1>
                                   
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slide_f2->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>



           <div class="col-md-4">                     
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCountFooter3-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                       <div class="carousel-inner">                      
                       

 <?php if(isset($footer3)): ?>
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$footer3->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($footer3->title); ?></h2>
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($footer3->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $footer3_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide_f3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slide_f3->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slide_f3->title); ?></h1>
                                   
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slide_f3->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Offer End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/website/home/index.blade.php ENDPATH**/ ?>