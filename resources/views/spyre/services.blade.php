<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="services mb">
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
                <h1>
                    WHAT WE DO
                </h1>
            </div>
        </div>
    </div>

    <div class="boxes mb">
        <div class="box-boxes">
            <h2><i class="fa-solid fa-spinner"></i> STRATEGY</h2>
            <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                In sit amet velit a felis maximus blandit.
                Sed tellus velit, sagittis et tempus vulputate amitino.
            </p>
        </div>

        <div class="box-boxes">
            <h2><i class="fa-solid fa-wrench"></i> DEVELOPMENT</h2>
            <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                In sit amet velit a felis maximus blandit.
                Sed tellus velit, sagittis et tempus vulputate amitino.
            </p>
        </div>

        <div class="box-boxes">
            <h2><i class="fa-solid fa-person-walking"></i> CONSULTING</h2>
            <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                In sit amet velit a felis maximus blandit.
                Sed tellus velit, sagittis et tempus vulputate amitino.
            </p>
        </div>
    </div>



    <!-- Careers Working -->
    <div class="working" style="margin-bottom: 85%;">
        <h1>ADVISORY CONSULTING</h1>
        <p>Aliquam porttitor libero ut sodales scelerisque. Vestibulum ut sem ligula.
            Suspendisse luctus aliquam dolor in dapib. Integer pretium consectetur porta.
            Sed lacinia nisilia sit amet dui egestas gravida. Sed auctor lacus vitae blandit consectetur.
            Sed non erat lacus. Aliquam ultrices at sapien in tincidunt. Nulla quis ex ac est dictum aliquet.
            Cras tempor justo lobortis enim pretium, sed aliquet lectus vehicula.</p>

        <div class="working-images ">
            <img class="car1" src="{{ asset('assets/img/services 2.jpg') }}" alt="">
            <div class="car2-car3">
                <img class="car2" src="{{ asset('assets/img/services 3.jpg') }}" alt="">
                <img class="car3" src="{{ asset('assets/img/services 4.jpg') }}" alt="">
            </div>

            <div class="car4-car5">
                <img class="car4" src="{{ asset('assets/img/services 6.jpg') }}" alt="">
                <img class="car5" src="{{ asset('assets/img/services 7.jpg') }}" alt="">
            </div>

            <img class="car6" src="{{ asset('assets/img/services 8.jpg') }}" alt="">
        </div>
    </div>


    <!--ABOUT-->
    <div class="about  " style="margin-top: 100px; margin-bottom: -550px;">

        <div class="list-one" style="margin-top:50px;">
            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-spinner"></i> AFFORDABLE</h2>
                <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                    Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                </p>
            </div>

            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-hourglass"></i> PREDICTABLE</h2>
                <p>Pellentesque ultrices ante id tristique porttitor. Nullam euismod nisl eget odio tincidunt, quis egestas sem eleifend.
                    Phasellus faucibus sapien eu suscipit ultricies.
                </p>
            </div>
        </div>

        <div class="list-one" style="margin-top:50px;">
            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-graduation-cap"></i> AFFORDABLE</h2>
                <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                    Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                </p>
            </div>

            <div class="box-list-one">
                <h2><i class="icon icon fa-solid fa-dollar-sign"></i> PREDICTABLE</h2>
                <p>Pellentesque ultrices ante id tristique porttitor. Nullam euismod nisl eget odio tincidunt, quis egestas sem eleifend.
                    Phasellus faucibus sapien eu suscipit ultricies.
                </p>
            </div>
        </div>
        <div class="list-one" style="margin-top:50px;">
            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-person-walking"></i> AFFORDABLE</h2>
                <p>Suspendisse potenti. Maecenas consectetur enim ac turpis vehicula sagittis.
                    Nulla finibus gravida sodales. Cras vel tristique neque, et rutrum mi.
                </p>
            </div>

            <div class="box-list-one">
                <h2><i class="icon fa-solid fa-wrench"></i> PREDICTABLE</h2>
                <p>Pellentesque ultrices ante id tristique porttitor. Nullam euismod nisl eget odio tincidunt, quis egestas sem eleifend.
                    Phasellus faucibus sapien eu suscipit ultricies.
                </p>
            </div>
        </div>
        <button id="btn">
            REQUEST A QUOTE
        </button>
    </div>
    </div>
    </div>


    <!--Planning-->
    <div class="planning mb">
        <div class="plan-left">
            <img src="{{ asset('assets/img/services 09.webp') }}" alt="">
        </div>
        <div class="plan-right">
            <div class="plan-title">
                <h3>PLANNING</h3>
                <h2>ROADMAPS</h2>
            </div>
            <p>Sed facilisis blandit diam ut commodo. Duis consequat justo eu eros varius, non interdum purus sagittis.
                Integer imperdiet justo vulputate lectus mattis fringilla.
                Maecenas arcu turpis, imperdiet porttitor consectetur condimentum, pretium eget ante.
                Aenean mattis mauris leo, ac pretium justo viverra in. In sit amet malesuada purus.</p>
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