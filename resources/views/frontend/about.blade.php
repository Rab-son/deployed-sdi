@section('title','SDI | About')
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
                            <h1 class="text-white animated slideInDown">About Us</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-5">About SDI</h1>
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
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('front_end/img/about.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <h1 class="text-success animated slideInDown" style="text-align: center;">Our Core values</h1>
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


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <h1 class="text-success animated slideInDown" style="text-align: center;">Some of Our Programmes</h1>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-flask fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Science Laboratory</h5>
                            <a class="btn btn-square" href="programapply.html"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                    <h1 class="text-center mb-5">Our Team Members</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team.jpeg" alt="">
                                <h5>Mr. Cosmas Kathumba</h5>
                                <span>Executive Director</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team.jpeg" alt="">
                                <h5>Mr. Grant Kuntumanji</h5>
                                <span>Board Chairperson</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-success text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i><br>Red Cross building, Behind FDH bank, P.O. Box 565, Zomba</p>
                        <p><i class="fa fa-phone-alt me-3"></i><br>+265881840840</p>
                        <p><i class="fa fa-envelope me-3"></i><br>info@skillsdevelopmentinitiative.org</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="about.html">About Us</a>
                        <a class="btn btn-link" href="program.html">Programs</a>
                        <a class="btn btn-link" href="about.html">Apply</a>
                        <a class="btn btn-link" href="contact.html">Contact Us</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-6.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Subscribe To Our Newsletter</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-success fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; Skill Development Initiative (SDI), All Right Reserved. 
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.html">Home</a>
                                <a href="apply.html">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        @include('layouts.front_end.footer')