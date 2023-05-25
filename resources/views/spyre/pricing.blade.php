<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pricing.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="pricing mb">
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
        </div>

        <div class="spyre-content">
            <h1>PRICING</h1>
            <p>Transparent, simple options</p>
        </div>
    </div>


    <!-- Popular -->
    <div class="popular ">
        <div class="boxes">
            <div class="box-one">
                <div class="box-title">
                    <h2>SPYRE <a href="#"> BASIC </a></h2>
                    <p>FREE</p>
                </div>

                <nav class="nav">
                    <ul>
                        <li>1 user</li>
                        <li>1 database</li>
                        <li>Free CMS access</li>
                        <li>CMS tools</li>
                        <li>Fix domain</li>
                        <li>Technical support</li>
                        <li>Local storage</li>
                        <li>Analytics</li>
                    </ul>
                </nav>

                <button>DOWNLOAD NOW</button>
                <p id="par">By clicking you are accepting Terms of use</p>
            </div>

            <div class="box-one " style="margin-top:-30px; background-color: #1f2749!important;">
                <div class="box-title">
                    <h2 style="color:#fff ;">SPYRE <a href="#" style="color: #fff;"> PRO </a></h2>
                    <p>$39/m</p>
                </div>

                <nav class="nav">
                    <ul style="color:#fff;">
                        <li>1 user</li>
                        <li>1 database</li>
                        <li>Free CMS access</li>
                        <li>CMS tools</li>
                        <li>Fix domain</li>
                        <li>Technical support</li>
                        <li>Local storage</li>
                        <li>Analytics</li>
                    </ul>
                </nav>

                <button>DOWNLOAD NOW</button>
                <p id="par" style="color:#FFF">By clicking you are accepting Terms of use</p>
            </div>

            <div class="box-one ">
                <div class="box-title">
                    <h2>SPYRE <a href="#"> ADVANCED </a></h2>
                    <p>$79/m</p>
                </div>

                <nav class="nav">
                    <ul>
                        <li>Unlimited user</li>
                        <li>Unlimited database</li>
                        <li>Free CMS access</li>
                        <li>Custom add-ons</li>
                        <li>Custom domain/subdomain</li>
                        <li>Technical support</li>
                        <li>Cloud storage</li>
                        <li>Analytics</li>
                    </ul>
                </nav>

                <button>DOWNLOAD NOW</button>
                <p id="par">By clicking you are accepting Terms of use</p>
            </div>
        </div>
    </div>


    <!--ABOUT-->
    <div class="about" style="margin-top: 100px;">
        <div class="about-title">
            <h2>ABOUT</h2>
            <h1>OUR PRICING</h1>
        </div>
        <div class="list-one" style="margin-top:50px;">
            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-dollar-sign"></i> AFFORDABLE</h2>
                <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                    Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                </p>
            </div>

            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-calendar-check"></i> PREDICTABLE</h2>
                <p>Pellentesque ultrices ante id tristique porttitor. Nullam euismod nisl eget odio tincidunt, quis egestas sem eleifend.
                    Phasellus faucibus sapien eu suscipit ultricies.
                </p>
            </div>
        </div>


        <div class="list-two">
            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-circle-dot"></i> MONITORABLE</h2>
                <p>Praesent venenatis mollis commodo. Aliquam odio nisl, faucibus sit amet sem dapibus, accumsan vehicula magna.
                    Praesent faucibus eu lectus ultrices lacinia.
                    Nulla eu lobortis ipsum.
                </p>
            </div>

            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-traffic-light"></i> FULL CONTROL</h2>
                <p>Vestibulum ac est ac nibh auctor pellentesque. Phasellus pulvinar metus ut venenatis pharetra.
                    Nulla a lectus a orci rutrum maximus at non ante. Interdum et malesuada fames.
                </p>
            </div>
        </div>
    </div>


    <!--ASK-->
    <div class="ask " style="background-color: #f12639!important ;">
        <div class="ask-content">
            <button style="background-color: #f12639!important; border:1px solid #fff;">ASK US <i class="fa-solid fa-headphones-simple"></i></button>
            <p style="color: #fff;">Still have a question? Nullam vestibulum tellus ipsum, viverra urna blandit
                non. Interdum et malesuada fames ac ante ipsum primis.
            </p>
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
    <script src="{{ asset('assets/js/pricing.js') }}"></script>
</body>

</html>