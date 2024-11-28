  
  <?php $__env->startSection('contents'); ?>


<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 -->
 <link rel="stylesheet" href="../../css/mformf.css">

<!------ Include the above in your HEAD tag ---------->

 
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-11 form-box">
                <form method="post" id="post_form" role="form" class="registration-form" action="<?php echo e(route('students.update',$datas->id)); ?>" enctype="multipart/form-data">

                    <fieldset>
                           <?php echo csrf_field(); ?>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Personal Information</h3>
                                
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Addmission number</label>
                                    <input type="text" class="form-control" placeholder="Addmission no" name="addmission_no" value="<?php echo e($datas->addmission_no); ?>">
                                </div>
                                <div class="form-group col-md-4 col-sm-6" >
                                    <label>Class</label>
                                <select class="form-control" name="class">
    <option><?php echo e($datas->class); ?></option>
                                    <option></option>
                                    <option>Vulnerable youth</option>
                               
                                </select>
                            </div>
                                 <div class="form-group col-md-4 col-sm-6">
                                    <label>Session</label>
                                <select class="form-control" name="session">
                                   <option><?php echo e($datas->session); ?></option>
                                   <option></option>
                                    <option>March 2023</option>
                                    <option>June 2023</option>
                                </select>
                            </div>
                            </div>

                               <div class="row">
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>First name</label>
                                    <input type="text" class="form-control" value="<?php echo e($datas->first_name); ?>" name="fname" >
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Middle name</label>
                                    <input type="text" class="form-control" value="<?php echo e($datas->middle_name); ?>" name="mname">
                                </div>
                                 <div class="form-group col-md-4 col-sm-6">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" value="<?php echo e($datas->last_name); ?>" name="lname">
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">

         
                               <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                          <label>Birth date</label>
                                <input type="date" class="form-control" name="birth_date" value="<?php echo e($datas->birth_date); ?>">
                            </div>
                        </div>
                                    <div class="form-group col-md-4 col-sm-4">
                                         <label>Gender</label>
                                        <select class="form-control" name="gender">
 <option><?php echo e($datas->gender); ?></option>
                                             <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>


                                      <div class="form-group col-md-4 col-sm-4">
                                         <label>Mobile number</label>
                                        <input type="text" class="form-control" value="<?php echo e($datas->mobile_no); ?>" name="mobile_no" required>
                                    </div>
                                </div>
                            </div>

    <div class="" style="margin-bottom:3px;">
                                <div class="row">

         
                               <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                       <label>Email</label>
                                <input type="email" name="email" value="<?php echo e($datas->email); ?>" class="form-email form-control">
                            </div>
                          </div>
                                    <div class="form-group col-md-4 col-sm-4">
                                         <label>Education level</label>
                                        <select class="form-control" name="education">
                                          <option><?php echo e($datas->education_level); ?></option>
                                              <option value=""></option>
                                    <option>Standard seven</option>
                                    <option>Form IV</option>
                                    <option>Form VI</option>
                                      <option>Certificate</option>

                                      <option>Diploma</option>
                                      <option>Degree</option>
                                      <option>Master</option>
                                      <option>Postponed</option>

                                      <option>Other</option>
                                      <option>None</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2 col-sm-4">

                                      <div class="form-group">
                                       <label>Year</label>
                                <input type="number" name="graduate" value="<?php echo e($datas->graduate); ?>" class="form-email form-control" name="graduate">
                            </div>
                          </div>


                                      <div class="form-group col-md-2 col-sm-4">
                                         <label>Religion</label>
                                        <select class="form-control" name="religion">
                                          <option><?php echo e($datas->religion); ?></option>
                                            <option></option>
                                            <option>Christianity</option>
                                            <option>Islamic</option>
                                            <option>Other</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

