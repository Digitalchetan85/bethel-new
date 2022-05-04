<div>
    <div id="first-section" class="position-relative">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
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
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>

    <div id="contact-form" class="position-absolute top-50 end-0 translate-middle-y me-5" style="z-index:1;">
        <form class="rounded bg-white p-2">
            <div class="container">
                <h3 class="fs-4 text-primary">Get Instant Call Back</h3>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fa fa-user text-primary"></i></span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fa fa-envelope text-primary"></i></span>
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <input id="country_selector" type="text" class="form-control w-100">
                        <label for="country_selector" style="display:none;">Select a country here...</label>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <input id="phone" name="phone" type="tel" class="form-control" placeholder="XXXXXXXXXX">
                    </div>
                </div>
                <div class="row mb-2 d-none">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="country_selector_code" name="country_selector_code"
                            data-countrycodeinput="1" readonly="readonly"
                            placeholder="Selected country code will appear here" />
                        <label for="country_selector_code">...and the selected country code will be updated
                            here</label>
                    </div>
                </div>
                <div class="row-mb-2">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </div>
                </div>
            </div>
        </form>

    </div>



    <div id="second-section" class="py-3 py-md-3 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <div class="text-center">
                        <h2 class="text-white">Get Your Laptop Service at just 499*/-</h2>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Call Now
