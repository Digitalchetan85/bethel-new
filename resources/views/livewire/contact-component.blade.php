<div>
    <!-- Content  -->
    <div id="page-content">
        <!-- Breadcrumbs Block -->
        <div class="block" id="bread">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->

        <!-- Block -->
        <div class="block">
            <div class="container">
                <h1 class="h-lg text-center">Contact <span class="color">Us</span></h1>
                <div class="row row-lined">
                    <div class="col-sm-3">
                        <div class="contact-info"><i class="icon icon-placeholder-for-map"></i>#528, Shop No. 1, <br>1st Floor, Kempamma Building, Nagavara, Banglore 560 045
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact-info"><i class="icon icon-clock"></i>Mon-Sat: 10:00am-8:00pm
                            <br> Sun: Holiday
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-links rounded text-right">
                            <ul>
                                <li>
                                    <a class="icon icon-facebook" href="#"></a>
                                </li>
                                <li>
                                    <a class="icon icon-twitter" href="#"></a>
                                </li>
                                <li>
                                    <a class="icon icon-google-plus" href="#"></a>
                                </li>
                                <li>
                                    <a class="icon icon-linkedin" href="#"></a>
                                </li>
                                <li>
                                    <a class="icon icon-pinterest" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{asset('assets/images/contact-img.jpg')}}" class="img-responsive" alt="">
                        <div class="divider-lg"></div>
                        <h6>Have any questions?</h6>
                        <p><a href="mailto:bethel.computech@gmail.com">bethel.computech@gmail.com</a>
                            <br>
                            
                        </p>
                    </div>
                    <div class="divider-lg visible-xs"></div>
                    <div class="col-sm-9 col-md-8 col-sm-offset-0 col-md-offset-1">
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
        <!-- //Block -->

        <div id="map">
            <div class="block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.939222761174!2d77.62166071409067!3d13.039540616913634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1783ea55e971%3A0xf99dc199a970f6e2!2sBethel%20Computech!5e0!3m2!1sen!2sin!4v1650870409183!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Get Now Block -->
        {{-- <div class="block bg-light full-block bottom-null">
            <div class="container">
                <div class="text-center">
                    <h2 class="h-lg">Get <span class="color">Your Computer</span> Fixed NOW!</h2>
                    <h3 class="subtitle">+91 98800 37944 / 88804 70007</h3>
                    <p class="info">for one of our professional computer repair techs to help you with your
                        Desktop, Laptop, Mac or other inquiry</p>
                    <div class="btn-inline">
                        <a class="btn btn-invert" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- //Get Now Block -->
    </div>
    <!-- // Content  -->
</div>
