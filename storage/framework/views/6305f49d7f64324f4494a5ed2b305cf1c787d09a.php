<?php $__env->startSection('content'); ?>

<style>
.bg-bannerw{
   <?php if(isset($PostcategoryImage->attachment)): ?>
  background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);
   <?php endif; ?>

    height: 70vh;
    width: 100%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
};

</style>

<style type="text/css">
  
  .p{
  color:#115b27  !important;
  }
</style>




 <?php if(isset($PostcategoryImage->attachment)): ?>
  <section class="same-section-spacing bg-bannerw">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2>About US</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About US</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php endif; ?>

  <section class="ws-section-spacing bg-gray ">
        <div class="container">

            <div class="row masonry-item">
                <div class="col-lg-12 col-md-12 col-sm-12 masonry">
                    <div class="package-detail">
                        <div class="package-list-wrap ">
                                <?php if(isset($aboutus->attachment)): ?>
                            <img src="<?php echo e(URL::asset('/storage/uploads/'.$aboutus->attachment)); ?>" class="img-fluid" alt="det-img">
                                  <?php endif; ?>
                            <div class="package-list-content">
                            <p class="package-list-duration p">Home/About us
                            </p>
                            </div>
                        </div>
                             <div class="col-lg-12">
                            <div class="package-info">
                               <p class="text-center p"><b>About US</b>
                               </p>
                           </div>
                        </div>
                          <div class="col-lg-12">
                            <div class="package-info">
                                <?php if($aboutus->introduction ?? ''): ?>
                                <h3>Introduction</h3>
                                <p class="p">
                                <?php echo e($aboutus->introduction ?? ''); ?>

                              </p>
                                <?php endif; ?>
                           </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="package-info">
                                <?php if($aboutus->mission ?? ''): ?>
                                <h3>Mission</h3>
                                <p class="p">
                                <?php echo e($aboutus->mission ?? ''); ?>

                              </p>
                                <?php endif; ?>
                           </div>
                        </div>
                          <div class="col-lg-12 p">
                            <div class="package-info">
                                <?php if($aboutus->vission ?? ''): ?>
                                <h3>Vission</h3>
                                <p class="p">
                                <?php echo e($aboutus->vission ?? ''); ?>

                                </p>
                                <?php endif; ?>
                            </div>
                         </div>
                          <div class="col-lg-12">
                            <div class="package-info">
                                <?php if($aboutus->objectives ?? ''): ?>
                                <h3>Objectives</h3>
                               <p class="p">
                                <?php echo e($aboutus->objectives ?? ''); ?>

                                </p>
                                <?php endif; ?>
                            </div>
                        </div> 
                      </div>                                           
                  

                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/website/aboutus/aboutus.blade.php ENDPATH**/ ?>