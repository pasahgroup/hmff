<?php $__env->startSection('content'); ?>

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Trained Lodges</span></h2>
        <div class="row px-xl-5 pb-3">
  
           <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Lodge Name</th>                           
                  </tr>
                  </thead>
                  <tbody>
                 
                         <?php $__currentLoopData = $trained_lodges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lodge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <tr>
                    <td><?php echo e($lodge->id); ?></td>
                     <td><a href="#"><?php echo e($lodge->lodge); ?></a></td>  
                                                            
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                     <th>Lodge Name</th>             
                    
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>


  </div> 
                       
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/website/vulnarable/lodge-list.blade.php ENDPATH**/ ?>