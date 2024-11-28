 
  <?php $__env->startSection('contents'); ?>


<section class="user-profile section">
    <div class="container">
        <div class="row widget">
            <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user">
                        <!-- User Image -->
                        <div class="image d-flex justify-content-center">
                            <img src="<?php echo e(URL::asset('/storage/photos/'.$student->photo)); ?>" alt="" class="">
                        </div>
                        <!-- User Name -->
                        <h5 class="text-center"><?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?> <?php echo e($student->last_name); ?></h5>
                        <p class="text-center"><?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?> <?php echo e($student->last_name); ?></p>
                    </div>
                    <!-- Dashboard Links -->
                    <div class="widget dashboard-links">

                        <input type="text" class="form-control" name="classg" value="<?php echo e($student->last_name); ?>">
                          <input type="text" class="form-control" name="session" value="<?php echo e($student->last_name); ?>">

                       <div><a class="my-1 d-inline-block" href="">Addmission: <b><?php echo e($student->addmission_no); ?></b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Session: <b><?php echo e($student->session); ?></b></a></div>
                       
                        <div><a class="my-1 d-inline-block" href="">Mobile: <b><?php echo e($student->mobile_no); ?></b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Email: <b><?php echo e($student->email); ?></b></a></div>
                          <div><a class="my-1 d-inline-block" href="">Marital status: <b><?php echo e($student->marital_status); ?></b></a></div>
                        <div><a class="my-1 d-inline-block" href="">No of Children: <b><?php echo e($student->no_children); ?></b></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
                <!-- Edit Profile Welcome Text -->
                <div class="widget welcome-message">
                    <h3>Summary Report</h3>
                </div>
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="widget personal-info">
                            <h3 class="widget-header user">Extras Information</h3> 
                             <div><a class="my-1 d-inline-block" href="">Birth Date: <b><?php echo e($student->birth_date); ?></b></a></div>
                             <div><a class="my-1 d-inline-block" href="">Gender: <b><?php echo e($student->gender); ?></b></a></div>
                             <div><a class="my-1 d-inline-block" href="">Religion: <b><?php echo e($student->religion); ?></b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Tribe: <b><?php echo e($student->tribe); ?></b></a></div>
                         <div><a class="my-1 d-inline-block" href="">Parental status: <b><?php echo e($student->parental_status); ?></b></a></div>

                        <hr>  
                            <div><a class="my-1 d-inline-block" href="">Education Level: <b><?php echo e($student->education_level); ?></b></a></div> 
                             <div><a class="my-1 d-inline-block" href="">Year of Complete: <b><?php echo e($student->graduate); ?></b></a></div>                         
                        <hr>
                              <div><a class="my-1 d-inline-block" href="">Current residence: <b><?php echo e($student->current_residence); ?></b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Place of Origin: <b><?php echo e($student->place_origin); ?></b></a></div> 
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- Change Password -->
                    <div class="widget change-password">
                        <h3 class="widget-header user">Guardian detail</h3> 
                <div>Guardian relationship: <b><?php echo e($student->relationship); ?></b></div>                       
                   <div>Guardian name: <b><?php echo e($student->gurdian_name); ?></b></div> 
                   <div>Guardian mobile: <b><?php echo e($student->guardian_mobile); ?></b></div>
                    </div> 


                                       <div class="widget change-password">
                        <h3 class="widget-header user">Designation</h3>                        
                   <div>Current designation: <b><?php echo e($student->designation); ?></b></div>
                    <div>Current location: <b><?php echo e($student->located); ?></b></div>
                    </div>  
                    </div>
                    <div class="row">
                       <?php if($search =='sflag'): ?>
                 <a href="/students" class="btn btn-primary">
              <i class="fa fa-angle-double-left"></i>
            </a>
            <?php endif; ?>

                    <?php if($search =='iflag'): ?>


          <form method="post" id="post_form" role="form" class="registration-form" action="<?php echo e(route('search',$student->class,$student->session)); ?>" enctype="multipart/form-data">

      <?php echo csrf_field(); ?>
             <input type="hidden" name="user_id" value="POST">

 
<button type="submit" role="button" class="btn btn-primary"> <i class="fa fa-angle-double-left"></i></button>
           </form> 
            <?php endif; ?>


<div class="float-right">
                  <?php if(Auth::user()->role =='Admin'): ?>
                <a href="/editStudent/<?php echo e($student->id); ?>" class="btn btn-success float-right">
              <i class="fas fa-pencil-alt"></i> Edit
            </a>
<?php endif; ?>
            </div> 
        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/admins/students/user-details.blade.php ENDPATH**/ ?>