<?php $__env->startSection('content'); ?>

  <div class="container">      
        <div class="row"> 
           <div class="col-lg-12 col-md-12 col-sm-12 ">
            <p class="text-center">
              <?php if(isset($contacts->title)): ?>
             <b> <?php echo e($contacts->title); ?></b> 
              <?php endif; ?>
            </p>
           </div> 
        </div>
            <div class="row"> 
            <?php if($contacts): ?>               
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="contact-box">
                        <div class="icon-box">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="con-diss">
                            <h4> Address </h4>                        
                            
                                              <?php if(isset($contacts->address)): ?>
             <b> <?php echo e($contacts->address); ?></b> 
              <?php endif; ?>
                          
                        </div>
                    </div>
                 </div>
                <!-- item -->
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="contact-box">
                        <div class="icon-box">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="con-diss">
                            <h4> Contact No.</h4>
                            <p><?php echo e($contacts->phone); ?></p>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="contact-box">
                        <div class="icon-box">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="con-diss">
                            <h4>Email</h4>
                            <p> <a href="#"><?php echo e($contacts->email); ?></a> </p>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="contact-box">
                        <div class="icon-box">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="con-diss">
                            <h4>Website </h4>
                            <p> <a href="#"><?php echo e($contacts->website); ?></a> </p>
                        </div>
                    </div>
                </div>
                  <?php endif; ?>
                <!-- item-end -->
            </div>
            <hr>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12">
                    <div class="map" id="map" title="name">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                   <form method="post" id="post_form" action="<?php echo e(route('contacts.store')); ?>">
                             <?php echo csrf_field(); ?>
                           <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="full name" name="full_name"
                                        required="">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="email"
                                        name="email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="uname" placeholder="Subject" name="subject"
                                        required="">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone"
                                        name="phone">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" name="comment"
                                    placeholder="Your Comment"></textarea>
                            </div>
                        </div>
                         <br>
                        <button type="submit" class="btn btn-success float-right">Submit</button>
                    </form>
                </div>
            </div>       
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/website/contacts/contact.blade.php ENDPATH**/ ?>