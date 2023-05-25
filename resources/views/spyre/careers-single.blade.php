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
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="spyre-careers mb">
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
                <h1 style="font-size:55px; padding-bottom:10px;">FRONT-END DEVELOPER</h1>
                <p>Chicago, US</p>
            </div>
        </div>
    </div>

    <!-- Job Description-->
    <div class="job">
        <div class="job-left">

        </div>
        <div class="job-right">
            <div class="content-one">
                <h1>JOB DESCRIPTION</h1>
                <p>We're one of the leading digital agencies in Chicago and we’re looking to add a new frontend developer to our brilliant team. <br> <br>

                    You will play an important part in maintaining the existing product and to help design, create and develop critical improvements and innovative new offerings for a new version soon to be launched in 2019. This is an exciting opportunity to join them at a key milestone in the growth of the business where they plan to fully globalise the product. <br> <br>

                </p>
                <img src="{{ asset('assets/img/careers-single 1.jpg') }}" alt="">
                <p>We love new technologies and we have embraced many modern frontend tools to make our code more maintainable such as SASS, flexbox and webpack. When it comes to our more bespoke systems with large amounts of interface to build, you may also find yourself working with React and ES6+ as well as collaborating... <br> <br>

                    We are proud to have a well respected team of frontend developers who work closely with our inhouse designers to to create intuitive and compelling user experiences, and would love to find the right person to join us as we line up a number of brand new big name clients.</p>
            </div>

            <div class="content-two">
                <h1>ESSENTIAL SKILLS</h1>
                <ul class="content-two-list">
                    <li>Strong proven experience with JavaScript</li>
                    <li>Strong experience with either of the following Vue.JS/AngularJS/NodeJS or ReactJS</li>
                    <li>Excellent knowledge of HTML, CSS</li>
                    <li>An understanding of GIT and GITflow</li>
                    <li>Working in a defined software development lifecycle</li>
                    <li>Agile methodologies</li>
                </ul>
                <p>The ideal candidate will be design focused, driven to understand what clients really value, and committed to building this value into the product whilst offering the best possible You may have full exposure to a number of JavaScript technologies but the company are fairly tech agnostic so if you have the willingness to learn and cross over into a new framework this role would be right for you.</p>
            </div>

            <div class="content-two">
                <h1>DESIRABLE SKILLS</h1>
                <ul class="content-two-list">
                    <li>Multiple framework exposure (React/Angular/Node/Vue) etc</li>
                    <li>API-based design (RESTful API's)</li>
                    <li>AWS (Amazon Web Services)</li>
                    <li>User experience</li>
                    <li>Unit Testing</li>
                </ul>
            </div>

            <div class="content-two">
                <h1>BENEFITS</h1>
                <ul class="content-two-list">
                    <li>Competitive Salary of £40,000-£48,000</li>
                    <li>25days holidays + Public Holidays</li>
                    <li>Company Pension contribution</li>
                    <li>Flexible working</li>
                    <li>Share/Investment Options (long term)</li>
                    <li>Working in a relaxed environment with excellent technology</li>
                    <li>Hackathons</li>
                </ul>
                <p>Along with loads of other benefits like a cool office dog, treats and days out...</p>
            </div>

            <div class="content-three">
                <h1>APPLY NOW</h1>
                <input type="text" id="text" placeholder="Full name">
                <input type="email" id="text" placeholder="Email address">
                <textarea id="area" cols="30" rows="10" placeholder="Message"></textarea>
                <button id="content-three-btn">SEND <i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <!-- Gallary images-->
    <div class="gallary">
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
                <img src="{{ asset('assets/img/gallary 1.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 2.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 3.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 4.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 5.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 6.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 7.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 8.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 9.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 10.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 11.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/gallary 12.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit</p>
            </div>
        </section>
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
    <script src="{{ asset('assets/js/careers-single.js') }}"></script>
</body>

</html>