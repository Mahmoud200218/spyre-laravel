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
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="about mb">
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
                <h1 style="font-size:60px; padding:20px 0;">ABOUT US</h1>
                <p>Aliquam mauris tempor vel posuere.</p>

            </div>
        </div>
    </div>


    <!--COMPANY-->
    <div class="company mb" style="margin-bottom:10%;">
        <h2>ABOUT US</h2>
        <h1>THE COMPANY</h1>
        <div class="company-content">
            <div class="company-left">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis magna eu elit rutrum commodo.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    Sed lobortis ipsum ex, vel tempus erat finibus at. <br> <br> Etiam sit amet efficitur massa.
                    Fusce eleifend nisi metus, ut tempor lectus ultrices ut. Donec et arcu a est hendrerit tristique.
                    Aliquam maximus, leo a aliquet vulputate, orci diam congue ligula, at dictum sem velit id lectus.
                    Nam eu elit dolor. Sed aliquet vestibulum urna. Sed tristique at libero id suscipit.
                    Sed vehicula lectus ut velit placerat placerat. Praesent finibus enim feugiat neque cursus lacinia.
                    Nullam sed mi augue. Duis nec arcu id ante posuere posuere.
                </p>
                <button>SERVICES <i class="fa-solid fa-link"></i></button>
            </div>
            <div class="company-right">
                <img class="img-one" src="{{ asset('assets/img/about 2.jpg') }}" alt="">
                <img class="img-two" src="{{ asset('assets/img/about 3.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <!--work-->
    <div class="work ">
        <div class="work-left">
            <div class="list-one">
                <div class="box">
                    <span id="span">01</span>
                    <h2>ONLINE</h2>
                    <p>
                        Proin venttdio nunc, id fringilla augue luctus et.
                        Mauris condimentum vehicula magna a vehicula.
                        Cras ornare, ligula id semper fringilla,
                        ex turpis aliquet ex, et maximus metus turpis a orci.
                    </p>
                </div>
                <div class="box" style="height:75vh;">
                    <span id="span">02</span>
                    <h2>
                        WEB & MOBILE</h2>
                    <p>
                        Sed vestibulum libero urna, a rhoncus sem vehicula sit amet.
                        Integer scelerisque vel odio sit amet vehicula. Nullam odio tellus, maximus sit amet mauris ut,
                        condimentum vestibulum mi.
                        Maecenas eu nisl nec metus rutrum feugiat et vel mauris.
                    </p>
                </div>
            </div>

            <div class="list-one">
                <div class="box" style="height: 80vh; margin-top: -60px;">
                    <span id="span">03</span>
                    <h2>IDENTITY</h2>
                    <p>
                        Nunc lacus lectus, feugiat a fringilla in, volutpat eu felis. Nunc molestie id dui a sagittis. <br> <br>
                        Nulla molestie, sapien eget dapibus imperdiet, urna orci faucibus enim,
                        ac ultricies quam ligula quis ex malesuad sed aliquam et. Cras mollis,
                        neque egestas fringilla mattis, lacus libero molestie.
                    </p>
                </div>
                <div class="box">
                    <span id="span">04</span>
                    <h2>
                        MARKETING</h2>
                    <p>
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                        per inceptos himenaeos. Vivamus ac sollicitudin leo,
                        a cursus odio. Nam augue metus, auctor rutrum interdum nec urat.
                    </p>
                </div>
            </div>
        </div>
        <div class="work-right">
            <div class="right-title">
                <h3>REFERENCES</h3>
                <h1>OUR WORK</h1>
            </div>
            <p>Maecenas a risus eget turpis aliquam porttitor.
                Fusce vestibulum hendrerit ipsum, id condimentum risus laoreet vitae.
                Aenean at nulla posuere, sodales arcu ut, ornare odio. <br> <br>
                Proin at dignissim neque. Donec quis metus scelerisque, accumsan ante non, rutrum dolor.
                Pellentesque sit amet est eu dolor auctor placerat quis nec mi.
                Nam tempor porta mauris, et porttitor mauris venenatis vitae.
                Morbi vestibulum lorem in augue egestas. <br> <br>
                Integer laoreet, ipsum non porttitor rutrum, mi enim accumsan ante,
                sit amet condimentum dui neque nec turpis. Phasellus cursus
                ipsum efficitur ante ultricies bibendum.
                Donec rutrum volutpat enim, ut tempor est ultricies sit amet.
                Vivamus et hendrerit neque. <br> <br>
                Cras mollis, neque egestas fringilla mattis,
                lacus libero molestie nunc, et condimentum lorem erat id tortor.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Donec varius orci sit amet nibh scelerisque, quis dapibus urna posuere.
                In hac habitasse platea dictumst.
                Proin convallis magna vel lectus blandit, rhoncus lacinia neque
                rhoncus. Nam lacinia elit vel vehicula porta.
            </p>
        </div>
    </div>


    <!--ASK-->
    <div class="ask " style="background-color: #f12639;">
        <div class="ask-content">
            <p style=" color: #fff;">Still have a question? Nullam vestibulum tellus ipsum, viverra urna blandit
                non. Interdum et malesuada fames ac ante ipsum primis.
            </p>
            <button style=" color: #f12639; ">JOIN US <i class="fa-solid fa-user-group"></i></button>
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