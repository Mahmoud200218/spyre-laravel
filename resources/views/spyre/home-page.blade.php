<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers-single.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="home mb">
        <div class="home-left">
            <h1>We deliver <span id="span">inspiration,</span> <br>right into your business. </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Fusce fermentum varius mi non finibus.
                Quisque dignissim sit amet libero ac egestas.</p>
            <div class="left-btns">
                <button class="btn-all" style="background-color: #f12639; margin-right: 20px;">GET IN TOUCH</button>
                <button style="background-color: #1f2749;">READ MORE</button>
            </div>
        </div>

        <div class="home-right">
            <img src="{{ asset('assets/img/home 1.jpg') }}" alt="">
        </div>
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

    <!--Boxes-->

    <div class="boxes ">
        <div class="box-boxes">
            <h2>01 COMMUNICATION</h2>
            <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                In sit amet velit a felis maximus blandit.
                Sed tellus velit, sagittis et tempus vulputate amitino.
            </p>
        </div>

        <div class="box-boxes">
            <h2>02 PLANNING</h2>
            <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                In sit amet velit a felis maximus blandit.
                Sed tellus velit, sagittis et tempus vulputate amitino.
            </p>
        </div>

        <div class="box-boxes">
            <h2>03 DELIVERING</h2>
            <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                In sit amet velit a felis maximus blandit.
                Sed tellus velit, sagittis et tempus vulputate amitino.
            </p>
        </div>
    </div>


    <!--Core-->
    <div class="core ">
        <div class="core-left">
            <div class="core-left-content">
                <div class="core-left-title">
                    <h3>WE CAN HELP</h3>
                    <h1>SERVICES</h1>
                </div>
                <p>Sed facilisis blandit diam ut commodo. Duis consequat justo eu eros varius, non interdum purus sagittis.
                    Integer imperdiet justo vulputate lectus mattis fringilla.
                    Maecenas arcu turpis, imperdiet porttitor consectetur condimentum, pretium eget ante.
                    Aenean mattis mauris leo, ac pretium justo viverra in. In sit amet malesuada purus.
                </p>
            </div>
        </div>
        <div class="core-right">
            <h2><i class="fa-solid fa-lightbulb"></i> CORE SERVICES</h2>
            <ul class="list">
                <li><span class="span-color">01</span> Strategy</li>
                <li><span class="span-color">02</span> Advisory Consulting</li>
                <li><span class="span-color">03</span> Managed Services</li>
                <li><span class="span-color">04</span> Concept Developemnt</li>
                <li><span class="span-color">05</span> Business</li>
            </ul>
            <p id="par"><a href="#">VIEW MORE <i class="fa-solid fa-right-long"></i></a></p>
        </div>
    </div>


    <!--Video-->
    <div class="vid mb">
        <video controls src="{{ asset('assets/video/vid-home.mp4') }}" width="100%"></video>
    </div>



    <!-- Gallary images-->
    <div class="gallary ">
        <div class="title">
            <h2>GALLERY</h2>
            <h1>OFFICE</h1>
        </div>
        <header class="head-gallary">
            <span id="span-gallary-one" class="span-gallary">&#139;</span>
            <span id="span-gallary-two" class="span-gallary">&#155;</span>
        </header>
        <section>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 01.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 02.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 03.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 04.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 05.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 06.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 07.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 08.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/home 09.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 10.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 11.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 12.jpg') }}" alt="">
            </div>
        </section>
    </div>

    <!--Slider-->

    <div class="slider">
        <div class="container">
            <div class="prev-btn"><i class="fa fa-chevron-left color" aria-hidden="true"></i></div>

            <div class="slides-container">
                <div class="slide-image">
                    <img src="{{ asset('assets/img/home 3.jpg') }}" alt="image 1" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Amet minima rem, vel repellendus ullam corporis possimus ex earum explicabo,
                        voluptatum, natus sapiente perferendis adipisci velit. Perferendis sed eos porro labore.</p>
                    <div class="footer-slide">
                        <h3>Lawrence Wilson</h3>
                        <h4>Lorem, ipsum dolor.</h4>
                    </div>
                </div>

                <div class="slide-image">
                    <img src="{{ asset('assets/img/home 4.jpg') }}" alt="image 1" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Amet minima rem, vel repellendus ullam corporis possimus ex earum explicabo,
                        voluptatum, natus sapiente perferendis adipisci velit. Perferendis sed eos porro labore.</p>\
                    <div class="footer-slide">
                        <h3>Lawrence Wilson</h3>
                        <h4>Lorem, ipsum dolor.</h4>
                    </div>
                </div>

                <div class="slide-image">
                    <img src="{{ asset('assets/img/home 5.jpg') }}" alt="image 1" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Amet minima rem, vel repellendus ullam corporis possimus ex earum explicabo,
                        voluptatum, natus sapiente perferendis adipisci velit. Perferendis sed eos porro labore.</p>
                    <div class="footer-slide">
                        <h3>Lawrence Wilson</h3>
                        <h4>Lorem, ipsum dolor.</h4>
                    </div>
                </div>

                <div class="slide-image">
                    <img src="{{ asset('assets/img/home 6.jpg') }}" alt="image 1" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Amet minima rem, vel repellendus ullam corporis possimus ex earum explicabo,
                        voluptatum, natus sapiente perferendis adipisci velit. Perferendis sed eos porro labore.</p>
                    <div class="footer-slide">
                        <h3>Lawrence Wilson</h3>
                        <h4>Lorem, ipsum dolor.</h4>
                    </div>
                </div>


            </div>

            <div class="next-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
        </div>
        <div class="navigation-dots"></div>
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
    <script src="{{ asset('assets/js/faq.js') }}"></script>
    <script src="{{ asset('assets/js/careers-single.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/home.js') }}"></script>
</body>

</html>