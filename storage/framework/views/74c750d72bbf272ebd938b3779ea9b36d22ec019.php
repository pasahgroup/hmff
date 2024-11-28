  
  <?php $__env->startSection('contents'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Page</li>
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
                
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="<?php echo e(route('session.update',$sessions->id)); ?>">
               
                <?php echo csrf_field(); ?>
             <input type="hidden" name="_method" value="PUT">
                <div class="card-body">


                      <div class="row">
<div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-3">                     
                    <label>Class Name</label>
                   
                    <select name="class_name" class="form-control">
                       <option><?php echo e($sessions->class_name); ?></option>
                      <option></option>
                       <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option><?php echo e($class->class); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    
                      <label>Session Name</label>
                     <input class="form-control" type="text" name="session_name" value="<?php echo e($sessions->session); ?>">
             </div> 
           </div>                       
                   
             </div> 
              <br>                
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>

                <a href="/session"  role="button" class="btn btn-success float-left">View Session List</a>
                    <button type="submit" class="btn btn-primary float-right" name="inclusive" value="inclusive">Update</button>   
              </div>
             </div>

            </form>
               <br>
        </div>
    </section>
  </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/admins/sessions/edit-session.blade.php ENDPATH**/ ?>