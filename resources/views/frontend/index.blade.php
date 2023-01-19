@section('title','SDI | Home')
@include('layouts.front_end.header')
<body>
    <div class="container-xxl bg-white p-0">
        @include('layouts.front_end.loader')


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('layouts.front_end.nav')
            <div class="container-xxl bg-success hero-header">
                @include('layouts.front_end.message')
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Welcome To Skills and Development Initiative (SDI)</h1>
                            <p class="text-white pb-3 animated slideInDown">
                                Providing market-driven knowledge and skills for vibrant workforce and entrepreneurs with
                                safety, health and welfare of citizens and environment <br><br>
                                “<em>The more we give importance to skills Development, The more competent will be our Youth</em>” Shr
                                  Nandra Modi
                            </p>
                            <a href="/about" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                            <a href="/contact" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="{{asset('front_end/img/hero.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-child text-success mb-4"></i>
                            <h5 class="mb-3">Youth Empowerment</h5>
                            <p class="m-0">
                                Advocate for provision of relevant skills that would spur socio-economic development through education and active 
                                citizenship, so that the less privileged can become independent and agents of change to society.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-user-graduate text-success mb-4"></i>
                            <h5 class="mb-3">Education</h5>
                            <p class="m-0">
                                Encourage youths especially girls and young women to take up science careers by providing 
                                knowledge and skills for quality science learning in all areas and levels.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-user-shield text-success mb-4"></i>
                            <h5 class="mb-3">Chemical Safety and Security</h5>
                            <p class="m-0">
                                Raise awareness of chemical substances harmful to human health both in workplaces and homes; 
                                and provide skills that encourage use of necessary measures to promote chemical safety and security.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-seedling text-success mb-4"></i>
                            <h5 class="mb-3">Environmental Protection</h5>
                            <p class="m-0">
                                Encourage and lead in responsible waste management and disposal around homes and water systems 
                                and promote green science, recycling and re-use.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-water text-success mb-4"></i>
                            <h5 class="mb-3">Water and Sanitation</h5>
                            <p class="m-0">
                                Provide knowledge and skills for water quality monitoring, assessment and treatment to improve 
                                sanitation especially in rural and peri-urban areas.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-genderless text-success mb-4"></i>
                            <h5 class="mb-3">Equality</h5>
                            <p class="m-0">
                                Advocate for equality in the attainment of skills and employment regardless of gender, 
                                economic status, race, creed, culture , geographical location and origin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-5">Skills and Development Initiative</h1>
                        <p class="mb-4">
                            Skills and Development Initiative (SDI) was established and registered as a local NGO to
                            promote underprivileged and vulnerable populations with critical skills underpinned by science,
                            technology and innovation. Its operations are guided by African Union Agenda 2063 and Global
                            Agenda 2030 for sustainable development. The organization promotes a unique volunteer-based
                            operational model focusing on youth empowerment, quality science education, equality in
                            science careers, chemical safety and security, environmental protection, as well as water and
                            sanitation. In its operations, SDI integrates 10 Sustainable Development Goals (SDGs) with 31
                            Targets using science education and skills development as vehicles for addressing prevailing
                            economic, social, health and gender inequalities in Malawi. To complement colleges and
                            universities, SDI identifies skills gap, locates stakeholders and expertise, formulates a unique
                            curriculum before implementing its training programs at various levels.
                        </p>
                        <a href="" class="btn btn-success py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('front_end/img/about.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Programmes<span></span></p>
                    <h1 class="text-center mb-5">What Programmes Do We Provide</h1>
                </div>
                <div class="row g-4">
                    @php
                        $counter = 0.1;
                    @endphp
                    @foreach($firstThree as $program)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-user-graduate fa-2x"></i>
                            </div>
                            <h5 class="mb-3">{{ $program->name }}</h5>
                            <p class="m-0">{{ Str::limit($program->introduction, 50) }} <a href="{{ url('/training/info/'.$program->id)}}" style="color:#FBA504; text-decoration:none">Read More</a></p>
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
            <div class="d-flex justify-content-center">
                <a href="/training" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">View All</a>
             </div>
        </div>
        <!-- Service End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-success newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                        <h1 class="text-center text-white mb-4">Always Stay in Touch</h1>
                        <p class="text-white mb-4">
                            Fill in your email if you want to get updates from Skills Development Initiative
                        </p>
                        <form autocomplete="off" method="post" action="{{ url('/subscribe') }}"> {{ csrf_field() }}
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" name="email" type="email" placeholder="Enter Your Email" style="height: 48px;"
                            required>
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-success fs-4"></i></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                    <h1 class="text-center mb-5">Our Team Members</h1>
                </div>
                <div class="row g-4">
                <div class="owl-carousel testimonial-carousel">
                    @php
                        $counter = 0.1;
                    @endphp
                    @foreach($teams as $team)
                    <div class="testimonial-item wow fadeInUp" data-wow-delay="0.1s">
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
        </div>
        <!-- Team End -->
        

        @include('layouts.front_end.footer')