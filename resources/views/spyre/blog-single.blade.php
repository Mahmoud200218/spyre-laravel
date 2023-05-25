<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers-single.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog-single.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

    <div id="preloader"></div>

    <div class="blog-single">
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

    <div class="red">
        <h1>YOU can relax. vour <br> business is in the right hands </h1>
    </div>


    <div class="white">
        <div class="white-left">
            <div class="read-left">
                <div class="list-one-left">
                    <h2>SHARE</h2>
                    <ul>
                        <li><button class="hov"> <i class="fa-brands fa-facebook-f"></i></button></li>
                        <li><button class="hov"> <i class="fa-brands fa-twitter"></i></button></li>
                        <li><button class="hov"> <i class="fa-brands fa-google-plus-g"></i></button></li>
                        <li><button class="hov"> <i class="fa-solid fa-envelope"></i></button></li>
                    </ul>
                </div>


                <div class="list-two-left">
                    <h2>SHARE</h2>
                    <ul>
                        <nav style="display: flex;">
                            <li><button class="hov"> SECURITY </button></li>
                            <li><button class="hov"> VESTIPULUM </button></li>
                        </nav>
                        <nav style=" position: absolute; display: flex; margin-top: 40px;">
                            <li><button class="hov"> DOLOR </button></li>
                            <li><button class="hov"> SUSPENDISSE</button></li>
                        </nav>
                        <nav style="position: absolute; display: flex; margin-top: 80px;">
                            <li><button class="hov"> CONSECTITUR</button></li>
                        </nav>
                    </ul>
                </div>

                <div class="list-three-left">
                    <h2>CATEGORIES</h2>
                    <ul>
                        <li class="hov">Strategy</li>
                        <li class="hov">Development</li>
                        <li class="hov">Consulting</li>
                        <li class="hov">Financial</li>
                        <li class="hov">Architecture</li>
                        <li class="hov">Investment</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="white-right">
            <div class="white-list">
                <h2>FINANCIAL SECURITY REMOTELY</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam auctor blandit augue, ac maximus turpis tincidunt at.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis in accumsan enim. Suspendisse sollicitudin est aliquam tellus porta lacinia eget quis elit.
                    Vivamus mollis odio eget diam cursus, eget ultricies mi aliquam. <br> <br>
                    Proin scelerisque augue et iaculis cursus. Suspendisse sagittis gravida auctor.
                    Vestibulum elementum nulla vitae cursus interdum.
                    In eget mi lobortis, auctor nulla vitae, dapibus urna. Aenean lobortis nulla.
                </p>
            </div>
            <div class="white-img">
                <img src="{{ asset('assets/img/single 2.jpg') }}" alt="">
                <p style="padding-bottom: 70px;">Morbi sed ligula nisi. Nulla aliquam id sem eget vulputate.
                    Ut aliquam lacus non aliquet ullamcorper. Nunc a lacus in tellus dapibus molestie.
                    Nullam vel sapien sed mauris aliquam varius at vel sem. Quisque sed orci ac nisi maximus luctus. <br> <br> <br>

                    <i class="icon fa-solid fa-quote-left"></i> Donec eleifend ante sed lacus cursus finibus. Nam dignissim posuere tellus sed feugiat.
                    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Nam quam ligula, fringilla ut convallis interdum, sagittis eu nisi.

                    <br> <br> <br>
                    In pulvinar ut purus placerat dapibus. Vivamus laoreet justo in purus cursus, non consectetur odio euismod.
                    Quisque imperdiet odio a erat mollis, eget suscipit ex ultrices. <br> <br>
                    Pellentesque dictum suscipit fermentum. Cras tincidunt dolor vitae iaculis tempor.
                    Vivamus rhoncus accumsan ligula ac euismod. Donec eu ex dui. Curabitur ac ultricies nibh, vitae bibendum velit.
                    Maecenas metus risus, volutpat a eros a, ultrices interdum sapien.
                </p>
            </div>
            <h2>PRAESENT IMPERDIET DOLOR</h2>
            <p class="par2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam auctor blandit augue, ac maximus turpis tincidunt at.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis in accumsan enim. Suspendisse sollicitudin est aliquam tellus porta lacinia eget quis elit.
                Vivamus mollis odio eget diam cursus, eget ultricies mi aliquam. <br> <br>
                Proin scelerisque augue et iaculis cursus. Suspendisse sagittis gravida auctor.
                Vestibulum elementum nulla vitae cursus interdum.
                In eget mi lobortis, auctor nulla vitae, dapibus urna. Aenean lobortis nulla.
            </p>
            <div class="images-list-one">
                <img style="width: 30%; height:350px;" src="{{ asset('assets/img/single 3.jpg') }}" alt="">
                <img style="width: 65%; height:350px;" src="{{ asset('assets/img/single 4.jpg') }}" alt="">
            </div>

            <div class="images-list-one">
                <img style="width: 55%; height:450px;" src="{{ asset('assets/img/single 5.jpg') }}" alt="">
                <img style="width: 40%; height:450px;" src="{{ asset('assets/img/single 6.jpg') }}" alt="">
            </div>
            <p>Nam tincidunt nunc quis tellus auctor elementum.
                Praesent malesuada, purus vel ultrices finibus, erat ipsum semper eros,
                nec pulvinar turpis ex ut enim. Nulla ornare nunc ligula, ut ullamcorper lorem convallis non.
                Nullam ligula eros, aliquet in urna id, aliquet sagittis mauris. Cras non faucibus odio.
                Nam cursus, nisi vitae ornare convallis, lectus ipsum elementum lectus, a gravida arcu leo sed lectus.
                Maecenas id augue vulputate, efficitur quam sit amet, dignissim nulla.
                Phasellus iaculis placerat est, ac aliquet metus ultricies et.
            </p>
        </div>
    </div>
    </div>



    <!-- Gallary images-->
    <div class="gallary " style="margin-top:500vh;">
        <div class="title">
            <h2>RELATED</h2>
            <h1>ARTICLES</h1>
        </div>
        <header class="head-gallary">
            <span id="span-gallary-one" class="span-gallary">&#139;</span>
            <span id="span-gallary-two" class="span-gallary">&#155;</span>
        </header>
        <section>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g1.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g2.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g3.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g4.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g5.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g6.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g7.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g8.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g9.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g4.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g2.jpg') }}" alt="">
            </div>
            <div class="product-gallary">
                <img src="{{ asset('assets/img/single g6.jpg') }}" alt="">
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