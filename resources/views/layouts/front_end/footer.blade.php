        <!-- Footer Start -->
        <div class="container-fluid bg-success text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p style="text-transform: capitalize;"><i class="fa fa-map-marker-alt me-3"></i><br>Red Cross building, Behind FDH Bank, P.O. Box 565, Zomba</p>
                        <p><i class="fa fa-phone-alt me-3"></i><br>+265881840840<br>+265987922655</p>
                        <p><i class="fa fa-envelope me-3"></i><br>info@skillsdevelopmentinitiative.org</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://web.facebook.com/skillsdevelopmentinitiative/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="about.html">About Us</a>
                        <a class="btn btn-link" href="program.html">Programmes</a>
                        <a class="btn btn-link" href="about.html">Apply</a>
                        <a class="btn btn-link" href="contact.html">Contact Us</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('front_end/img/portfolio-1.jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('front_end/img/portfolio-2.jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('front_end/img/portfolio-3.jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('front_end/img/portfolio-4.jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('front_end/img/portfolio-5.jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('front_end/img/portfolio-6.jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Subscribe To Our Newsletter</p>
                        <form autocomplete="off" method="post" action="{{ url('/subscribe') }}"> {{ csrf_field() }}
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" 
                                   name="email" type="email" placeholder="Your Email" style="height: 48px;" required>
                                <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-success fs-4"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; Skill Development Initiative (SDI), All Rights Reserved. 
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


        <!--     Backup code    
        <div style="display: flex; justify-content:space-between">
            <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            <div class="elfsight-app-85fbced7-aee9-4e62-9c12-d6bc0b1590bb"></div>
        </div>-->
        <!-- Back to Top -->

        <div style="display: flex;">
            <a href=" https://wa.me/+265881840840" target="_blank" class="btn btn-lg btn-sdi btn-lg-square whatsapp" style="margin-right: 60px;"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top" style="float: left;"><i class="bi bi-arrow-up"></i></a>
        </div>

    </div>

    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front_end/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('front_end/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front_end/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('front_end/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('front_end/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_end/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front_end/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('front_end/js/main.js')}}"></script>
</body>

</html>