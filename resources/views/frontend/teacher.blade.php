@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase" data-aos="fade-right">Trainers</h3>
                <div class="d-inline-flex text-white" data-aos="fade-left">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Trainers</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5" data-aos="fade-down">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Trainers</h5>
                <h1>Meet Our Trainers</h1>
            </div>
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-md-6 col-lg-3 text-center team mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">


                        <div class="team-item rounded overflow-hidden mb-2">
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="{{ asset('storage/'.$team->image) }}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="{{$team->in_url}}"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="{{$team->fb_url}}"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="{{$team->wat_url}}"><i
                                            class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="bg-secondary p-4">
                                <h5>{{$team->name}}</h5>
                                <p class="m-0">{{$team->title}}</p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
