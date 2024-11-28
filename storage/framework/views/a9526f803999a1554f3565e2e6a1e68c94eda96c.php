  
  <?php $__env->startSection('contents'); ?>
<link href="../../img_library/main.css" rel="stylesheet">
    <link href="../../img_library/mform.css" rel="stylesheet">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Program</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit program</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Add Program
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="/updatef/<?php echo e($tours->id); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
             <input type="hidden" name="edit" value="Edit">
              <input type="hidden" name="id" value="<?php echo e($tours->id); ?>">
                <div class="card-body">
                    <div class="row">                  
                    
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Tour Name
                       </label>
                      <input type="text" class="form-control" name="tour_name"  value="<?php echo e($tours->tour_name); ?>">
                      </div>

                       <div class="col-lg-1 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Days
                       </label>
                      <input type="number" class="form-control" name="days"  value="<?php echo e($tours->days); ?>" min="1">
                      </div>

                       <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="">Cost
                       </label>
                        <input type="number" class="form-control" name="cost" value="<?php echo e($tours->cost); ?>">
                      </div>
                          
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <label class="control-label" for="">Price
                    </label>
                    <input type="number" class="form-control" name="price" value="<?php echo e($tours->price); ?>">
                    </div>

                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Currency
                       </label>
                        <select name="currency" id="" class="form-control">
                                    <option value="<?php echo e($tours->currency); ?>"><?php echo e($tours->currency); ?></option>
                                  <option>TSH</option>
                                  <option>EUR</option>
                                  <option>GBP</option>
                                  <option>USD</option>
                        </select>
                      </div>
                </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Category
                       </label>
                          <select name="category" id="" class="form-control">
                                <option><?php echo e($tours->category); ?></option>
                                     <option>Private</option>
                                      <option>Group</option>
                                    </select>
                      </div>
                                       
                           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Service Type
                       </label>
                        <select name="type" id="" class="form-control">
                                   <option><?php echo e($tours->type); ?></option>
                                          <option>Wildlife Safaris</option>
                                          <option>Hiking & Trekking</option>
                                          <option>Beach Holidays</option>
                                          <option>Combined Tours</option>
                                          <option>Day Tours</option>
                                           <option>Historical Site</option>
                                            <option>Cultural Tour</option>
                                        </select>
                      </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Style
                       </label>
                           <select name="style" id="" class="form-control">
                                           <option><?php echo e($tours->style); ?></option>
                                          <option>Basic</option>
                                          <option>Confort</option>
                                          <option>Luxury</option>
                                          <option>Premium</option>
                                        </select>
                      </div>
                         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Main
                       </label>
                           <select name="main" id="" class="form-control">
                                           <option><?php echo e($tours->main); ?></option>
                                          <option>Program</option>
                                          <option>Addon</option>
                                        </select>
                      </div>
                              
                         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Tour Code
                       </label>
                    <input type="text" name="tour_code" class="form-control" value="<?php echo e($tours->tour_code); ?>" readonly>
                      </div>
                    </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Overview
                       </label>
                       <textarea name="overview"   class="form-control" maxlength="990"><?php echo e($tours->overview); ?></textarea>
                  </div>
                 
                  <div class="col-md-12 col-sm-6 col-xs-12">
          <label class="control-label" for="first-name">Tour Highlight</label>
          <textarea name="tour_highlight" class="form-control" class="form-control" maxlength="990"><?php echo e($tours->tour_highlight); ?></textarea>
                  </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
          <label class="control-label" for="first-name">Pysical Rating</label>
          <select name="physical_rating" id="" class="form-control">
              <option><?php echo e($tours->physical_rating); ?></option>
              <option>Easy</option>
              <option>Average</option>
              <option>Demanding</option>
              <option>Challenging</option>
          </select>
          </div>

             <div class="col-md-4 col-sm-6 col-xs-12">
          <label class="control-label" for="first-name">Tour Circuit</label>
           <select name="tour_circuit" id="" class="form-control">
                                          <option value="<?php echo e($tours->tour_circuit); ?>"><?php echo e($tours->tour_circuit); ?></option>
                                          <option value="Northern Circuit">Northern Circuit</option>
                                          <option value="Southern Circuit">Southern Circuit</option>
                                          <option value="Eastern Circuit">Eastern Circuit</option>
                                            <option value="Western Circuit">Western Circuit</option>
                                              <option value="Central Circuit">Central Circuit</option>
                                        </select>
          </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
          <label class="control-label" for="popular_experience">Popular Experience</label>
          <select name="popular_experience" class="form-control">
              <option value="<?php echo e($tours->popular_experience); ?>"><?php echo e($tours->popular_experience); ?></option>
               <option>No</option>
              <option>Yes</option>              
          </select>
          </div>
        </div>
      

                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <label class="control-label" for="first-name">SEO</label>
                    <textarea name="seo" class="form-control"  maxlength="200" class="form-control"><?php echo e($tours->seo); ?></textarea>
                </div>
                <hr>
                 <div class="row">
                 <div class="col-lg-6 col-md-12 col-sm-12">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'password_confirmation','value' => __('Image')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Image'))]); ?>
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
            <div class="col-lg-6 col-md-12 col-sm-12">
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">               
              </div>
              <img src="<?php echo e(URL::asset('/storage/uploads/'.$tours->attachment)); ?>" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>
           </div>

                </div>

                <div class="form-group row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <button type="submit" class="btn btn-primary float-right">Update</button>
              </div>
                  </div>
                </div>

            </form>
          <!-- /.col-->
        </div>
    </section>
  </div>
  <script src="../../img_library/scripts.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/admins/programs/editProgram.blade.php ENDPATH**/ ?>