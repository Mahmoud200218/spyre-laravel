<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
  <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
  <title>{{ config('app.name') }}</title>
</head>

<body>


  <button id="btn-scroll"><i class="	fa fa-chevron-circle-up"></i></button>

  <div id="preloader"></div>

  <div class="blog mb">
    <video src="{{ asset('assets/video/pexels-mikhail-nilov-7989448.mp4') }}" width="100%" autoplay loop></video>
    <div class="spyre-header" style="position: absolute; top: 0;">
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

  <!--READ-->
  <div class="read">
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

    <div class="read-right">

      <div class="read-list">
        <h2>CONSCIOUSNESS DECISIONS</h2>
        <p>Sed eu sapien accumsan, rutrum velit et, imperdiet elit.
          Vivamus posuere eleifend enim auctor congue. Vivamus sed lacus ex.
          Phasellus porta metus dui, eget porttitor dolor pharetra in. Fusce consequat convallis tincidunt.
          Nulla sodales non mauris mollis vestibulum consectetur.</p>
        <div class="read-content">
          <div class="read-img">
            <img src="{{ asset('assets/img/blog 1.jpg') }}" alt="">
            <div class="img-detail">
              <p>Juan Elliott </p>
              <p id="id">Sept 19, 2018</p>
            </div>
          </div>
          <p id="read">READ MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
      </div>

      <div class="read-list">
        <h2>FINANCIAL SECURITY REMOTELY</h2>
        <p>Sed eu sapien accumsan, rutrum velit et, imperdiet elit.
          Vivamus posuere eleifend enim auctor congue. Vivamus sed lacus ex.
          Phasellus porta metus dui, eget porttitor dolor pharetra in. Fusce consequat convallis tincidunt.
          Nulla sodales non mauris mollis vestibulum consectetur.</p>
        <div class="read-content">
          <div class="read-img">
            <img src="{{ asset('assets/img/blog 5.jpg') }}" alt="">
            <div class="img-detail">
              <p>Juan Elliott </p>
              <p id="id">Sept 19, 2018</p>
            </div>
          </div>
          <p id="read">READ MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
        <img src="https://images.pexels.com/photos/3771804/pexels-photo-3771804.jpeg?cs=srgb&dl=pexels-andrea-piacquadio-3771804.jpg&fm=jpg" alt="" width="88%" height="500vh">
      </div>

      <div class="read-list">
        <h2>BEHIND THE SCENES</h2>
        <p>Sed eu sapien accumsan, rutrum velit et, imperdiet elit.
          Vivamus posuere eleifend enim auctor congue. Vivamus sed lacus ex.
          Phasellus porta metus dui, eget porttitor dolor pharetra in. Fusce consequat convallis tincidunt.
          Nulla sodales non mauris mollis vestibulum consectetur.</p>
        <div class="read-content">
          <div class="read-img">
            <img src="{{ asset('assets/img/blog 6.jpg') }}" alt="">
            <div class="img-detail">
              <p>Juan Elliott </p>
              <p id="id">Sept 19, 2018</p>
            </div>
          </div>
          <p id="read">READ MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
      </div>

      <div class="read-list">
        <h2>THE IDEA OF TOMORROW </h2>
        <p>Sed eu sapien accumsan, rutrum velit et, imperdiet elit.
          Vivamus posuere eleifend enim auctor congue. Vivamus sed lacus ex.
          Phasellus porta metus dui, eget porttitor dolor pharetra in. Fusce consequat convallis tincidunt.
          Nulla sodales non mauris mollis vestibulum consectetur.</p>
        <div class="read-content">
          <div class="read-img">
            <img src="{{ asset('assets/img/blog 5.jpg') }}" alt="">
            <div class="img-detail">
              <p>Juan Elliott </p>
              <p id="id">Sept 19, 2018</p>
            </div>
          </div>
          <p id="read">READ MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
        <img src="{{ asset('assets/img/blog 3.jpg') }}" alt="" width="88%" height="500vh">
      </div>

      <div class="read-list">
        <h2>INTELLIGENT SOLUTIONS</h2>
        <p>Sed eu sapien accumsan, rutrum velit et, imperdiet elit.
          Vivamus posuere eleifend enim auctor congue. Vivamus sed lacus ex.
          Phasellus porta metus dui, eget porttitor dolor pharetra in. Fusce consequat convallis tincidunt.
          Nulla sodales non mauris mollis vestibulum consectetur.</p>
        <div class="read-content">
          <div class="read-img">
            <img src="{{ asset('assets/img/blog 4.jpg') }}" alt="">
            <div class="img-detail">
              <p>Juan Elliott </p>
              <p id="id">Sept 19, 2018</p>
            </div>
          </div>
          <p id="read">READ MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
      </div>
      <div class="next">
        <ul class="list">
          <li><button style="width: 100px;">Previous</button></li>
          <li><button class="hov" style="background-color:rgb(100, 100, 100); color:#fff;">1</button></li>
          <li><button class="hov">2</button></li>
          <li><button class="hov">3</button></li>
          <li><button class="hov">4</button></li>
          <li><button class="hov">5</button></li>
          <li><button class="hov" style="width: 70px;">NEXT</button></li>
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