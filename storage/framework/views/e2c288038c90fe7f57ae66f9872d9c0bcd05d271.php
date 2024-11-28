  
  <?php $__env->startSection('contents'); ?>
   <style type="text/css">
    .red{
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
            <h1>Destinations Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Destinations Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Destionations</h3>
          <div class="card-tools">
            <a href="<?php echo e(route('destinations.create')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Destination
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Destination</th>
                    <th>Description</th>
                    <th>Category</th>
                     <th>Photo</th>
                    <th>Location</th>
                     <th>Popularity</th>
                     <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($data->id); ?></td>
                    <td><a href="<?php echo e(route('destinations.show',$data->id)); ?>"><?php echo e($data->destination_name); ?></a></td>
                    <td><?php echo e($data->destination_description); ?></td>
                    <td><?php echo e($data->category); ?></td>
                    <td><?php echo e($data->photo); ?></td>
                    <td><?php echo e($data->location_name); ?></td>
                     <td><?php echo e($data->popularity); ?></td>
                        <td><a href="<?php echo e(route('destination-edit',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                    <a href="<?php echo e(route('destination-Destroy',$data->id)); ?>" onclick="return confirm('Are you sure? You want to delete location: <?php echo e($data->destination_name); ?> <?php echo e($data->category); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Destination</th>
                    <th>Description</th>
                    <th>Category</th>
                     <th>Photo</th>
                    <th>Location</th>
                     <th>Popularity</th>
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/admins/destinations/index.blade.php ENDPATH**/ ?>