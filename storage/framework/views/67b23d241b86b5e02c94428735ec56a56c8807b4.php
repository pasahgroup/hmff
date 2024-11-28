<?php $__env->startSection('content'); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/website/vulnarable/vulnarable.blade.php ENDPATH**/ ?>