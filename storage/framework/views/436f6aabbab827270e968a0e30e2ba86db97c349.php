<?php $__env->startSection('contents'); ?>
 <link href="../../img_library/main.css" rel="stylesheet">
    <link href="../../img_library/mform.css" rel="stylesheet">

<div class="content-wrapper">
  <div class="cotainer">
   
      <div class="row justify-content-center">
          <div class="col-md-8">

              <div class="card">
                  <div class="card-header" style="background-color:seagreen;"><h3 class="text-center text-white">Update User</h3></div>
                  <div class="card-body">  

                 <form  method="post"  action="<?php echo e(route('user-update',$datas->id)); ?>" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                                                  
                         <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'password_confirmation','value' => __('Full Name')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Full Name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                     <div class="form-group icon_down">
                                 <input type="text" id="name" class="form-control" name="name" value="<?php echo e($datas->name); ?>" required autofocus>
                                  <?php if($errors->has('name')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                  <?php endif; ?>
                                    </div>
                                </div>
                          </div>

                          
                         <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'password_confirmation','value' => __('Email')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Email'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                     <div class="form-group icon_down">
                                     <input type="text" id="email_address" class="form-control" name="email" value="<?php echo e($datas->email); ?>" required autofocus>

                                  <?php if($errors->has('email')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                  <?php endif; ?>
                                    </div>
                                </div>
                           </div>
                         
                         <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'status','value' => __('Status')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'status','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                     <div class="form-group icon_down">
                                        <select class="form-control" name="status">
                                              <option><?php echo e($datas->status); ?></option>
                                            <option>0</option>
                                             <option>1</option>
                                            </select>
                                    </div>
                                </div>
                          
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'password_confirmation','value' => __('Role')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Role'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                     <div class="form-group icon_down">
                                        <select class="form-control" name="role">
                                              <option value="<?php echo e($datas->role); ?>"><?php echo e($datas->role); ?></option>
                                            <option value="Admin">Admin</option>\
                                             <option value="Account">Account</option>
                                            <option value="Agents">Agents</option>
                                             <option value="Employee">Employee</option>
                                            <option value="Marketing Officer">Marketing Officer</option>                                             
                                            <option value="Tour Guide">Tour Guide</option>
                                            <option value="Partiner">Partiner</option>
                                            <option value="Cultural">Cultural</option>
                                        </select>
                                    </div>
                                </div>
                             </div>

                <div class="row">
                 <div class="col-lg-3 col-md-12 col-sm-12">
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
                                </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">               
              </div>
              <img src="<?php echo e(URL::asset('/storage/user/'.$datas->photo)); ?>" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>
           </div>

                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">

                                  <div class="checkbox">

                                      <label>

                                          <input type="checkbox" name="remember"> Remember Me

                                      </label>

                                  </div>
                              </div>
                         
                          </div>

  
                   <div class="row">
                 <div class="col-lg-6 col-md-12 col-sm-12">                                    
                                   <a href="/user-list" role="button" class="btn btn-success">
                                  Back
                              </a>
                                </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
           <button type="submit" class="btn btn-primary float-right">
                                  Update
                              </button>

            </div>
           </div>
            </form>

                  </div>
              </div>

          </div>

      </div>
  </div>
</main>
<script src="../../img_library/scripts.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/auth/editUser.blade.php ENDPATH**/ ?>