<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>
    <!-- careers -->
    <div class="careers">
        <div class="careers-content mb">
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
        </div>

        <!-- Careers Working -->
        <div class="working" style="margin-bottom: 85%;">
            <h1>WORKING TOGETHER TO MAKE <br>
                WORK WORK BETTER</h1>
            <p>Pellentesque vel convallis dui. In at nibh scelerisque,
                convallis odio fringilla, luctus velit. Sed ac felis imperdiet, commodo diam
                sit amet, rhoncus eros. Morbi elementum libero a congue hendrerit. Quisque dictum porta ultrices. Etiam
                dignissim ipsum sem, et suscipit est tempus id. Etiam lectus lectus, imperdiet nec enim non.</p>

            <div class="working-images ">
                <img class="car1" src="{{ asset('assets/img/career-1.jpg') }}" alt="">
                <div class="car2-car3">
                    <img class="car2" src="{{ asset('assets/img/career-2.jpg') }}" alt="">
                    <img class="car3" src="{{ asset('assets/img/career-3.jpg') }}" alt="">
                </div>

                <div class="car4-car5">
                    <img class="car4" src="{{ asset('assets/img/career-4.jpg') }}" alt="">
                    <img class="car5" src="{{ asset('assets/img/career-5.jpg') }}" alt="">
                </div>

                <img class="car6" src="{{ asset('assets/img/career-6.jpg') }}" alt="">
            </div>
        </div>

        <!-- All POSITIONS-->
        <div class="all-positions">
            <div class="all-head">
                <p>ALL</p>
                <h1>OPEN POSITIONS</h1>
            </div>
            <div class="list-management-box1">
                <div class="list-one">
                    <ul>
                        <li><a href="#">Management</a></li>
                    </ul>
                </div>
                <div class="list-two">
                    <ul>
                        <li><a href="#">Project Manager <br> <span>$80-$90k</span></a>
                        </li>
                        <li><a href="#">Product Owner <br> <span>$80-$90k</span> </a>
                        </li>
                        <li><a href="#">Scrum Master <br> <span>$80-$90k</span></a>
                        </li>
                    </ul>
                </div>
                <div class="list-three">
                    <ul>
                        <li><a href="#">New York, US</a></li>
                        <li><a href="#">California, USA</a></li>
                        <li><a href="#">Beijing, China</a></li>
                    </ul>
                </div>
            </div>
            <hr style="margin-top:100px;">


            <div class="list-management-box1">
                <div class="list-one">
                    <ul>
                        <li><a href="#">Business Development</a></li>
                    </ul>
                </div>
                <div class="list-two">
                    <ul>
                        <li><a href="#">Senior PHP Developer <br> <span>$80-$90k</span></a>
                        </li>
                        <li><a href="#">Senior Front-End Developer <br> <span>$80-$90k</span> </a>
                        </li>
                        <li><a href="#">Front-End Developer <br> <span>$80-$90k</span></a>
                        </li>
                        <li><a href="#">Node Developer <br> <span>$80-$90k</span> </a>
                        </li>
                        <li><a href="#">Automation Tester <br> <span>$80-$90k</span> </a>
                        </li>
                    </ul>
                </div>
                <div class="list-three">
                    <ul>
                        <li><a href="#">London, UK</a></li>
                        <li><a href="#">London, UK</a></li>
                        <li><a href="#">Chicago, US</a></li>
                        <li><a href="#">Oxford, UK</a></li>
                        <li><a href="#">Sydney, Australia</a></li>
                    </ul>
                </div>
            </div>
            <hr style="margin-top:100px;">


            <div class="list-management-box1">
                <div class="list-one">
                    <ul>
                        <li><a href="#">Management</a></li>
                    </ul>
                </div>
                <div class="list-two">
                    <ul>
                        <li><a href="#">Project Manager <br> <span><span>$80-$90k</span></span></a>
                        </li>
                        <li><a href="#">Product Owner <br> <span><span>$80-$90k</span></span> </a>
                        </li>
                    </ul>
                </div>
                <div class="list-three">
                    <ul>
                        <li><a href="#">New York, US</a></li>
                        <li><a href="#">California, USA</a></li>
                    </ul>
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