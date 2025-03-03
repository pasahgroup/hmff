  <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <!-- summernote -->
<main class="login-form">
  <div class="cotainer">

      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                 
        <div>
    <!-- Content Header (Page header) -->
         <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Well!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>

 <?php if($message = Session::get('info')): ?>
  <div class="alert alert-warning">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Ops!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>   

 <?php if($message = Session::get('error')): ?>
  <div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Sorry!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>     
</div>
                  <div class="card-header">Login</div>             
  
                  <div class="card-body">

        <div class="form-group row">

                              <label for="email_address" class="col-md-4 col-form-label text-md-right"></label>

                              <div class="col-md-4">

                                  <img src="../../img/logo.png" style="height: 100px;width: 300;" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

                              </div>
                          </div>

                      <form action="<?php echo e(route('login.post')); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                          <div class="form-group row">

                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                              <div class="col-md-6">

                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>

                                  <?php if($errors->has('email')): ?>
                                     <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                  <?php endif; ?>

                              </div>
                          </div>

  

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>

                                  <?php if($errors->has('password')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                  <?php endif; ?>
                              </div>

                          </div>

  

                          <div class="form-group row">

                              <div class="col-md-6 offset-md-4">

                                  <div class="checkbox">

                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me

                                      </label>

                                  </div>

                              </div>

                          </div>

  

                          <div class="col-md-6 offset-md-4">

                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>

                          </div>
                        </form>                        

                  </div>
              </div>

          </div>

      </div>

  </div>

</main><?php /**PATH C:\xampp\htdocs\hmacademy\resources\views/auth/login.blade.php ENDPATH**/ ?>