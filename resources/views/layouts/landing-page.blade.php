<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bethel Computech</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/landing-page/css/bootstrap.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/landing-page/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link testing -->

    <link rel="stylesheet" href="{{asset('assets/landing-page/css/custom.css')}}">

    <!-- Icon Font-->
    <link href="{{ asset('assets/iconfont/style.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Chivo:400,400i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css"
        integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/landing-page/input-tel/css/intlTelInput.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/landing-page/country-flag/css/countrySelect.min.css')}}">

    @livewireStyles
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" id="navbar">
        <div class="container">
            <a class="navbar-brand text-primary" href="/">
                <h2>Bethel Computech</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mac Repair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laptop Repair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Desktop Repair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Faqs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    {{$slot}}

    <!-- Footer -->
    <div class="page-footer">
        <div class="footer-content">
            <div class="back-to-top"><a href="#top"><span class="icon icon-chevron-arrow-up"></span></a></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="logo">
                            <div class="text-center">
                                <img src="{{asset('assets/images/new/logo.png')}}" alt="Logo" class="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-11">
                        <ul class="footer-menu">
                            <li><a href="#">iPad Repair</a></li>
                            <li><a href="{{route('services.laptop-repair')}}">Laptop Repair</a></li>
                            <li><a href="{{route('services.mac-repair')}}">Mac Repair</a></li>
                            <li><a href="{{route('services.pc-repair')}}">Computer Repair</a></li>
                        </ul>
                        <div class="social-links">
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
                            </ul>
                        </div>
                        <div class="footer-phone">
                            <i class="icon icon-phone-receiver"></i>Call Us to Our Office <span class="number">+91 98800
                                37944 / 88804 70007 </span>
                        </div>
                        <div class="row footer-columns">
                            <div class="col-lg-2 visible-lg"></div>
                            <div class="col-md-4 col-lg-3">
                                <div class="contact-info"><i class="icon icon-placeholder-for-map"></i>#528, Shop No. 1,
                                    1st Floor, Kempamma Building, Nagavara, Banglore 560 045</div>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="contact-info"><i class="icon icon-clock"></i>Mon-Sat: 10:00am -8:00pm
                                    <br> Sun: Holiday
                                </div>
                            </div>
                            <div class="col-lg-2 visible-lg"></div>
                            <div class="col-md-4 col-lg-3">
                                <ul class="footer-links">
                                    <li><a href="{{route('terms-and-conditions')}}">Terms and Conditions</a></li>
                                    <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright">© 2022 Bethel Computech. All Rights Reserved. Design and Developed by <a
                        href="https://shanthaswebz.com" target="_blank"
                        style="color:#9f9f9f; text-decoration: none;">Shanthas Webz</a>.</div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/landing-page/js/main.js') }}"></script>
    <script src="{{asset('assets/landing-page/input-tel/js/intlTelInput.min.js')}}"></script>
    <script src="{{asset('assets/landing-page/country-flag/js/countrySelect.min.js')}}"></script>
    <script>
        $("#country_selector").countrySelect({
                defaultCountry: "in",
                // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                // responsiveDropdown: true,
                preferredCountries: ['ca', 'gb', 'us']
            });
    </script>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
          // allowDropdown: false,
        //   autoHideDialCode: true,
        //    autoPlaceholder: "9999999999",
        //    dropdownContainer: document.body,
          // excludeCountries: ["us"],
        //    formatOnDisplay: false,
        //   geoIpLookup: function(callback) {
        //     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //       var countryCode = (resp && resp.country) ? resp.country : "";
        //       callback(countryCode);
        //     });
        //   },
          //hiddenInput: "full_number",
          initialCountry: "in",
          // localizedCountries: { 'de': 'Deutschland' },
        //   nationalMode: true,
          // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        //   placeholderNumberType: "9876543210",
          // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
          utilsScript: "{{asset('assets/landing-page/input-tel/js/utils.js')}}",
        });
    </script>

    @livewireScripts
</body>

</html>