<div class="row">


   <div class="col-lg-6 col-md-12 col-sm-12">
                      

   <div class="row">
                                <div class="form-group col-md-12 col-sm-12">
                                <label>Marital status</label>
                                        <select class="form-control" name="marital_status">
                                          <option><?php echo e($datas->marital_status); ?></option>
                                            <option></option>
                                            <option>Married</option>
                                            <option>Single</option>
                                            <option>Other</option>
                                        </select>
                                </div>
                                  <div class="form-group col-md-12 col-sm-12">
                                    <label>Number of children</label>
                                    <input type="number" class="form-control" value="<?php echo e($datas->no_children); ?>" name="no_children">
                                </div>                               
                                  
                            </div>
            </div>




  <div class="col-lg-4 col-md-12 col-sm-12">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'password_confirmation','value' => __('Photo')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Photo'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <div class="form-group">
                                    <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="" style="display:block;">
                                   
                                </div>
          
            <span class="img-div float-right">
              <div class="text-center img-placeholder"  onClick="triggerClick()">               
              </div>
              <img src="<?php echo e(URL::asset('/storage/photos/'.$datas->photo)); ?>" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>

                        </div>
                            
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>
                  


                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Other Information</h3>
                             
                            </div>
                        </div>

  <div class="row">
                                 <div class="form-group col-md-4 col-sm-4">
                                         <label>Tribe</label>
                                        <select class="form-control" name="tribe">
                                           <option><?php echo e($datas->tribe); ?></option>
                                            <option></option>                                           
                                   
  <?php $__currentLoopData = $tribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <option><?php echo e($tribe->tribe); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                        </select>
                                    </div>

                                     <div class="form-group col-md-4 col-sm-4">
                                    <label>Place of origin</label>
                                    <input type="text" class="form-control" value="<?php echo e($datas->place_origin); ?>" name="place_origin">
                                </div>

                                <div class="form-group col-md-4 col-sm-4">
                                    <label>Current residence</label>
                                    <input type="text" class="form-control" value="<?php echo e($datas->current_residence); ?>" name="current_residence">
                                </div>
                                 <div class="form-group col-md-12 col-sm-12">
                                         <label>Designation</label>
                                        <select class="form-control" name="designation">
                                           <option><?php echo e($datas->designation); ?></option>
                                            <option></option>
                                           
                                             <?php $__currentLoopData = $lodges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lodge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <option><?php echo e($lodge->lodge_name); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                        </select>
                                    </div>
                                
                            </div>

                             
                             <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Gurdian</h3>
                             
                            </div>
                        </div>

                        <div class="form-bottom">


                       <div class="row">
                                 <div class="form-group col-md-4 col-sm-4">
                                       <label>Parental status</label>
                                <select class="form-control" name="parental_status">
                                   <option><?php echo e($datas->parental_status); ?></option>
                                    <option></option>
                                    <option>Both alive</option>
                                    <option>Father</option>
                                    <option>Mother</option>
                                    <option>None of Them</option>
                                </select>
                                    </div>

                      <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                     <label>Guardian name</label>
                                <input type="text" value="<?php echo e($datas->gurdian_name); ?>" class="form-email form-control" name="gurdian_name">
                            </div>
                          </div>

                                 
                                
                            </div>

                              <div class="row">
                                 <div class="form-group col-md-4 col-sm-4">
                                         <label>Relationship</label>
                                        <select class="form-control" name="relationship" id="relationship">
                                           <option><?php echo e($datas->relationship); ?></option>
                                            <option></option>
                                           
                                             <?php $__currentLoopData = $relations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <option><?php echo e($relation->relation); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                        </select>
                                    </div>

                      <div class="form-group col-md-4 col-sm-4">
                        <label>Mobile Number</label>
                                      <div class="form-group">
                                     
                                <input type="text" value="<?php echo e($datas->guardian_mobile); ?>" class="" name="guardian_mobile">
                            </div>
                          </div>

                               
                                
                            </div>

                            <button type="button" class="previous btn-previous">Previous</button>
                            <button type="submit" class="submit float-right">Update</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
        $(document).ready(function () {
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"]').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function (e) {

        $(this).find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                $(this).removeClass('input-error');
            }
        });

    });
   
});
    </script>

    <script src="../../img_library/scripts.js" type="text/javascript"></script>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/admins/students/edit-student.blade.php ENDPATH**/ ?>