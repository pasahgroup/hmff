  
  <?php $__env->startSection('contents'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Main content -->
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
             <div class="container-fluid x_content">              
              
              <form  method="post" action="/inclusiveUpdate/<?php echo e($id); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
                
                <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                <div class="card-body">
                  <div>
                    <label>Tour Name</label>
                    <input class="form-control" type="text" name="tour_name" placeholder="Program Name" value="<?php echo e($program->tour_name); ?>">
                  </div>                 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
       <hr>
       <div class="form-group row">
              <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
              <button type="submit" class="btn btn-primary float-right" name="inclusiveUpdate" value="save page">Update</button>         
              </div>
                </div>
                </div>
        </div>               
        </form>

           <form  method="post" id="post_form" action="<?php echo e(route('page.store')); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
              <?php echo csrf_field(); ?>   
          </form>     
     <div class="row">
     <div class="col-12 border">
      <p><b class="text-secondary">Select Accommodation from list to Include in the Tour Name</b></p>
     </div>
        <div class="col-6 border">
          <h5>Select From List</h5>
          <form method="post" action="<?php echo e(route('inclusive.store')); ?>">
            <?php echo csrf_field(); ?>
          <?php $__currentLoopData = $inclusives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inclusive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
          <input type="hidden" name="tour_id" value="<?php echo e($id); ?>">          
          <button type="submit" class="btn btn-secondary text-left" style="margin-bottom: 2px; min-width: 400px;" name="assign" value="<?php echo e($inclusive->id); ?>">
          <?php echo e($inclusive->inclusive); ?>     <span class="fa fa-angle-right float-right"></span></button>
          <br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </form>
          </div>

        <div class="col-6 border">
             <h5>Accommodation Inclusive</h5>
             <?php if(isset($assignLists)): ?>
            <form method="post" action="<?php echo e(route('inclusive.destroy',$id)); ?>">
            <?php echo csrf_field(); ?>

          <input type="hidden" name="_method" value="delete">
          <?php $__currentLoopData = $assignLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <input type="hidden" name="tour_id" value="<?php echo e($id); ?>">
          <button type="submit" class="btn btn-success text-right" style="margin-bottom: 2px; min-width: 400px;" name="assigned" value="<?php echo e($assignList->id); ?>">
          <?php echo e($assignList->inclusive); ?>     <span class="fa fa-angle-left float-left"></span></button>
          <br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </form>
          <?php else: ?>
          <p class="alert alert-info text-center"><span class="fa fa-eye"> </span> No widget assigned</p>
          <?php endif; ?>
        </div>
      </div>
            
        </div>
    </section>
    <section>
      <a href="/programs" role="button" class="btn btn-success float-right">Finish</a>
    </section>
  </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/admins/inclusives/assignInclusiveList.blade.php ENDPATH**/ ?>