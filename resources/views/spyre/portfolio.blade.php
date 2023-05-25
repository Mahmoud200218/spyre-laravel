<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="portfolio mb">
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
                <h1 style="font-size:60px; padding:20px 0;">OUR WORK</h1>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Suspendisse diam.
                </p>
                <div class="spyre-content-buttons">
                    <button class="btn1" style="height:70px; margin: -25px 0 0 15px;">GET A QUOTE</button>
                </div>
            </div>
        </div>
    </div>


    <div class="filter">
        <div class="filter-left">
            <ul class="list-one">
                <h3>TYPES</h3>
                <li class="active" data-cat=".all"><a href="#"></a>All</li>
                <li data-cat=".art"><a href=""></a>Art</li>
                <li data-cat=".brand"><a href="#"></a>Branding</li>
                <li data-cat=".Identity"><a href="#"></a>Identity</li>
                <li data-cat=".print"><a href="#"></a>Print</li>
                <li data-cat=".web"><a href="#"></a>Web</li>
            </ul>

            <ul class="list-one">
                <h3>CATEGORIES</h3>
                <li class="active" data-cat=".all"><a href="#"></a>All</li>
                <li data-cat=".Campaign"><a href="#"></a>Campaign</li>
                <li data-cat=".Online"><a href="#"></a>Online</li>
                <li data-cat=".Video"><a href="#"></a>Video</li>
                <li data-cat=".Vision"><a href="#"></a>Vision</li>
            </ul>
        </div>
        <div class="filter-right">
            <div class="filter-images">
                <div class="images-one">
                    <img class="all Identity print Vision" src="{{ asset('assets/img/portfolio 1.jpg') }}" alt="">
                    <img class="all Identity Campaign Vision brand" src="{{ asset('assets/img/portfolio 2.jpg') }}" alt="">
                    <img class="all Identity Vision" src="{{ asset('assets/img/portfolio 3.jpg') }}" alt="">
                </div>

                <div class="images-one">
                    <img class="all Identity Campaign brand" src="{{ asset('assets/img/portfolio-04.jpg') }}" alt="">
                    <img class="all Identity art Vision" style="width: 610px;" src="{{ asset('assets/img/portfolio-05.jpg') }}" alt="">
                </div>

                <div class="images-one">
                    <img class="all Online" style="height:630px;" src="{{ asset('assets/img/portfolio-06.jpg') }}" alt="">
                    <img class="all web Video" src="{{ asset('assets/img/portfolio-07.jpg') }}" alt="">
                    <img class="all Campaign" src="{{ asset('assets/img/portfolio-08.jpg') }}" alt="">
                    <div class="img-solo">
                        <img class="all art Vision" style="margin-right: 30px; height: 630px;" src="{{ asset('assets/img/portfolio-09.jpg') }}" alt="">
                        <img class="all art" src="{{ asset('assets/img/portfolio-10.jpg') }}" alt="">
                    </div>
                </div>

                <div class="images-one">
                    <img class="all web Online " src="{{ asset('assets/img/portfolio-11.jpg') }}" alt="">
                    <img class="all  " src="{{ asset('assets/img/portfolio-12.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>


    <!--GOALS-->
    <div class="goals mb">
        <h1>OUR PROJECT GOAL</h1>
        <p>Integer urna nibh, ultricies eget velit sed, ornare mollis nibh.
            Sed sagittis, enim scelerisque bibendum hendrerit, ligula est sagittis magna, at faucibus eros orci a nunc.
            Aliquam non mauris at elit.</p>
    </div>


    <!--ASK-->
    <div class="ask " style="background-color: #1f2749;">
        <div class="ask-content">
            <p style="color: #fff;">Still have a question? Nullam vestibulum tellus ipsum, viverra urna blandit
                non. Interdum et malesuada fames ac ante ipsum primis.
            </p>
            <button style="border: 1px solid #fff;">GET STARTED <i class="fa-solid fa-headphones-simple"></i></button>
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
    <script src="{{ asset('assets/js/portfolio.js') }}"></script>
</body>

</html>