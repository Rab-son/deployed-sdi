@section('title','SDI | Training')
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
                            <h1 class="text-white animated slideInDown">Program</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Program</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Program Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Programmes<span></span></p>
                    <h1 class="text-center mb-5">Programmes That We Provide</h1>
                </div>
                <div class="row g-4">
                    @php
                        $counter = 0.1;
                    @endphp
                    @foreach($programs as $program)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-user-graduate  fa-2x"></i>
                            </div>
                            <h5 class="mb-3">{{ $program->name }}</h5>
                            <p class="m-0">{{ Str::limit($program->introduction, 100) }} <a href="{{ url('/training/info/'.$program->id)}}" style="color:#FBA504; text-decoration:none">Read More</a></p>
                            <a class="btn btn-square" style="width: 30%" href="{{ url('/training/details/'.$program->id)}}">
                            <i class="fa fa-arrow-right"></i>Apply</a>
                        </div>
                    </div>
                    @php
                        $counter += 0.2;
                    @endphp
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Program End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-success newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                        <h1 class="text-center text-white mb-4">Always Stay in Touch</h1>
                        <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-success fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

        

        @include('layouts.front_end.footer')