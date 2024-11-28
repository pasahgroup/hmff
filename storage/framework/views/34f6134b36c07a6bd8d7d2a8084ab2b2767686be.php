  
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
              <form  method="post" id="post_form" action="<?php echo e(route('lodge.update',$lodges->id)); ?>">
                <?php echo csrf_field(); ?>
             <input type="hidden" name="_method" value="PUT">
          
  <div class="row">
 <div class="col-md-3">
                <div class="card-body">                       
                    <label>Lodge Name</label>
                    <input class="form-control" type="text" name="lodge_name" value="<?php echo e($lodges->lodge_name); ?>" required>
                    
             </div> 
           </div>
              <div class="col-md-3">
             <div class="card-body">                       
                    <label>Owner</label>
                    <input class="form-control" type="text" name="owner_name" value="<?php echo e($lodges->owner_name); ?>">
                    
             </div> 
             </div>
             <div class="col-md-3">
             <div class="card-body">                       
                    <label>Contact</label>
                    <input class="form-control" type="text" name="contact" value="<?php echo e($lodges->contact); ?>">
                    
             </div> 
             </div>
             <div class="col-md-3">
             <div class="card-body">                       
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" value="<?php echo e($lodges->email); ?>">
                    
             </div> 
             </div>
              </div>

                   <div class="row">         
             <div class="col-md-3">
             <div class="card-body">                       
                    <label>GM contact</label>
                    <input class="form-control" type="text" name="gm_contact" value="<?php echo e($lodges->gm_contact); ?>">
                    
             </div> 
             </div>

             <div class="col-md-3">
             <div class="card-body">                       
                    <label>GM email</label>
                    <input class="form-control" type="email" name="gm_email" value="<?php echo e($lodges->gm_email); ?>">
                    
             </div> 
             </div>


             <div class="col-md-3">
             <div class="card-body">                       
                    <label>Location</label>
                     <input class="form-control" type="text" name="location" value="<?php echo e($lodges->location); ?>">
                    
             </div> 
             </div>

              <div class="col-md-3">
             <div class="card-body">                       
                    <label>Status</label>
                    
                    <select class="form-control" name="status">
                     
                      <option><?php echo e($lodges->status); ?></option>
                      <option>None</option>
                        <option>Active</option>
                          <option>Inactive</option>
                    </select>
                                        
             </div> 
             </div>
              </div> 


      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <a href="/lodge"  role="button" class="btn btn-success float-left">View Lodge List</a>
              <button type="submit" class="btn btn-primary float-right" name="lodge" value="lodge">Update</button>         
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/admins/lodges/edit-lodge.blade.php ENDPATH**/ ?>