  
  <?php $__env->startSection('contents'); ?>
   <style type="text/css">
    .red{
      color: red;
    }
    .green{
      color: green;
    }
     .blue{
      color: blue;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Welcome:<b> <?php echo e(auth()->user()->name); ?></b></h3>
        </div>


         <div class="card-header">

          <div class="card-tools">
            <a href="/students" class="btn btn-default" >
             <i class="fas fa-plus"></i> Students(<b class="red"><?php echo e($students_data); ?></b>)
           </a>
             <a href="/lodge" class="btn btn-default" >
              <i class="fas fa-plus"></i> Lodges(<b class="red"><?php echo e($lodges); ?></b>)
            </a>

            <a href="/trainee" class="btn btn-default" >
             <i class="fas fa-plus"></i>Trainees(<b class="red"><?php echo e($trainees); ?></b>)
           </a>
          </div>
        </div>


        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmacademy\resources\views/admins/Dashboard/index.blade.php ENDPATH**/ ?>