  
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
            <h1>Lodge List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lodge List</li>
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
          <h3 class="card-title">List of Lodge</h3>

          <div class="card-tools">
            <a href="/addlodge" class="btn btn-primary" >
              <i class="fas fa-plus"></i>New Lodge
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Lodge Name</th>  
                    <th>Owner Name</th>             
                    <th>Contact</th> 
                    <th>Email</th> 
                    <th>Location</th> 
                    <th>GM_contact</th> 
                    <th>GM_email</th>
                     <th>Status</th>
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   
                    <?php $__currentLoopData = $lodges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lodge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                    <td><?php echo e($lodge->id); ?></td>
                     <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><?php echo e($lodge->lodge_name); ?></a></td>
                            <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><?php echo e($lodge->owner_name); ?></a></td>
                              <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><?php echo e($lodge->contact); ?></a></td>
                                <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><?php echo e($lodge->email); ?></a></td>
                                  <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><?php echo e($lodge->location); ?></a></td>
                                  <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><?php echo e($lodge->gm_contact); ?></a></td>
                                <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><?php echo e($lodge->gm_email); ?></a></td>    
                                 <td><?php echo e($lodge->status); ?></td>

                    <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><i class="fa fa-edit"></i></a>
                     <a href="/destroyLodge/<?php echo e($lodge->id); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($lodge->lodge_name); ?>','Lodge')"><i class="fa fa-trash red"></i></a></td>
                              
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                     <th>Lodge Name</th>  
                    <th>Owner Name</th>             
                    <th>Contact</th> 
                    <th>Email</th> 
                    <th>Location</th>
                        <th>GM_contact</th> 
                    <th>GM_email</th> 
                    <th>Status</th>             
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmacademy\resources\views/admins/lodges/lodge-list.blade.php ENDPATH**/ ?>