@section('title','SDI | Our Team')
@include('layouts.front_end.header')

<body>
    <div class="container-xxl bg-white p-0">
        @include('layouts.front_end.loader')


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('layouts.front_end.nav')

            <div class="container-xxl py-5 bg-success hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Our Team</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Our Team</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                    <h1 class="text-center mb-5">Our Team Members</h1>
                </div>
                <div class="row g-4">
                    @php
                        $counter = 0.1;
                    @endphp
                    @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $counter }}s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                @if(!empty($team->image))
                                    <img class="img-fluid rounded-circle mb-4" src="{{ asset('images/admins/'.$team->image) }}" alt="">
                                @else
                                    <img class="img-fluid rounded-circle mb-4" src="{{ asset('images/defaults/team.jpeg') }}" alt="">
                                @endif

                                <h5>{{ $team->name }}</h5>
                                <span>{{ $team->position }}</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                    @php
                        $counter += 0.2;
                    @endphp
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->
        

    @include('layouts.front_end.footer')
