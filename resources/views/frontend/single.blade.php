@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">{{$blog->title}}</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">BlogDetails</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h6 class="text-primary mb-3" data-aos="fade-right">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</h6>
                        <h1 class="mb-5" data-aos="fade-left">
                            {{$blog->title}}
                        </h1>
                        <img class="img-fluid rounded w-100 mb-4" src="{{ asset('storage/'.$blog->image) }}"
                            alt="Image" data-aos="zoom-in">
                        <p data-aos="fade-right">

                            </p>
                        <p data-aos="fade-left">

                          .</p>
                        <h2 class="mb-4" data-aos="fade-right">{!! $blog->short_description !!}</h2>
                      <p>
                          {!! $blog->description !!}
                      </p>

                    </div>




                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">


                    <!-- Category List -->
                    <div class="mb-5" data-aos="fade-left">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                        <div class="d-flex flex-wrap m-n1">

                                @foreach($blogs as $blosss)
                                    <a href="{{route('blogDetails-blog',$blog->id)}}" class="btn btn-sm btn-outline-secondary btn btn-primary m-1">{{ $blosss->categories }}</a>
                                @endforeach

                        </div>
                    </div>

                    <!-- Related Posts -->
                    <div class="mb-5" data-aos="fade-right">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Related Post</h3>
                        @foreach($blogs as $related)
                            <a class="d-flex align-items-center text-decoration-none bg-secondary rounded mb-3 overflow-hidden" href="{{ route('blogDetails-blog', $related->id) }}">
                                <img class="img-fluid" src="{{ asset('storage/'.$related->image) }}" style="width: 100px;" alt="">
                                <div class="pl-3">
                                    <h6 class="text-uppercase">{{ $related->title }}</h6>
                                    <span>{{ \Carbon\Carbon::parse($related->created_at)->format('F d, Y') }}</span>
                                    <div class="text-red">
{{--                                        @foreach($related as $category)--}}
                                            <small>{{ $related->categories }}</small>@if (!$loop->last), @endif
{{--                                        @endforeach--}}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>





                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
@endsection
