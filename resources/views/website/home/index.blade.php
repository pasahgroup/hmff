@extends('website.layouts.app_hm')
@section('content')


   <!-- Libraries Stylesheet -->
    <!-- <link href="../website/lib/animate/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="../website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="../website/css/style.css" rel="stylesheet"> -->
    <!-- Carousel Start -->


<!--   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 -->
    <!-- Font Awesome -->


    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">

                    <ol class="carousel-indicators">
                        {{-- <li data-target="#header-carousel" data-slide-to="0" class="active"></li> --}}
                       @for ($x =0; $x <=$sliderCount-1; $x++)
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          @endfor
                    </ol>


                    <div class="carousel-inner">
                       @isset($slider_first)
                        <div class="carousel-item position-relative active" style="height: 500px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slider_first->attachment ?? '')}}" style="object-fit: cover;" alt="No Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slider_first->title }}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn demo-1">{{ $slider_first->description }}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/{{ $slider_first->id}}" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>
                        @else
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        @endisset

                         @foreach ($sliders as $slides)
                        <div class="carousel-item position-relative" style="height: 500px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slides->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slides->title }}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn demo-1">{{ $slides->description }}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/{{ $slides->id}}">Read More</a>
                                </div>
                            </div>
                        </div>
                           @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @isset($slider1)
                <div class="product-offer mb-30" style="height: 230px;">
                    <img class="img-fluid" src="{{URL::asset('/storage/uploads/'.$slider1->attachment)}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white">{{ $slider1->title }}</h6>
                           <a href="/detail-page/{{ $slider1->id}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                  @else
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        @endisset

@isset($slider2)
                <div class="product-offer mb-30" style="height: 240px;">
                    <img class="img-fluid" src="{{URL::asset('/storage/uploads/'.$slider2->attachment)}}" alt="" style="object-fit: cover;">
                    <div class="offer-text">
                        <h6 class="text-white">{{ $slider2->title }}</h6>
                        <a href="/detail-page/{{ $slider2->id}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                  @else
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        @endisset
            </div>
        </div>
    </div>

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative mx-xl-5 mb-4"><span class="bg-secondary pr-3">Trained Students</span></h2>
        <div class="row px-xl-5 pb-3">
 @foreach ($student_webs as $student)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="#">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{ URL::asset('/storage/photos/'.$student->photo) }}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{$student->first_name}} {{$student->last_name}}</h6>
                            <small class="text-body">{{$student->session}}</small>
                        </div>
                    </div>
                </a>
            </div>
 @endforeach
  </div>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-9 pb-1">

</div>
  <div class="col-lg-2 col-md-2 col-sm-2 pb-1">
  <a href="/login" target="_blank" class="btn btn-primary float-right">Explore More</a>
</div>
</div>


    </div>
    <!-- Categories End -->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">

            <div class="col-md-4">
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        {{-- <li data-target="#header-carousel" data-slide-to="0" class="active"></li> --}}
                       @for ($x =0; $x <=$sliderCountFooter1-1; $x++)
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          @endfor
                    </ol>


                       <div class="carousel-inner">

                        @isset($footer1)
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$footer1->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $footer1->title }}</h2>

                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/{{ $footer1->id}}" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           @else
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        @endisset

                         @foreach ($footer1_slider as $slide_f1)
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slide_f1->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slide_f1->title }}</h1>

                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/{{ $slide_f1->id}}">Read More</a>
                                </div>
                            </div>
                        </div>
                           @endforeach
                    </div>
                </div>
            </div>



             <div class="col-md-4">
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        {{-- <li data-target="#header-carousel" data-slide-to="0" class="active"></li> --}}
                       @for ($x =0; $x <=$sliderCountFooter2-1; $x++)
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          @endfor
                    </ol>


                       <div class="carousel-inner">

                         @isset($footer2)
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$footer2->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $footer2->title }}</h2>

                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/{{ $footer2->id}}" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           @else
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        @endisset

                         @foreach ($footer2_slider as $slide_f2)
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slide_f2->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slide_f2->title }}</h1>

                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/{{ $slide_f2->id}}">Read More</a>
                                </div>
                            </div>
                        </div>
                           @endforeach
                    </div>
                </div>
            </div>



           <div class="col-md-4">
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        {{-- <li data-target="#header-carousel" data-slide-to="0" class="active"></li> --}}
                       @for ($x =0; $x <=$sliderCountFooter3-1; $x++)
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          @endfor
                    </ol>


                       <div class="carousel-inner">


 @isset($footer3)
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$footer3->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $footer3->title }}</h2>

                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/{{ $footer3->id}}" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           @else
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        @endisset

                         @foreach ($footer3_slider as $slide_f3)
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slide_f3->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slide_f3->title }}</h1>

                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/{{ $slide_f3->id}}">Read More</a>
                                </div>
                            </div>
                        </div>
                           @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Offer End -->
@endsection
