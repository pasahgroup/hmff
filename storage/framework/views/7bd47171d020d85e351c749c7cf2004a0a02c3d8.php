<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active"><?php echo e($detail->title); ?></span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    
                    <div class="carousel-inner bg-light">                       
                             
                             <div class="carousel-item active">
                          <div class="row px-xl-5">
            <div class="col-lg-6 mb-30" style="height: 480px;">
                    <img class="w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$detail->attachment)); ?>" alt="Image">
            </div>   
                        

                          <div class="col-lg-6 mb-30">
                           <div class="h-100 bg-light p-30">
                        <h4><?php echo e($detail->title); ?></h4>
                   
                  
                    
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Description:</strong>
                       <p class="mb-4"><?php echo e($detail->description); ?></p>
                    </div>
                   
                        <a type="button"  class="btn btn-primary px-3" href="/detailp/<?php echo e($detail->id); ?>"><i class="#"></i>Read More</a>
                                     
                </div>



                        </div>
                        </div> 

                        </div>  

                           <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               
                        <div class="carousel-item">
             <div class="row px-xl-5">
            <div class="col-lg-6 mb-30" style="height: 480px;">
                            <img class="w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slides->attachment)); ?>" alt="Image">
                                               </div>   
                        

                        <div class="col-lg-6 mb-30">
                           <div class="h-100 bg-light p-30">
                    <h4><?php echo e($slides->title); ?></h4>
                   
                  
                    
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Description: bnm</strong>
                       <p class="mb-4"><?php echo e($slides->description); ?></p>
                    </div>
                    <a  type="button" class="btn btn-primary px-3" href="/"><i class="fa fa-angle-double-left"></i> </a>
                      <a type="button"  class="btn btn-primary px-3" href="/detailp/<?php echo e($slides->id); ?>"><i class="#"></i>Read More</a>                                     
                      </div>



                        </div>
                        </div> 
                        </div>                   
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
        

         <div class="d-flex align-items-center mb-4 pt-2">                       
                        <a  type="button" class="btn btn-primary px-3" href="/"><i class="fa fa-angle-double-left"></i> </a>
                    </div>

                        </div>

        </div>
    </div>

    <!-- Shop Detail End -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/website/detailPage/detail-page.blade.php ENDPATH**/ ?>