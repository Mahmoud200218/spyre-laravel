<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers-single.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="contact mb">
        <div class="overlay">
            <div class="spyre-header">
                <div class="container">
                    <div class="spyre-header-content">
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo-01.svg') }}" alt=""></a>
                        <nav>
                            <a href="#">Contact us: info@spyre.com</a>
                            <span>+1-202-555-0149</span>
                        </nav>
                        <div class="spyre-header-icons">
                            <i class="search fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spyre-content">
                <h1 style="font-size:60px; padding:20px 0;">CONTACT US</h1>
                <div class="spyre-content-buttons">
                    <button class="btn1" style="width: 250PX; height:60px; font-weight: bolder;">GET IN TOUCH</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Us-->
    <div class="contact-us mb">
        <div class="contact-us-title">
            <h2>GET IN TOUCH</h2>
            <h1>CONTACT US</h1>
        </div>
        <p>Sed eu sapien accumsan, rutrum velit et, imperdiet elit.
            Vivamus posuere eleifend enim auctor congue. Vivamus sed lacus ex.
            Phasellus porta metus dui, eget porttitor dolor pharetra in.
            Fusce consequat convallis tincidunt.</p>
    </div>


    <!-- Map -->
    <div class="map mb">
        <div class="left-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107948.6779139564!2d34.574000938511595!3d31.489458669907048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f054e542767%3A0x7ff98dc913046392!2z2LrYstip!5e0!3m2!1sar!2s!4v1653656593691!5m2!1sar!2s" width="650" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="map-right">
            <form action="">
                <div class="content-three">
                    <input type="text" id="text" placeholder="Full name">
                    <input type="email" id="text" placeholder="Email address">
                    <textarea id="area" cols="30" rows="10" placeholder="Message"></textarea>
                    <button id="content-three-btn">SEND <i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>

    <!--View More-->
    <div class="more">
        <div class="more-content">
            <div class="more-one">
                <img src="{{ asset('assets/img/contact 1.jpg') }}" alt="">
                <h2>LOREM IPSUM DOLOR SIT AMET</h2>
                <p>Proin venttdio nunc, id fringilla augue luctus et.
                    Mauris condimentum vehicula magna a vehicula.
                    Cras ornare, ligula id semper fringilla, ex turpis.</p>
                <span><a href="">VIEW MORE <i class="fa-solid fa-arrow-right-long"></i></a></span>
            </div>

            <div class="more-one">
                <img src="{{ asset('assets/img/contact 2.jpg') }}" alt="">
                <h2>ETIAM PELLENTESQUE FELIS AT LIGULA</h2>
                <p>Proin venttdio nunc, id fringilla augue luctus et.
                    Mauris condimentum vehicula magna a vehicula.
                    Cras ornare, ligula id semper fringilla, ex turpis.</p>
                <span><a href="">VIEW MORE <i class="fa-solid fa-arrow-right-long"></i></a></span>
            </div>

            <div class="more-one">
                <img src="{{ asset('assets/img/contact 3.jpg') }}" alt="">
                <h2>PHASELLUS EGESTAS URNA</h2>
                <p>Proin venttdio nunc, id fringilla augue luctus et.
                    Mauris condimentum vehicula magna a vehicula.
                    Cras ornare, ligula id semper fringilla, ex turpis.</p>
                <span><a href="">VIEW MORE <i class="fa-solid fa-arrow-right-long"></i></a></span>
            </div>
        </div>
    </div>

    <!--Office-->
    <div class="office">
        <div class="overlay">
            <div class="office-content">
                <div class="the-office-content">
                    <h1>THE OFFICE LIFE</h1>
                    <p>Donec non tristique nunc. Aliquam quis egestas enim, ac dictum nibh. In vel libero quam.
                        Pellentesque commodo nisl risus, sed sodales orci volutpat at. Mauris ultricies at purus ac blandit.
                        Nunc rhoncus, lacus ut sollicitudin luctus, neque diam tempus arcu.
                    </p>
                    <div class="spyre-content-buttons">
                        <button class="btn1" style="width: 250PX; height:60px; font-weight: bolder;">VIEW MORE <i class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- SUBSCRIBE -->
    <div class="subscribe">
        <div class="sub-head">
            <h2>SUBSCRIBE</h2>
            <h1>NEWSLETTER</h1>
        </div>
        <p>Cras dapibus erat ex, sed efficitur ligula interdum ut.</p>

        <div class="sub-input">
            <input type="email" class="email" placeholder="Email address">
            <button>SUBSCRIBE</button>
        </div>
    </div>
    </div>


    <!-- Footer Section -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section-left">
                <h1>SPYRE</h1>
                <p>New York, NY <br>
                    62 Birchpond St. <br>
                    Crystal Lake, NY 11762</p>
                <span> <i class="fa-solid fa-phone"></i>+1-202-555-0149 <br> <i class="fa-solid fa-envelope"></i>info@spyre.com</span>
            </div>
            <div class="footer-list-one">
                <h2>SERVICES</h2>
                <ul>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Themes</a></li>
                    <li><a href="#">CMS</a></li>
                    <li><a href="#">Mobile</a></li>
                </ul>
            </div>

            <div class="footer-list-two">
                <h2>ABOUT</h2>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">The team</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Locate store</a></li>
                </ul>
            </div>

            <div class="footer-list-three">
                <h2>HELP</h2>
                <ul>
                    <li><a href="#">Sponsors</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Stories & Ideas</a></li>
                </ul>
            </div>
        </div>

        <div class="list-end">
            <div class="list-end-icons">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-solid fa-camera"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
            <span>© Spyre, 2019 Webinning Ltd.</span>
            <span>Privacy Policy|Cookie Policy</span>
        </div>
    </div>
    <script>
        let loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>