  
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
            <h1>Quick Link Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quick Link Page</li>
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
          <h3 class="card-title">Page</h3>

          <div class="card-tools">
            <a href="<?php echo e(route('quickLink.create')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Page
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Page Type</th> 
                    <th>Title</th>                  
                    <th>Description</th>
                    <th>Url</th>
                    <th>Slider</th>
                    <th>Attachment</th>                 
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                     <td><a href="<?php echo e(route('EditQuickLink',$data->id)); ?>"><?php echo e($data->page_type); ?></a></td> 
                    <td><?php echo e($data->quick_title); ?></td>                    
                    <td><?php echo e($data->quick_description); ?></td>
                     <td><?php echo e($data->url); ?></td>
                     <td><?php echo e($data->slider); ?></td>
                    <td><?php echo e($data->attachment); ?></td>
                    <!-- <td><a href="<?php echo e(route('EditQuickLink',$data->id)); ?>"><i class="fa fa-edit"></i></a> <a href="#"><i class="fa fa-trash"></i></a></td>
                   -->
                    <td><a href="<?php echo e(route('EditQuickLink',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                    <a href="<?php echo e(route('QuickLink-Destroy',$data->id)); ?>" onclick="return confirm('Are you sure? You want to delete: <?php echo e($data->quick_title); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>
                  

                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                   <th>#</th>
                    <th>Page Type</th> 
                    <th>Title</th>                  
                    <th>Description</th>
                    <th>Url</th>
                    <th>Slider</th>
                    <th>Attachment</th>                 
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/admins/quickLinks/quickLink.blade.php ENDPATH**/ ?>