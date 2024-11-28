  
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
            <h1>Percent List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Percent List</li>
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
          <h3 class="card-title">Lists of Percent</h3>

          <div class="card-tools">
            <a href="/add-percent" class="btn btn-primary" >
              <i class="fas fa-plus"></i>New Percent
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Percent Name</th>  
                    <th>Percent(%)</th>             
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   
                    <?php $__currentLoopData = $percents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                    <td><?php echo e($percent->id); ?></td>
                     <td><a href="/edit-percent/<?php echo e($percent->id); ?>"><?php echo e($percent->percent_name); ?></a></td> 
                     <td><a href="/edit-percent/<?php echo e($percent->id); ?>"><?php echo e($percent->percent); ?></a></td>                  
                    <td><a href="/edit-percent/<?php echo e($percent->id); ?>"><i class="fa fa-edit"></i></a>
                     <a href="/destroy-percent/<?php echo e($percent->id); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($percent->percent_name); ?>','percent')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                        <th>#</th>
                    <th>Percent Name</th>  
                    <th>Percent(%)</th>             
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/admins/percent/percent.blade.php ENDPATH**/ ?>