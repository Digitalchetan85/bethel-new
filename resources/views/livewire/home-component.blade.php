<div>
    <!-- Content  -->
    <div id="page-content">
        <!-- Slider -->
        <div id="mainSliderWrapper">
            <div id="mainSlider">
                <div class="slide">
                    <div class="img--holder"
                        style="background-image: url({{ asset('assets/images/new/banner.png') }});"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap">
                            <div class="vert">
                                <h3 data-animation="fadeInUp" data-delay="0s">We are <span>Satisfied</span></h3>
                                <h4 data-animation="fadeInUp" data-delay="0.25s">with Our Work</h4>
                                <p data-animation="fadeInUp" data-delay="0.5s">We can handle just about any tech
                                    question or computer repair that comes our way.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder"
                        style="background-image: url({{ asset('assets/images/new/banner-1.png') }});"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap">
                            <div class="vert">
                                <h3 data-animation="fadeInUp" data-delay="0s"><span>PC Support</span> that’s there</h3>
                                <h4 data-animation="fadeInUp" data-delay="0.25s">Before You Need it.</h4>
                                <p data-animation="fadeInUp" data-delay="0.5s">The best way to fix your PC problems</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="img--holder"
                        style="background-image: url({{ asset('assets/images/slider/slide1.jpg') }});"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap">
                            <div class="vert">
                                <h3 data-animation="fadeInUp" data-delay="0s">Cell Phone <span>Repairs</span></h3>
                                <h4 data-animation="fadeInUp" data-delay="0.25s">Fast, Affordable Prices</h4>
                                <p data-animation="fadeInUp" data-delay="0.5s">We are the repair specialist for all
                                    cellphone brands and models</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#slick -->
        </div>
        <!-- Slider -->
        <!-- Category Block -->
        <div class="block">
            <div class="container">
                <div class="row category-carousel">
                    <div class="col-sm-4">
                        <div class="category-block animation" data-animation="zoomIn" data-animation-delay="0s">
                            <div class="image">
                                <img src="{{ asset('assets/images/category-img-01.jpg') }}" alt="">
                            </div>
                            <div class="image_hover light">
                                <div class="vert-wrap">
                                    <div class="vert">
                                        <p>Computer Repair specializes in repairs of all kinds of Apple products
                                            including, MacBooks, iMacs, Mac Pros, Macbook retina and Mac Mini’s. We only
                                            Use Original Apple Parts we will never install a knock off part into your
                                            Mac product.</p>
                                        <p><a href="{{route('services.mac-repair')}}" class="btn btn-sm">More info</a></p>
                                    </div>
                                </div>
                            </div>
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
                            <div class="image_hover">
                                <div class="vert-wrap">
                                    <div class="vert">
                                        <p>While You Wait or Same Day Service If you decide not to proceed the repair of
                                            your laptop, we will pay you cash to buy it and return your hard drive or
                                            transfer data for you.</p>
                                        <p><a href="{{route('services.laptop-repair')}}" class="btn btn-sm">More info</a></p>
                                    </div>
                                </div>
                            </div>
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
                            <div class="image_hover color">
                                <div class="vert-wrap">
                                    <div class="vert">
                                        <p>We service all makes and models of Computers. Most Computers are repaired
                                            same day with parts available in stock. We service all models including: HP,
                                            Apple, Acer, Lenovo/IBM, Dell, Samsung, Gateway, Asus, Alienware & more…
                                        </p>
                                        <p><a href="{{route('services.pc-repair')}}" class="btn btn-sm">More info</a></p>
                                    </div>
                                </div>
                            </div>
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
        <!-- //Category Block -->
        <!-- Get Now Block -->
        <div class="block">
            <div class="container">
                <div class="text-center">
                    <h2 class="h-lg">Get <span class="color">Your Computer</span> Fixed NOW!</h2>
                    <h3 class="subtitle">+91 98800 37944 / 88804 70007</h3>
                    <p class="info">for one of our professional computer repair techs to help you with your
                        Desktop, Laptop, Mac or other inquiry</p>
                    <div class="btn-inline">
                        <a class="btn btn-invert" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Get Now Block -->
        <!-- Services Block -->
        <div class="block bg-1 network-effect">
            <canvas id="network"></canvas>
            <div class="container">
                <h2 class="h-lg text-center">All Computer <span class="color">& Tablet Services</span></h2>
                <p class="info text-center">We can Solve your Hardware and Software Problems</p>
                <div class="row text-icon-carousel">
                    <div class="col-sm-6 col-md-3">
                        <div class="text-icon animation" data-animation="scaleOut" data-animation-delay="0.5s">
                            <div class="icon-wrapper"><span><i class="icon icon-diag"></i><span
                                        class="icon-hover"></span></span>
                            </div>
                            <h4 class="title">Diagnosing Your Device</h4>
                            <p class="text">We will diagnose your issues, provide you with options and give
                                you a price for FREE!</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-icon animation" data-animation="scaleOut" data-animation-delay="0s">
                            <div class="icon-wrapper"><span><i class="icon icon-hard-disk"></i><span
                                        class="icon-hover"></span></span>
                            </div>
                            <h4 class="title">Hardware & Software Installation</h4>
                            <p class="text">We can help you determine what hardware install or software
                                installing solutions will best fit your needs. </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-icon animation" data-animation="scaleOut" data-animation-delay="0s">
                            <div class="icon-wrapper"><span><i class="icon icon-repair"></i><span
                                        class="icon-hover"></span></span>
                            </div>
                            <h4 class="title">Professional Computer Repair</h4>
                            <p class="text">We fix all sorts of computer issues! From software to hardware we
                                have the solution!</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-icon animation" data-animation="scaleOut" data-animation-delay="0.5s">
                            <div class="icon-wrapper"><span><i class="icon icon-viruses"></i><span
                                        class="icon-hover"></span></span>
                            </div>
                            <h4 class="title">Virus & Spyware Removal</h4>
                            <p class="text">We work through a remote super-secure connection, and give you a
                                full report when our work is done.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Services Block -->
        <!-- Block -->
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>About <span class="color">Us</span></h2>
                        <p class="info">Your Local Computer Specialist Servicing</p>
                        <p>Computer Repair is dedicated to providing the best customer service and computer repair
                            available to you. When your Laptop, PC or Mac needs repairing, you won’t have to worry for
                            long! Our technicians are skilled in dealing with all computers and gadgets whether you need
                            home or business computer repairs.</p>
                        <ul class="marker-list">
                            <li>Microsoft Windows PC Computer Repair</li>
                            <li>Apple iMac and Macbook Computer Repair</li>
                            <li>Data Recovery</li>
                            <li>Viruses, Spyware, Adware and Ransom-ware Removal</li>
                            <li>Cracked and Broken Laptop Screen Replacements</li>
                            <li>Charging Issues, Charging Ports Repairs and Replacements</li>
                            <li>Computer Tune Ups, Hardware Repair, Installations</li>
                            <li>Printer Set Ups / Troubleshooting</li>
                        </ul>
                    </div>
                    <div class="divider visible-sm visible-xs"></div>
                    <div class="col-md-6">
                        <h2>Free <span class="color">Estimate</span></h2>
                        <p class="info">Get your computer fixed today!</p>
                        <div class="quote-form">

                            {{-- <form wire:submit.prevent='submit'>
                                <div class="wrapper">
                                    <div class="input-half pull-left">
                                        <input type="text" placeholder="Name" name="name" wire:model='name'>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input-half pull-right">
                                        <input type="text" placeholder="Email Address" name="email" wire:model='email'>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="text" placeholder="Phone" name="phone" class="input-full"
                                    wire:model='contact'>
                                @error('contact')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <textarea placeholder="Message" name="message" class="input-full" wire:model='message'></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('success') }}
                                    </div>
                                @endif
                                <button type="submit" class="btn">Get a Quote</button>
                            </form> --}}
							<form id="" class="contact-form" wire:submit.prevent='submit'>
								<div class="inputs-col">
									<div class="row">
										<div class="col-md-6">
											<div class="input-wrapper">
												<label>Name <span class="required">*</span></label>
												<input type="text" class="input-custom input-full" name="name"
													placeholder="Your name" wire:model="name">
												@error('name')
													<span class="text-danger">{{ $message }}</span>
												@enderror
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-wrapper">
												<label>Phone</label>
												<input type="tel" class="input-custom input-full" name="phone"
													placeholder="xxxxx xxxxx" wire:model="contact">
												@error('contact')
													<span class="text-danger">{{ $message }}</span>
												@enderror
											</div>
										</div>
									</div>
									<div class="input-wrapper">
										<label>Email<span class="required">*</span></label>
										<input type="text" class="input-custom input-full" name="email"
											placeholder="xxxx@xxxx.xxx" wire:model="email">
										@error('email')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div>
									<label>Message<span class="required">*</span></label>
									<textarea class="textarea-custom input-full" name="message" wire:model="message"></textarea>
									@error('name')
										<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
								@if (Session::has('success'))
									<div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
								@endif
								@if (Session::has('error'))
									<div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
								@endif
								<button type="submit" class="btn btn-border"><span>Send Message</span></button>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Block -->
        <!-- Testimonials Block -->
        {{-- <div class="block bg-2">
			<div class="container">
				<div class="testimonials">
					<h2 class="h-lg text-center">Our <span class="color">Testimonials</span></h2>
					<p class="info text-center">There are many valid reasons why you should choose us to take care of your valuable device</p>
					<div class="row testimonials-carousel light-arrow">
						<div class="testimonials-item col-sm-6 col-md-4 animation" data-animation="scaleOut" data-animation-delay="0.5s">
							<div class="inside">
								<h5>Laptop Repair</h5>
								<div class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>
								<div class="text">Problems I had with my laptop was sorted in very short time, reasonable price. Engineer provides good service. Recommended.</div>
								<div class="username">– Michael P. Solomon</div>
							</div>
						</div>
						<div class="testimonials-item col-sm-6 col-md-4 animation" data-animation="scaleOut" data-animation-delay="0s">
							<div class="inside">
								<h5>MacBook Repairs</h5>
								<div class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>
								<div class="text">My Macbook was repaired same day! These guys know what they are doing. Quick and professional. Recommended to everyone.</div>
								<div class="username">– Ella H. Wells</div>
							</div>
						</div>
						<div class="testimonials-item col-sm-6 col-md-4 animation" data-animation="scaleOut" data-animation-delay="0.5s">
							<div class="inside">
								<h5>Computer Repairs</h5>
								<div class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div>
								<div class="text">I have used Computer repair for a very long time and have always been pleased with the services and staff.</div>
								<div class="username">– Frances J. Nicastro</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
        <!-- //Testimonials Block -->
        <!-- Block -->
        <div class="block bottom-md">
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
        <!-- //Block -->
        <!-- Question Block -->
        <div class="block bg-dark pad-sm">
            <div class="container">
                <div class="text-center">
                    <h2>Getting Help is Easy</h2>
                    <p class="info">Have a question? Give us a call or stop by for a quote. It's that easy.
                    </p>
                    <div class="btn-inline">
                        <a class="btn btn-white wide" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Question Block -->
        <!-- Sertificates Block -->
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-img animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                            <div class="image"><img src="{{ asset('assets/images/sertficate-01.png') }}"
                                    alt=""></div>
                            <h5 class="title">We Value Your Time</h5>
                            <p>Our tech support saves your time and energy and lets you enjoy your computer to the max.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-img animation" data-animation="fadeInUp" data-animation-delay="0s">
                            <div class="image"><img src="{{ asset('assets/images/sertficate-02.png') }}"
                                    alt=""></div>
                            <h5 class="title">Remote, Hyper-secure Connection</h5>
                            <p>You select the service you need, and our tech support does all the work through a remote,
                                hyper-secure connection.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-img animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                            <div class="image"><img src="{{ asset('assets/images/sertficate-03.png') }}"
                                    alt=""></div>
                            <h5 class="title">Customer Happiness</h5>
                            <p>Your satisfaction is our #1 priority. We pledge to be by your side until you are 100%
                                satisfied with our services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Sertificates Block -->
    </div>
    <!-- // Content  -->
</div>
