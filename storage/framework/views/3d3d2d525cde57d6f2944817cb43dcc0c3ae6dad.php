  
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
            <h1>User List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                           <a href="/new-user" class="btn btn-primary"> <i class="fa fas fa-plus"></i> Add user</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
       
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Full name</th>
                    <th>Email</th>
                     <th>Photo</th>
                    <th>Role</th>
                    <th>Status</th>
                     <th>Updated at</th>  
                     <th>Action</th>                   
                   
                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="<?php echo e(route('user-show',$data->id)); ?>"><?php echo e($data->name); ?></a></td>
                    <td><?php echo e($data->email); ?></td>
                      <td><div class="logo mr-auto"><img src="<?php echo e(URL::asset('/storage/user/'.$data->photo)); ?>" width="60" height="40"></div></td>
                    <td><?php echo e($data->role); ?></td>
                    <td><?php echo e($data->status); ?></td>
                     <td><?php echo e($data->updated_at); ?></td>
                    <td><a href="<?php echo e(route('user-show',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                    <a href="<?php echo e(route('user-destroy',$data->id)); ?>" onclick="return confirm('Are you sure? You want to delete User: <?php echo e($data->name); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                   <tr>
                   <th>#</th>
                    <th>Full name</th>
                    <th>Email</th>
                     <th>Photo</th>
                    <th>Role</th>
                    <th>Status</th>
                     <th>Updated at</th>  
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/auth/user.blade.php ENDPATH**/ ?>