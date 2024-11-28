<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HM Academy</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="../../../../assets/corporate/scripts/jquery351.min.js" type="text/javascript"></script>
  <!-- Theme style -->
  <!-- summernote -->
  <link rel="stylesheet" href="../../../../plugins/summernote/summernote-bs4.min.css">
     <link rel="stylesheet" href="../../../css/bayanno.css">
 <link href="../user/css/style.css" rel="stylesheet">


 <!-- 
  <script src="../custom/js/jquery.min.js"></script>
    <script src="../custom/js/bootstrap.min.js"></script> -->

<!-- End of Modal -->


    <!-- <link href="../custom/css/style.css" rel="stylesheet"> -->

 <!--        <link href="../../assets/pages/css/components.css" rel="stylesheet">
<link href="../../assets/pages/css/slider.css" rel="stylesheet">
  <link href="../../assets/corporate/css/style.css" rel="stylesheet">
  <link href="../../assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="../../assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../../assets/corporate/css/custom.css" rel="stylesheet"> -->



    <link rel="stylesheet" href="../../css/style.css">



</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">View Website</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
   
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
      </li>


      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/" alt="Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                 Buruhani A. Wawa
                  <span class="float-right text-sm text-danger"><i class=""></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>

 <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="">          
          <div class="logo mr-auto"><img src="<?php echo e(URL::asset('/storage/user/'.auth()->user()->photo)?? 0); ?>" style="width:60px;height:40px">
          </div>
          </i>         
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/" alt="Profile:" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                <?php echo e(auth()->user()->name); ?>

                  <span class="float-right text-sm text-danger"><i class=""></i></span>
                </h3>
                <p class="text-sm"><?php echo e(auth()->user()->email); ?></p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><?php echo e(auth()->user()->role); ?></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="/logout" class="dropdown-item dropdown-footer"><i class="fas fa-power-off" style="color: red;"></i> <b class="text-danger">Logout</b></a>
         
        </div>
      </li>
     </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="../../img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:1">
      <span class="brand-text font-weight-light">.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
   
    <?php if(Auth::user()->role =='accountant' || Auth::user()->role =='Normal' || Auth::user()->role =='owner' || Auth::user()->role =='Cultural'): ?>
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               
                Dashboard             


   <li class="nav-item">
            <a href="#" class="nav-link">
           <i class="nav-icon fas fa-users"></i>
              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/students" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student List</p>
                </a>
              </li>
         
            </ul>
          </li>
               

                   <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Trainee
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/trainee" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trainee</p>
                </a>
              </li>       
                  

            </ul>
          </li 
             </p>
            </a>
          </li>

          <?php endif; ?>
            <?php if(Auth::user()->role == 'Admin' || Auth::user()->role =='accountant' || Auth::user()->role =='Normalx'): ?>
          
  <li class="nav-item">
            <a href="/dashboard" class="nav-link">
           <i class="nav-icon fas fa-users"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
         
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
           <i class="nav-icon fas fa-users"></i>
              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/students" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student List</p>
                </a>
              </li>
         
            </ul>
          </li>

                
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Trainee
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/trainee" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trainee</p>
                </a>
              </li>       
                  

            </ul>
          </li>
    

            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Themes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/themes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>       
                        <li class="nav-item">
                <a href="/quickLink" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Content</p>
                </a>
              </li>    
                        

            </ul>
          </li>

         
   <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Constant Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          
              <li class="nav-item">
                <a href="/PostBody" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/coa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/whatWeOffer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>What We Offer</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo e(route('titles.index')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Titles</p>
                </a>
              </li>
            
            </ul>
          </li>


           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <!--  <li class="nav-item">
                <a href="/programs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programs</p>
                </a>
              </li> -->

          
         <li class="nav-item">
                <a href="/mailing" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mailing</p>
                </a>
              </li>

      <li class="nav-item">
                <a href="/designation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation</p>
                </a>
              </li>
         <!--   <li class="nav-item">
            <a href="/tourcostsummary" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Tour cost summary
             </p>
            </a>
          </li> -->
              <li class="nav-item">
                <a href="/relation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Relation</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/lodge" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lodge</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="/tribe" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tribe</p>
                </a>
              </li>
              <hr>
               <li class="nav-item">
                <a href="/assignee" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assignee</p>
                </a>
              </li>
               <hr>
                <li class="nav-item">
                <a href="/class" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Class</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/session" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Session</p>
                </a>
              </li>
              <hr>
           <!--     <li class="nav-item">
                <a href="/bank" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bank</p>
                </a>
              </li>
             
               <li class="nav-item">
                <a href="/percent" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>People Percent</p>
                </a>
              </li>
              <hr> -->
                 <li class="nav-item">
                <a href="/quickLink" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quick Link Page</p>
                </a>
              </li>
              <hr>
                  <li class="nav-item">
            <a href="/destinations" class="nav-link">
              <i class="nav-icon fas fa-paw"></i>
              <p>
                Destinations
             </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/locations" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Locations
             </p>
            </a>
          </li>        
            </ul>
          </li>
      
 
                
      <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="/user-list" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                User List
             </p>
            </a>
          </li>          
            </ul>
          </li> 
               <?php endif; ?>      
         

                 

   
        <!--   <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Quick Link
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/quickLink" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quick Link</p>
                </a>
              </li>           
            </ul>
          </li>  -->       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
<?php echo $__env->yieldContent('contents'); ?>

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="#">HM Academy</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../../dist/js/demo.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote1').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote2').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote3').summernote()
    })

  </script>

   <script src="../../img_library/scripts.js" type="text/javascript"></script>
</body>
</html>
<?php /**PATH /home/hmacadem/public_html/resources/views/admins/layouts/Apps/app.blade.php ENDPATH**/ ?>