<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>


    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>
    <div id="preloader"></div>
    <div class="spyre">
        <div class="overlay">
            <div class="spyre-header">
                <div class="container">
                    <div class="spyre-header-content">
                        <a href="{{route('index')}}"><img src="{{ asset('assets/img/logo-01.svg') }}" alt=""></a>
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
                <h1>SPYRE</h1>
                <p>Slick contemporary multipurpose theme</p>
                <div class="spyre-content-buttons">
                    <button class="btn1">EXPLORE DEMOS</button>
                    <button class="btn2">PURCHASE NOW</button>
                </div>
            </div>
        </div>
    </div>

    <!-- check Section -->
    <div class="check">
        <div class="check-title">
            <h2>CHECK OUT</h2>
            <h3>MAIN FEATURES</h3>
            <p>Spyre is a fully responsive contemporary theme that offers
                maximum flexibility in the creation of visually engaging and
                highly legible page layouts.
            </p>
        </div>

        <div class="check-icons">
            <div class="check-icons-top">
                <div class="check-icons-content">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <span>FULLY RESPONSIVE</span>
                </div>
                <div class="check-icons-content">
                    <i class="fa-brands fa-twitter"></i>
                    <span>LATEST BOOTSTRAP</span>
                </div>
                <div class="check-icons-content">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span>100% CUSTOMIZABLE</span>
                </div>
                <div class="check-icons-content">
                    <i class="fa-brands fa-sass"></i>
                    <span>BUILT WITH SASS</span>
                </div>
            </div>

            <div class="check-icons-top width-icons">
                <div class="check-icons-content">
                    <i class="fa-brands fa-css3"></i>
                    <span> ANIMATIONS</span>
                </div>
                <div class="check-icons-content">
                    <i class="fa-solid fa-code"></i>
                    <span>POWERFUL SCRIPTS</span>
                </div>
                <div class="check-icons-content">
                    <i class="fa-solid fa-window-maximize"></i>
                    <span>CROSS BROWSER</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Section -->
    <div class="start mb">
        <div class="start-content">
            <h2>Start bulding beautiful website with spyre</h2>
            <button>PURCHASE NOW</button>
            <p>Available exclusively at Bootstrab Thems</p>
        </div>
    </div>

    <!-- DEMO PAGES -->
    <div class="demoPages">
        <div class="demoPages-content">
            <h2>EXPLORE</h2>
            <h1>DEMO PAGES</h1>
        </div>

        <div class="demos-pages-section-one">
            <div class="homePage">
                <a href="{{ route('home-page') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/homepage.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('home-page') }}"></a>Homepage</h1>
            </div>
            <div class="Services">
                <a href="{{ route('services') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/services.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('services') }}"></a>Services</h1>
            </div>
        </div>

        <div class="demos-pages-section-two">
            <div class="homePage">
                <a href="{{ route('blog') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/blog.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('blog') }}"></a>Blog</h1>
            </div>
            <div class="Services">
                <a href="{{ route('blog-single') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/blog-single.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('blog-single') }}"></a>Blog Single</h1>
            </div>
        </div>

        <div class="demos-pages-section-three">
            <div class="homePage">
                <a href="{{ route('portfolio') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/portfolio.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('portfolio') }}"></a>Portfolio</h1>
            </div>
            <div class="Services">
                <a href="{{ route('about') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/about.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('about') }}"></a>About</h1>
            </div>
        </div>

        <div class="demos-pages-section-four">
            <div class="homePage">
                <a href="{{ route('contact') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/contact.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('contact') }}"></a>Contact</h1>
            </div>
            <div class="Services">
                <a href="{{ route('team') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/team.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('team') }}"></a>Team</h1>
            </div>
        </div>

        <div class="demos-pages-section-five">
            <div class="homePage">
                <a href="{{ route('faq') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/faq.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('faq') }}"></a>Faq</h1>
            </div>
            <div class="Services">
                <a href="{{ route('pricing') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/pricing.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('pricing') }}"></a>Pricing</h1>
            </div>
        </div>

        <div class="demos-pages-section-sex">
            <div class="homePage">
                <a href="{{ route('careers') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/careers.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('careers') }}"></a>Careers</h1>
            </div>
            <div class="Services">
                <a href="{{ route('careers-single') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/careers-single.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('careers-single') }}"></a>Careers Single</h1>
            </div>
        </div>

        <div class="demos-pages-section-seven">
            <div class="homePage">
                <a href="{{ route('coming-soon') }}"> <img src="{{ asset('assets/img/coming-soon.png') }}" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('coming-soon') }}"></a>Coming Soon</h1>
            </div>
            <div class="Services">
                <a href="{{ route('404') }}"> <img src="{{ asset('assets/img/404.png') }}" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('404') }}"></a>404</h1>
            </div>
        </div>

        <div class="demos-pages-section-eight">
            <div class="homePage">
                <a href="{{ route('sign-in') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/sign-in.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('sign-in') }}"></a>Sign In</h1>
            </div>
            <div class="Services">
                <a href="{{ route('recover-account') }}"> <img src="{{ asset('assets/img/SPYRE - Profile 1 - Microsoft​ Edge 3_13_2022 12_04_07 AM (2).png') }}" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('recover-account') }}"></a>Recover Account</h1>
            </div>
        </div>


        <div class="demos-pages-section-nine mb-single">
            <div class="homePage">
                <a href="{{ route('sign-up') }}"> <img src="https://spyre-theme.bitbucket.io/v1.4.0/assets/img/printscreens/sign-up.jpg" alt=""> <i class="fa-solid fa-link"></i></a>
                <h1><a href="{{ route('sign-up') }}"></a>Sign Up</h1>
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