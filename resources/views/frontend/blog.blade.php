@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Blog</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

   <!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row pb-3">
                    @foreach($blogs as $blog)
                        <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2" style="height: 450px;">
                                <img class="img-fluid w-100 h-100" src="{{ asset('storage/'.$blog->image) }}" alt="" style="object-fit: cover;">
                                <a class="blog-overlay text-decoration-none" href="{{route('blogDetails-blog',$blog->id)}}">
                                    <h5 class="text-white mb-3">
                                        {{$blog->short_description}}
                                    </h5>
                                    <p class="text-primary m-0">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form -->
                <div class="mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <form action="{{ route('searchBlogs') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control form-control-lg" placeholder="Keyword" value="{{ request('query') }}">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Category List -->
                <div class="mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                    <ul class="list-group list-group-flush">
                        @foreach($blogs as $cc)
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">{{$cc->categories}}</a>
                                <span class="badge badge-primary badge-pill">N/A</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Recent Post -->
                <div class="mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h3>
                    @foreach($recentPosts as $recentPost)
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="{{ route('blogDetails-blog', $recentPost->id) }}">
                            <img class="img-fluid rounded" src="{{ asset('storage/'.$recentPost->image) }}" alt="" width="100">
                            <div class="pl-3">
                                <h6 class="m-1">{{ $recentPost->short_description }}</h6>
                                <small>{{ \Carbon\Carbon::parse($recentPost->created_at)->format('F d, Y') }}</small>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection
