<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/coming-soon.css') }}">
  <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
  <title>{{ config('app.name') }}</title>
</head>

<body>


  <div id="preloader"></div>

  <div class="coming">
    <div class="coming-content">
      <div class="container">
        <div class="container-content">
          <h1 id="headline">Countdown to my birthday</h1>
          <div id="countdown">
            <ul>
              <li><span id="days"></span>days</li>
              <li><span id="hours"></span>Hours</li>
              <li><span id="minutes"></span>Minutes</li>
              <li><span id="seconds"></span>Seconds</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    let loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
      loader.style.display = "none";
    })
  </script>
  <script src="{{ asset('assets/js/coming-soon.js') }}"></script>
</body>

</html>