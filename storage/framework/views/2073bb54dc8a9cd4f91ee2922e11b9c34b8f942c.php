  
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

          <div class="card-tools">
           
             <a href="/students" class="btn btn-default" >
              <i class="fas fa-plus"></i> Students(<b class="red"><?php echo e($students->count()); ?></b>)
            </a>
             <a href="/trainee" class="btn btn-success" >
              <i class="fas fa-plus"></i>Trainees(<b class="red"><?php echo e($trainees); ?></b>)
            </a>
          </div>
        </div>


         <div class="card-header">
         
          <div class="card-tools">
             <a href="/lodge" class="btn btn-success" >
              <i class="fas fa-plus"></i> Lodges(<b class="red"><?php echo e($lodges); ?></b>)
            </a>
            
            
          </div>
        </div>

        
        <div class="card">
            <div class="card-body">
               <div class="span12">
              <div class="action-nav-normal">
              <div class="row-fluid">
               <div class="span2 action-nav-button">
 <?php if(Auth::user()->role == 'Admin' || Auth::user()->role =='accountant'): ?>
                        <a href="/students">
                        <i class="fa fa-users"></i>
                        <span>Students(<b class="blue"><?php echo e($students->count()); ?></b>)</span>

                        </a>

                    </div>

                  
                    <?php endif; ?>
                    <?php if(Auth::user()->role == 'Admin' || Auth::user()->role =='accountant' || Auth::user()->role =='Cultural'): ?>
                     <div class="span2 action-nav-button">
                        <a href="/trainee">

                        <i class="fa fa-users"></i>
                        <span>Trainee(<b class="blue"><?php echo e($trainees); ?></b>)</span>
                        
                        </a>

                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
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
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/admins/Dashboard/index.blade.php ENDPATH**/ ?>