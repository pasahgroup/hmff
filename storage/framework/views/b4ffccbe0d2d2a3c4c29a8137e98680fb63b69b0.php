  
  <?php $__env->startSection('contents'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Programs Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Programs Page</li>
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
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Phone</th>
                    <th>Email</th>
                     <th>Status</th>
                     <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($contact->id); ?></td>               
                    <td><?php echo e($contact->full_name); ?></td>
                    <td><?php echo e($contact->subject); ?></td>
                    <td><?php echo e($contact->comment); ?></td>  
                    <td><?php echo e($contact->phone); ?></td>       
                    <td><?php echo e($contact->email); ?></td>

                    <td>
  
 <select class="status" name="status" id="status" class="form-control">
 <option value="<?php echo e($contact->id); ?>">Active</option> 
<option value="<?php echo e($contact->id); ?>">Inactive</option> 

<?php if($contact->status =='Active'): ?>  
<option value="<?php echo e($contact->id); ?>">Active</option>         
<?php else: ?>
     <option value="<?php echo e($contact->id); ?>">Inactive</option> 
<?php endif; ?>
 </select>  
 </td>
                   
                    <td><?php echo e($contact->created_at); ?></td>              
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                   <th>#</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Date</th>
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


  <script type="text/javascript"> 
    //  function getURL(){
    //     url2=window.location.href;
    //       alert(url2);
    // }
 
    var APP_URL = <?php echo json_encode(url('/')); ?>

       // var base_url = '<?php echo e(URL::asset('/')); ?>';
          // var base_url = '<?php echo e(URL('/')); ?>';
         //url=window.location.href;

      //alert(res[0]);
    $(".status").change(function(){
      // var APP_URL = '<?php echo e(URL::asset('/')); ?>';
       url=window.location.href;
       pathname=window.location.pathname;
      // url3=window.location.protocol;
       //host=window.location.host;
        search=window.location.search;
       // loc=window.location;
         //alert(url);
      
 
if(search.length ===0)
{
  window.location.href =url + "/"+ $(this).val();
}
else
{
  var res = url.match("http(.*)");
  window.location.href =res[0] + "/"+ $(this).val();
}
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/public_html/resources/views/admins/contacts/contactsComment.blade.php ENDPATH**/ ?>