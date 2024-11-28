  
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
            <h1>About us Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About us Page</li>
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
          <h3 class="card-title">About us body</h3>

          <div class="card-tools">
          <a href="<?php echo e(route('coa-About')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i>About us
            </a>
          </div>
             <div class="card-tools">
              <br>
             </div>
           <div class="card-tools">
         

          </div>
        </div>
        <div class="card-body">
            <div class="card-body">

     <!-- panel aboutus -->
      <div name="aboutus-panel" id="aboutus-panel">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                     <th>Category</th>
                    <th>Introduction</th>
                    <th>Mission</th>
                    <th>Vission</th>  
                    <th>Objectives</th>                
                       <th>Action</th>
                      
                  </tr>
                  </thead>
                  <tbody>
                   
                      <?php $__currentLoopData = $aboutUs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                    <td><a href="/editAboutus"><?php echo e($data->id); ?></td>
                     <td><a href="/editAboutus"><?php echo e($data->category); ?></td>
                     <td><?php echo e($data->introduction); ?></a></td>
                    <td><?php echo e($data->mission); ?></td>
                      <td><?php echo e($data->vission); ?></td>
                    <td><?php echo e($data->objectives); ?></td>
                   
                           <td><a href="/editAboutus"><i class="fa fa-edit"></i></a> 
                         <a href="/destroy-Aboutus/<?php echo e($data->id); ?>" onclick="return confirm('Are you sure? You want to delete: <?php echo e($data->category); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>                  
                    <th>#</th>
                     <th>Category</th>
                    <th>Introduction</th>
                    <th>Mission</th>
                    <th>Vission</th>  
                    <th>Objectives</th>                
                    <th>Action</th>  
                  </tr>
                  </tfoot>
                </table>
</div>
  </div>

        </div>   
      </div>
     </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">  
    let title = document.getElementById('title');
    //letcc=title.style.display = 'none';
    //letcc2=title.style.display = 'show';

      function showHide() {
        let doc = document.getElementById('post_category')

        if (doc.value == "Contact") {

            document.getElementById('contact-panel').style.display = 'block'

           document.getElementById('aboutus-panel').style.display = 'none'
           document.getElementById('other-panel').style.display = 'none'
                       } 

          else if(doc.value =="About us"){
          document.getElementById('contact-panel').style.display = 'none'

           document.getElementById('aboutus-panel').style.display = 'block'
           document.getElementById('other-panel').style.display = 'none'
                  }

        else
        {
         document.getElementById('other-panel').style.display = 'block'
         document.getElementById('contact-panel').style.display = 'none'
         document.getElementById('aboutus-panel').style.display = 'none'
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/admins/coa/aboutus.blade.php ENDPATH**/ ?>