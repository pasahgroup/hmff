
  @extends('admins.layouts.Apps.app')
  @section('contents')

  <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery311.min.js"></script>


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
            <h1>Trainee Page</h1>
          </div>
          <div class="col-sm-6">
             @if(Auth::user()->role =='Admin')
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{ route('trainee.create') }}" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Trainee
            </a></li>
            </ol>
            @endif
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        
      <div class="card">
        <div class="card-header">
         

          <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('research') }}" enctype="multipart/form-data">

      @csrf
             <input type="hidden" name="user_id" value="POST">
           <div class="row">
              <div class="form-group col-md-1 col-sm-1">
          <b class="card-title">Class</b>

        </div>
               <div class="form-group col-md-3 col-sm-3">
            <div class="form-bottom">                         
                                <select class="form-control" name="classg" id="classg" required>
                                    <option></option>
                                    <option selected style="background-color:yellow">{{$selected_class ?? ''}}</option>
                                      @foreach ($classes as $class) 
  <option>{{$class->class}}</option>
   @endforeach 
                                </select>

                            </div>
                            </div>
                              <div class="form-group col-md-1 col-sm-1">
          <b class="card-title">Session</b>
        </div>
                              <div class="form-group col-md-4 col-sm-4">
            <div class="form-bottom">                         
                                <select class="form-control" name="session" id="session" required>
                                  <option></option>
                                    <option selected style="background-color:yellow">{{$selected_session ?? ''}}</option>
                                      @foreach ($sessions as $session) 
  <option>{{$session->session}}</option>
   @endforeach 
                                </select>
                            </div>
                            </div>
                        
                        
       
          <div class="card-tools">         
          <button type="submit" class="btn btn-success float-right">Ok</button>
           </div>
        </div>
      </form>
      </div>

        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                     <th>ID</th>
                      <th>Lodge</th>
                    <th>Name</th>
                      <th>Gender</th>
                      <th>Phone</th>
                      <th>No topics</th>
                     <th>Trained topics</th>
                      <th>Photo</th>
                        
                      
                    <th>Session</th>
                    <th>Designation</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($datas as $data)
                  <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->pin }}</td>
                      <td>{{ $data->lodge }}</td>
                    <td><a href="{{ route('inclusive.show',$data->id) }}">{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}<inclusive.show></a></td>
                                  
                    <td><span class="badge"> {{ $data->gender }}</span></td>
                      <td><span class="badge"> {{ $data->mobile_no}}</span></td>
                    <td>{{ $data->no_topic }}</td>
                   <td>{{ $data->trained_topic }}</td>

                  <!--    <td>{{ $data->main }}</td>
                     <td>{{ $data->tour_code }}</td> -->
                      <td><div class="logo mr-auto"><img src="{{ URL::asset('/storage/trainee/'.$data->photo) }}"  style="width:100px; height:80px;"></div></td>
                     
                   <td>{{ $data->session }}</td>
  <td>{{ $data->designation }}</td>
                    <td>

     <form method="GET" id="post_form" role="form" class="registration-form" action="{{ route('trainee.show',$data->id) }}" enctype="multipart/form-data">

      @csrf
             <input type="hidden" name="user_id" value="PUT">
             <input type="hidden" name="classgf" id="classgf" value="{{ $data->class }}">
<input type="hidden" name="sessionf" id="sessionf" value="{{ $data->session }}">

<input type="hidden" name="searchf" id="searchf" value="{{ $search }}">


<button type="submit" role="button"><i class="fa fa-bars"></i></button>
</form>

  @if(Auth::user()->role =='Admin')
                      <a role="button" href="{{ route('editTrainee',$data->id) }}"><i class="fa fa-edit"></i></a> 
                      @endif
                     
                     <!--  <a role="button" href="/destroyf/{{$data->id}} " onclick="return confirm('Are you sure? You want to delete {{ $data->tour_name}}','Inclusive')"><i class="fa fa-trash red"></i></a> -->

                    </td>
                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                   <tr>
                    <th>#</th>
                     <th>ID</th>
                      <th>Lodge</th>
                     <th>Name</th>

                       <th>Gender</th>
                       <th>Phone</th>
                      <th>No topics</th>
                     <th>Trained topics</th>
                      
                       <th>Photo</th>
                
                                   
                       <th>Session</th>
                     <th>Designation</th>
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

  <script type="text/javascript">
       $(document).ready(function(){
      // Department Change
      $('#classg').change(function(){
         // ward

  

         var v = $(this).val();
              //  alert(v);
           // Empty the dropdown
          $('#session').find('option').not(':first').remove();
             document.getElementById("classgf").value =v;
         // $('#village').find('option').not(':first').remove();
         // $('#project_name').find('option').not(':first').remove();
         // $('#project_activities').find('option').not(':first').remove();


//alert(v);
         // AJAX request
         $.ajax({
           url: 'getA/'+v,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
                //alet(len);

             if(response['dataA'] != null){
               len = response['dataA'].length;
             }
           //  alet(len);

                       if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataA'][i].session;
                 var name = response['dataA'][i].session;
                 var option = "<option value='"+id+"'>"+name+"</option>";
                 $("#session").append(option);
               }
             }
             //DAta are here

           }
        });
      });
    });
     </script>


 






     <script type="text/javascript">
  function setMetanameFunction(id) {
   // alert('passed');
    var elementM = document.getElementById("metaname_model").value;
     //alert(elementM);
 $('#metaname_id').val(elementM);
         document.getElementById("data_display").style.display = "none";
  }
</script>
@endsection
