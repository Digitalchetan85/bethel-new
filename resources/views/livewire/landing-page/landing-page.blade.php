<div>
    <div id="first-section">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/landing-page/images/banner.jpg')}}" class="d-block w-100" alt="...">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/landing-page/images/banner1.jpg')}}" class="d-block w-100" alt="...">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/landing-page/images/banner.jpg')}}" class="d-block w-100" alt="...">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div> --}}
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div id="second-section" class="py-3 py-md-3 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="text-center">
                        <h2 class="text-white">Get Your Laptop Service at just 499*/-</h2>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="text-center">
                        <a href="tel:09513838585" class="btn btn-secondary text-decoration-none text-uppercase">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="third-section" class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image text-center">
                        <img src="{{ asset('assets/images/category-img-01.jpg') }}" alt="">
                        <h3 class="name">Apple & Mac</h3>
                        <p>Repair</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image text-center">
                        <img src="{{ asset('assets/images/category-img-02.jpg') }}" alt="">
                        <h3 class="name">Laptop</h3>
                        <p class="white">Repair</p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="image text-center">
                        <img src="{{ asset('assets/images/category-img-03.jpg') }}" alt="">
                        <h3 class="name white">PC & Computer</h3>
                        <p>Repair</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="fourth-section" class="block">
        <div class="container">
            <div class="text-center">
                <h2 class="h-lg">Get <span class="color">Your Computer</span> Fixed NOW!</h2>
                <a href="tel:09880037944" class="text-decoration-none">
                    <h3 class="subtitle">+91 98800 37944 </h3>
                </a>
                <a href="tel:08880470007" class="text-decoration-none">
                    <h3 class="subtitle">+91 88804 70007</h3>
                </a>
                <p class="info">for one of our professional computer repair techs to help you with your
                    Desktop, Laptop, Mac or other inquiry</p>
                <div class="btn">
                    <a class="btn btn-invert bg-black text-white" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-3 py-md-5" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="pt-2 text-center text-black mb-0">All Computer & Tablet Services</h2>
                <p class="py-1 text-center text-black fst-italic">We can Solve your Hardware and Software Problems</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa-brands fa-laptop-medical"></i>
                            <h5 class="card-title text-center text-black">Experienced Professionals</h5>
                            <p class="card-text text-black">We pride ourselves on being a professional computer repair facility</p>
                            <!-- <a href="#" class="btn btn-primary">More Info</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-0">
                        <div class="card-body text-center animate__animated animate__flash animate__delay-1s animation__repeate-1">
                            <i class="fa-solid fa-compact-disc"></i>
                            <h5 class="card-title text-center text-black">Our technical experts will get you honest, reliable and professional help </p>
                                <!-- <a href="#" class="btn btn-primary">More Info</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-0">
                        <div class="card-body text-center animate__animated animate__flash animate__delay-1s animation__repeate-1">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                            <h5 class="card-title text-center text-black">Trustworthy See Reviews</h5>
                            <p class="card-text text-black">Our business has been built on trust and customer satisfaction!</p>
                            <!-- <a href="#" class="btn btn-primary">More Info</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-0">
                        <div class="card-body text-center animate__animated animate__flash animate__delay-1s animation__repeate-1">
                            <i class="fa-solid fa-shield-virus"></i>
                            <h5 class="card-title text-center text-black">Friendly Service</h5>
                            <p class="card-text text-black">We work through a remote super-secure connection, and give you a full report when our work is done.Most of the services below are repaired within hours, and in most cases same day!</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-0">
                        <div class="card-body text-center animate__animated animate__flash animate__delay-1s animation__repeate-1">
                            <i class="fa-solid fa-shield-virus"></i>
                            <h5 class="card-title text-center text-black">Excellent Reputation</h5>
                            <p class="card-text text-black">We have built our reputation on the attention to details and our loyal service to our customersExcellent Reputation!</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-0">
                        <div class="card-body text-center animate__animated animate__flash animate__delay-1s animation__repeate-1">
                            <i class="fa-solid fa-shield-virus"></i>
                            <h5 class="card-title text-center text-black">Affordable Diagnosis</h5>
                            <p class="card-text text-black">We will diagnose your issues, provide you with options and give you a price for FREE!</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testing -->
    <!-- <div class="block bottom-md">
        <div class="container">
            <h2 class="text-center">Why Choose <span class="color">Us</span></h2>
            <p class="info text-center">There are many valid reasons why you should choose us to take care of your
                valuable device</p>
            <div class="text-icon-grid">
                <div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
                    <div class="hover"></div>
                    <div class="caption">
                        <div class="icon-big"><span class="icon icon-manager"></span></div>
                        <h5 class="title">Experienced Professionals</h5>
                        <div class="text">We pride ourselves on being a professional computer repair
                            facility</div>
                    </div>
                </div>
                <div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
                    <div class="hover"></div>
                    <div class="caption">
                        <div class="icon-big"><span class="icon icon-technology"></span></div>
                        <h5 class="title">Expert Technical Skills</h5>
                        <div class="text">Our technical experts will get you honest, reliable and
                            professional help </div>
                    </div>
                </div>
                <div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
                    <div class="hover"></div>
                    <div class="caption">
                        <div class="icon-big"><span class="icon icon-talk"></span></div>
                        <h5 class="title">Trustworthy See Reviews</h5>
                        <div class="text">Our business has been built on trust and customer satisfaction
                        </div>
                    </div>
                </div>
                <div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
                    <div class="hover"></div>
                    <div class="caption">
                        <div class="icon-big"><span class="icon icon-hand-shake"></span></div>
                        <h5 class="title">Friendly Service</h5>
                        <div class="text">Most of the services below are repaired within hours, and in
                            most cases same day!</div>
                    </div>
                </div>
                <div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
                    <div class="hover"></div>
                    <div class="caption">
                        <div class="icon-big"><span class="icon icon-signs"></span></div>
                        <h5 class="title">Excellent Reputation</h5>
                        <div class="text">We have built our reputation on the attention to details and
                            our loyal service to our customersExcellent Reputation</div>
                    </div>
                </div>
                <div class="text-icon-squared animation" data-animation="fadeInUp" data-animation-delay="0s">
                    <div class="hover"></div>
                    <div class="caption">
                        <div class="icon-big"><span class="icon icon-stethoscope"></span></div>
                        <h5 class="title">Affordable Diagnosis</h5>
                        <div class="text">We will diagnose your issues, provide you with options and give
                            you a price for FREE!</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- testing ends -->

</div>