</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block py-3 py-md-5">
        <div class="container">
            <div class="row category-carousel">
                <div class="col-sm-4">
                    <div class="category-block animation" data-animation="zoomIn" data-animation-delay="0s">
                        <div class="image">
                            <img src="{{ asset('assets/images/category-img-01.jpg') }}" alt="">
                        </div>
                        {{-- <div class="image_hover light">
                            <div class="vert-wrap">
                                <div class="vert">
                                    <p>Computer Repair specializes in repairs of all kinds of Apple products
                                        including, MacBooks, iMacs, Mac Pros, Macbook retina and Mac Mini’s. We only
                                        Use Original Apple Parts we will never install a knock off part into your
                                        Mac product.</p>
                                    <p><a href="{{route('services.mac-repair')}}" class="btn btn-sm">More info</a></p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="caption top">
                            <div class="vert-wrap">
                                <div class="vert">
                                    <h3 class="name">Apple & <br>Mac</h3>
                                    <p>Repair</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="category-block animation" data-animation="zoomIn" data-animation-delay="0s">
                        <div class="image">
                            <img src="{{ asset('assets/images/category-img-02.jpg') }}" alt="">
                        </div>
                        {{-- <div class="image_hover">
                            <div class="vert-wrap">
                                <div class="vert">
                                    <p>While You Wait or Same Day Service If you decide not to proceed the repair of
                                        your laptop, we will pay you cash to buy it and return your hard drive or
                                        transfer data for you.</p>
                                    <p><a href="{{route('services.laptop-repair')}}" class="btn btn-sm">More info</a>
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="caption middle">
                            <div class="vert-wrap">
                                <div class="vert">
                                    <h3 class="name">Laptop</h3>
                                    <p class="white">Repair</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="category-block animation" data-animation="zoomIn" data-animation-delay="0s">
                        <div class="image">
                            <img src="{{ asset('assets/images/category-img-03.jpg') }}" alt="">
                        </div>
                        {{-- <div class="image_hover color">
                            <div class="vert-wrap">
                                <div class="vert">
                                    <p>We service all makes and models of Computers. Most Computers are repaired
                                        same day with parts available in stock. We service all models including: HP,
                                        Apple, Acer, Lenovo/IBM, Dell, Samsung, Gateway, Asus, Alienware & more…
                                    </p>
                                    <p><a href="{{route('services.pc-repair')}}" class="btn btn-sm">More info</a></p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="caption bottom">
                            <div class="vert-wrap">
                                <div class="vert">
                                    <h3 class="name white">PC & Computer</h3>
                                    <p>Repair</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="mac-services" class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="py-4 text-center">Mac Services</h2>
                    <div class="owl-carousel owl-theme" id="mac-repair">
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-3-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Macbook Water Damage Repair</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn-sm btn-primary text-decoration-none">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-3-2.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Macbook Air Repair</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn-sm btn-primary text-decoration-none">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-3-3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Mac Hard Drive Replacement
                                    </h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn-sm btn-primary text-decoration-none">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-3-4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Macbook Battery Replacement</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn-sm btn-primary text-decoration-none">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-3-5.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">iMac Repair</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn-sm btn-primary text-decoration-none">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-3-6.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Macbook Keyboard Replacement</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn-sm btn-primary text-decoration-none">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-3-7.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Mac Screen Replacement</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn-sm btn-primary text-decoration-none">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="laptop-services" class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="py-4 text-center">Laptop Services</h2>
                    <div class="owl-carousel owl-theme" id="laptop-repair">
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-1-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Laptop Keyboard Replacement</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-1-2.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Laptop Screen Repair</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-1-3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Laptop Power Jack Replacement
                                    </h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go Somewhere
</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-1-4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Laptop Cleaning Service</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button>                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-1-5.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Laptop Fan Replacement</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="pc-services" class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="py-4 text-center">PC Services</h2>
                    <div class="owl-carousel owl-theme" id="pc-repair">
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-2-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Computer Won’t Turn On</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-2-2.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Noisy Computer</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-2-3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Computer Fails to Start
                                    </h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn-sm btn-primary text-decoration-none">Go somewhere</a><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-2-4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Computer Freezes and Restarts</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-2-5.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Computer is Too Slow</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-2-6.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Printer, Keyboard or Mouse Doesn’t Work</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/images/img-service-2-7.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Screen Doesn’t Show Anything</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p> --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go somewhere
</button> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="call-us" class="py-3 py-md-5">
        <div class="block">
            <div class="container">
                <div class="text-center">
                    <h2 class="h-lg pb-4">Get <span class="color">Your Computer</span> Fixed NOW!</h2>
                    <h3 class="subtitle">+91 98800 37944 / 88804 70007</h3>
                    <p class="info">for one of our professional computer repair techs to help you with your
                        Desktop, Laptop, Mac or other inquiry</p>
                    <div class="btn-inline">
                        <!-- <a class="btn btn-invert" href="{{ route('contact') }}">Contact Us</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-md-5 py-3">
        <div class="block">
			<div class="container">
				<h2>Frequently Asked <span class="color">Questions</span></h2>
				<div class="panel-group">
					<div class="faq-item">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" href="#faq1">How long will my repair/service take?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
							</div>
							<div id="faq1" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>We repair most faults within 2-3 days, we also offer a 24 hour priority service (subject to availability of parts if needed). If we need to order parts then we can normally get these next day delivery. We realise how difficult being without your computer can be and we will always try to get it back to you as quickly as possible. </p>
								</div>
							</div>
						</div>
					</div>
					<div class="faq-item">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" href="#faq2">How much will my repair cost me?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
							</div>
							<div id="faq2" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>We will always offer you a fixed price for the repair, for example if your laptop screen needs replacing we will give you a total price for the work before starting. In the event we need to diagnose the fault first we charge £30 labour which is waived if you go ahead with the repair. We don’t want you to have any nasty surprises; we want you to know exactly what your repair will cost before we complete the work.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="faq-item">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" href="#faq3">Why would I want to use you when I could go to a big brand high street store such as PC World?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
							</div>
							<div id="faq3" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Offering a personal service is top of our list; you will speak directly to the person working on your computer so you can explain the situation in detail. We turnaround repairs quickly, we don’t send anything away to service centres and we don’t quote 5+ days for repairs. We don’t charge any upfront costs, you only pay for work once it’s completed and when you are happy with it.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="faq-item">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" href="#faq4">Can you replace cracked/damaged laptop screens?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
							</div>
							<div id="faq4" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Absolutely, we repair laptop screens all the time and it’s much cheaper than buying a new laptop. Contact Us for a quick quote, we have the majority of laptop screens in stock and can normally replace your screen the same day!</p>
								</div>
							</div>
						</div>
					</div>
					<div class="faq-item">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" href="#faq5">I’m worried about my data, is it safe?<span class="caret-toggle closed">–</span><span class="caret-toggle opened">+</span></a></h4>
							</div>
							<div id="faq5" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>We will always take great care in looking after your data. We conform to the Data Protection Act and any data we hold is held in strict confidence. We undertake work for a number of local businesses including solicitors and high street shops and understand how important personal data is. Any customer data that is stored is always stored password protected and in encrypted format. We always advise if possible you take a backup of any data on your computer prior to any work being undertaken and we can discuss any backup options with you if needed.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

    <section id="faq" class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            How long will my repair/service take?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                              <p>We repair most faults within 2-3 days, we also offer a 24 hour priority service (subject to availability of parts if needed). If we need to order parts then we can normally get these next day delivery. We realise how difficult being without your computer can be and we will always try to get it back to you as quickly as possible.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            How much will my repair cost me?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                            <p>We will always offer you a fixed price for the repair, for example if your laptop screen needs replacing we will give you a total price for the work before starting. In the event we need to diagnose the fault first we charge £30 labour which is waived if you go ahead with the repair. We don’t want you to have any nasty surprises; we want you to know exactly what your repair will cost before we complete the work.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Why would I want to use you when I could go to a big brand high street store such as PC World?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                            <p>Offering a personal service is top of our list; you will speak directly to the person working on your computer so you can explain the situation in detail. We turnaround repairs quickly, we don’t send anything away to service centres and we don’t quote 5+ days for repairs. We don’t charge any upfront costs, you only pay for work once it’s completed and when you are happy with it.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                            Can you replace cracked/damaged laptop screens?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                            <div class="accordion-body">
                            <p>Absolutely, we repair laptop screens all the time and it’s much cheaper than buying a new laptop. Contact Us for a quick quote, we have the majority of laptop screens in stock and can normally replace your screen the same day!</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                            I’m worried about my data, is it safe?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                            <div class="accordion-body">
                            <p>We will always take great care in looking after your data. We conform to the Data Protection Act and any data we hold is held in strict confidence. We undertake work for a number of local businesses including solicitors and high street shops and understand how important personal data is. Any customer data that is stored is always stored password protected and in encrypted format. We always advise if possible you take a backup of any data on your computer prior to any work being undertaken and we can discuss any backup options with you if needed.</p>

                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us" class="py-3 py-md-5">
        <div class="block">
            <div class="container">
                <h2 class="text-center pb-5">Why Choose <span class="color">Us</span></h2>
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
                                our loyal service to our customers</div>
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
        </div>
    </section>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    

</div>