  
  <?php $__env->startSection('contents'); ?>
  <style type="text/css">    
    .red {
    color: red;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tribe List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tribe List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of Tribe</h3>

          <div class="card-tools">
            <a href="/addtribe" class="btn btn-primary" >
              <i class="fas fa-plus"></i>New Tribe
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Tribe Name</th>              
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   
                    <?php $__currentLoopData = $tribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                    <td><?php echo e($tribe->id); ?></td>
                     <td><a href="/editTribe/<?php echo e($tribe->id); ?>"><?php echo e($tribe->tribe); ?></a></td>                   
                    <td><a href="/editTribe/<?php echo e($tribe->id); ?>"><i class="fa fa-edit"></i></a>
                     <a href="/destroyTribe/<?php echo e($tribe->id); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($tribe->tribe); ?>','Tribe')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Tribe Name</th>              
                    <th>Action</th>     
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/admins/tribes/tribe-list.blade.php ENDPATH**/ ?>