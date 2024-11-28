<?php $__env->startSection('content'); ?>

   <style type="text/css">
.bg-color{
  background-color:#93c192;
}
</style>





  <section class="">
    <div class="south-search-area ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form bg-color">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search Tour By</p>
                        </div>
                        <!-- Search Form -->
                         <form  method="post"  action="<?php echo e(route('tailorMade.store')); ?>">
                             <?php echo csrf_field(); ?>
                            <div class="row">
  <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#">Create Tailor Made</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                          <a href="/tailorClientForm" role="button" class="btn btn-primary">Existing Tailor Made</a>
                                    </div>
                                </div>
<br>
                               <!--  <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="input" placeholder="Keyword">
                                    </div>
                                </div> -->

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                     <input type="hidden" class="form-control" name="price" value="">

                                   <input type="hidden" class="form-control" name="currency" value="">                                
                                        <input type="text" name="first_name" class="form-control" placeholder="first name" min="2">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">                              
                                        <input type="text" name="last_name" class="form-control" placeholder="last name" min="2">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nationality" placeholder="Nationality" min="2">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 col-xl-4">
                                    <div class="form-group">
                                      <input type="number" class="form-control" name="phone" placeholder="phone">
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 col-xl-4">


                                    <div class="form-group">
                                        <input type="date" name="arrival_date" id="arrival_date" class="form-control" placeholder="From" value="" required>
                                      
                             
                                    </div>
                                </div>

                             <div class="col-6 col-md-4 col-xl-3">
                                   <label for="">Adults(>16yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" placeholder="0" name="adults" min="0">
                                    </div>
                                </div>
                                 <div class="col-6 col-md-4 col-xl-3">
                                    <label for="">Teens(13-14yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" placeholder="0" name="teens" min="0">
                                    </div>
                                </div>
                                 <div class="col-6 col-md-4 col-xl-3">
                                   <label for="">Children (5-12 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" placeholder="0" name="children" min="0">
                                    </div>
                                </div>
                                 <div class="col-6 col-md-4 col-xl-3">
                                     <label for="">Days:</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" placeholder="0" name="days" min="0">
                                    </div>
                                </div>




   <div class="col-6 col-md-4 col-lg-4">
      <label for="">Tour Type:</label>
                                            <div class="form-group">
                                               <select class="selectpicker search-fields form-control" name="tour_type">
                                              <option value="0">--Select tour type--</option>
                                            <option value="Safaris">Wildlife Safaris</option>
                                            <option value="Trekking">Mt.Trekking & Hiking</option>
                                              <option value="Holidays">Beach Holidays</option>
                                            <option value="Historical_sites">Historical Sites</option>
                                            <option value="Other">Other</option>
                                        </select>
                                            </div>
                                        </div>



     <div class="col-6 col-md-4 col-lg-4">
                                             <label for="">Accomodation:</label>
                                    <div class="form-group icon_down">                                     
                                        <select class="selectpicker search-fields form-control" name="accomodation">
                                           <option value="0">--Select Accomodation--</option>
              <option value="Basic">Basic</option>
              <option value="Comfort">Comfort</option>
                <option value="Deluxe">Deluxe</option>
              <option value="Mix">Mix</option>
              <option value="Not sure">Not sure</option>
                                        </select>
                                    </div>
                                        </div>


   <div class="col-6 col-md-4 col-lg-4">

                                                <label for="">Destination:</label>
                                            <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="destination" placeholder="Destination" min="0">
                                    </div>
                                            </div>
                                        </div>



  <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#"><strong>Budget (Budget Range):</strong></a>
                                    </div>                                  
                                </div>



    <div class="col-6 col-md-4 col-lg-6">
                                  <label for="">Min Budget</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control"placeholder="0.00" name="min_budget" min="0">
                                    </div>
                                </div>
                                  <div class="col-6 col-md-4 col-lg-6">
                                   <label for="">Max Budget:</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control"placeholder="0.00" name="max_budget" min="0">
                                    </div>
                                </div>
     



    <div class="col-md-12">
               <label for="">  Additional Information we should know?</label>
                <div class="form-group">                 

         <textarea rows="3" name="additional_information" placeholder="Type your additional information here..." style="width:  100%" ></textarea>
        </div>
     </div>




      <div class="col-12 col-md-12 col-lg-12">
         <p > How did you hear about us?:</p>
         <div class="col-6 col-md-6 col-lg-4">
                                   
                                    <div class="form-group"><label for="">Facebook</label>
                                       <input id="facebook" type="checkbox"  name="hear[]" value="Facebook">
                                    </div>
                                </div>

                             <div class="col-6 col-md-6 col-lg-4">
                                 
                                    <div class="form-group">  <label for="">Instagram</label>
                                     <input id="instagram" type="checkbox" class="zt-control"  name="hear[]" value="Instagram">
                                    </div>
                                </div>

                                     <div class="col-6 col-md-6 col-lg-4">                             
                                    <div class="form-group">  <label for="">Tweeter
                                     <input id="Tweeter" type="checkbox"  name="hear[]" value="Tweeter"></label>
                                    </div>
                                </div>

        
                                         <div class="col-6 col-md-6 col-lg-4">                                
                                    <div class="form-group">  <label for="">Google
                                     <input id="google" type="checkbox"   name="hear[]" value="Google"></label>
                                    </div>
                                </div>

                                  <div class="col-6 col-md-6 col-lg-4">                                 
                                    <div class="form-group"><label for="mouth">Word of Mouth
                                     <input id="mouth" type="checkbox" name="hear[]" value="Word of Mouth"></label>
                               </div>
                       </div> <!-- end of row -->
                 </div>




                 <div class="col-md-12">
               <label for="">  Other Information?</label>
                <div class="form-group">                 

         <textarea rows="3" name="hear_about_us" placeholder="Other..." style="width:  100%" ></textarea>
        </div>
     </div>


                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <!-- <a href="#" id="moreFilter">+ More filters</a> -->
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
         
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hmacadem/hm.hmacademy.net/resources/views/website/tailorMade/tailorEnquiryForm.blade.php ENDPATH**/ ?>