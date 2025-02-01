
  @extends('admins.layouts.Apps.app')
  @section('contents')
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
          <h3 class="card-title">Welcome:<b> {{auth()->user()->name}}</b></h3>
        </div>


         <div class="card-header">

          <div class="card-tools">
            <a href="/students" class="btn btn-default" >
             <i class="fas fa-plus"></i> Students(<b class="red">{{$students_data}}</b>)
           </a>
             <a href="/lodge" class="btn btn-default" >
              <i class="fas fa-plus"></i> Lodges(<b class="red">{{$lodges}}</b>)
            </a>

            <a href="/trainee" class="btn btn-default" >
             <i class="fas fa-plus"></i>Trainees(<b class="red">{{$trainees}}</b>)
           </a>
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

@endsection
