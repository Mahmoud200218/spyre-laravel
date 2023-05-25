<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/team.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="team mb">
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
                <h1 style="font-size:60px; padding:20px 0;">THE TEAM</h1>
            </div>
        </div>
    </div>

    <!--MILLS-->
    <div class="mills ">
        <div class="mills-left">
            <img src="{{ asset('assets/img/team 2.jpg') }}" alt="">
            <div class="left-box">
                <h4>EDWARD MILLS</h4>
                <span style="color: #f12639;">CEO</span>
                <p id="par2">In at nisl ultrices, rutrum ex molestie, elementum mauris.
                    Nulla at felis lectus. Mauris placerat nibh vitae augue auctor, eget euismod velit tempus.
                    Nulla non risus sed odio vulputate pellentesque ut ut ante. Morbi odio tellus, placerat vitae felis a, facilisis ultrices orci.
                </p>

                <p id="par1">Donec convallis turpis purus,
                    ut sollicitudin ipsum convallis acunt.
                </p>
            </div>
        </div>
        <div class="mills-right">
            <i class="icon fa-solid fa-quote-left"></i>
            <p>Donec convallis ultricies ex. Etiam id luctus magna, eu tempor ipsum.
                Praesent eu pellentesque mauris.
                Aliquam non pellentesque eros, ut hendrerit sapien. Maecenas dignissim.
            </p>
        </div>
    </div>


    <!--ASK-->
    <div class="ask mb " style="background-color: #f12639!important ;">
        <div class="ask-content">
            <button style="background-color: #f12639!important; border:1px solid #fff;">ASK US <i class="fa-solid fa-headphones-simple"></i></button>
            <p style="color: #fff;">Still have a question? Nullam vestibulum tellus ipsum, viverra urna blandit
                non. Interdum et malesuada fames ac ante ipsum primis.
            </p>
        </div>
    </div>



    <!--Together-->
    <div class="together" style="margin-bottom:30%;">
        <div class="together-title">
            <h2>TOGETHER</h2>
            <h1>OUR TEAM</h1>
        </div>
        <div class="together-listOne">
            <div class="together-box">
                <img src="{{ asset('assets/img/team 3.jpg') }}" alt="">
                <div class="box-title">
                    <h4>NATALIE MEYER</h4>
                    <span style="padding:0 0 0 25px ; color: #f12639; ">Editor</span>
                </div>
                <p>Quisque feugiat sollicitudin nulla nec pulvinar.
                    Vestibulum convallis tempor felis nec iaculis.
                    Nunc efficitur a tortor vitae rhoncus.
                </p>
            </div>

            <div class="together-box" style="margin-top:2%;">
                <img src="{{ asset('assets/img/team 4.jpg') }}" alt="">
                <div class="box-title">
                    <h4>NATALIE MEYER</h4>
                    <span style="padding:0 0 0 25px ; color: #f12639; ">Editor</span>
                </div>
                <p>Quisque feugiat sollicitudin nulla nec pulvinar.
                    Vestibulum convallis tempor felis nec iaculis.
                    Nunc efficitur a tortor vitae rhoncus.
                </p>
            </div>


            <div class="together-box" style="margin-top:4%;">
                <img src="{{ asset('assets/img/team 5.jpg') }}" alt="">
                <div class="box-title">
                    <h4>NATALIE MEYER</h4>
                    <span style="padding:0 0 0 25px ; color: #f12639; ">Editor</span>
                </div>
                <p>Quisque feugiat sollicitudin nulla nec pulvinar.
                    Vestibulum convallis tempor felis nec iaculis.
                    Nunc efficitur a tortor vitae rhoncus.
                </p>
            </div>


            <div class="together-box" style="margin-top:6%;">
                <img src="{{ asset('assets/img/team 6.jpg') }}" alt="">
                <div class="box-title">
                    <h4>NATALIE MEYER</h4>
                    <span style="padding:0 0 0 25px ; color: #f12639; ">Editor</span>
                </div>
                <p>Quisque feugiat sollicitudin nulla nec pulvinar.
                    Vestibulum convallis tempor felis nec iaculis.
                    Nunc efficitur a tortor vitae rhoncus.
                </p>
            </div>
        </div>


        <div class="together-listOne">
            <div class="together-box" style="margin-top:12%;">
                <img src="{{ asset('assets/img/team 7.jpg') }}" alt="">
                <div class="box-title">
                    <h4>NATALIE MEYER</h4>
                    <span style="padding:0 0 0 25px ; color: #f12639; ">Editor</span>
                </div>
                <p>Quisque feugiat sollicitudin nulla nec pulvinar.
                    Vestibulum convallis tempor felis nec iaculis.
                    Nunc efficitur a tortor vitae rhoncus.
                </p>
            </div>

            <div class="together-box" style="margin-top:10%;">
                <img src="{{ asset('assets/img/team 8.jpg') }}" alt="">
                <div class="box-title">
                    <h4>NATALIE MEYER</h4>
                    <span style="padding:0 0 0 25px ; color: #f12639; ">Editor</span>
                </div>
                <p>Quisque feugiat sollicitudin nulla nec pulvinar.
                    Vestibulum convallis tempor felis nec iaculis.
                    Nunc efficitur a tortor vitae rhoncus.
                </p>
            </div>


            <div class="together-box" style="margin-top:8%;">
                <img src="{{ asset('assets/img/team 9.jpg') }}" alt="">
                <div class="box-title">
                    <h4>NATALIE MEYER</h4>
                    <span style="padding:0 0 0 25px ; color: #f12639; ">Editor</span>
                </div>
                <p>Quisque feugiat sollicitudin nulla nec pulvinar.
                    Vestibulum convallis tempor felis nec iaculis.
                    Nunc efficitur a tortor vitae rhoncus.
                </p>
            </div>


            <div class="together-box" style="margin-top:6%;">
                <img src="{{ asset('assets/img/team 10.jpg') }}" alt="">
                <div class="box-title">
                    <h4>NATALIE MEYER</h4>
                    <span style="padding:0 0 0 25px ; color: #f12639; ">Editor</span>
                </div>
                <p>Quisque feugiat sollicitudin nulla nec pulvinar.
                    Vestibulum convallis tempor felis nec iaculis.
                    Nunc efficitur a tortor vitae rhoncus.
                </p>
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