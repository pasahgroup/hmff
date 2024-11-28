  
  <?php $__env->startSection('contents'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Percent</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Percent</li>
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
              <form  method="post" id="post_form" action="<?php echo e(route('percent.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="card-body">                       
                    <label>Percent Name</label>
                    <input class="form-control" type="text" name="percent_name" placeholder="percent name">
                    <label>Percent</label>
                    <input class="form-control" type="number" name="percent" min="0.00" max="100" placeholder="percent">                    
             </div>

      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <a href="/percent"  role="button" class="btn btn-success float-left">View Percent List</a>
              <button type="submit" class="btn btn-primary float-right">Save</button>         
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/admins/percent/addPercent.blade.php ENDPATH**/ ?>