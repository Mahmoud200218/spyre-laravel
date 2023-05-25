<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sign-up.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>


    <div id="preloader"></div>

    <div class="sign-up">
        <div class="spyre-header-content">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo-01.svg') }}" alt=""></a>
        </div>
        <div class="sign-up-left">
            <img src="https://www.antenore.it/wp-content/uploads/2020/10/bollette-risparmio-mercato-libero-720x1080.jpg" alt="">
        </div>

        <div class="sign-up-right">
            <div class="sign-up-right-title">
                <h1> Please sign up</h1>
                <p>Fill out the form to get started</p>
            </div>

            <div class="sign-up-right-inputs">
                <input id="x" type="email" placeholder="Email adress">
                <input type="password" placeholder="Password">
                <input type="password" placeholder="Confirm Password">
                <button>SIGN UP</button>
                <h3> Already have account? <a href="sign-in.html"> Sign IN </a> </h3>

            </div>

        </div>
        <div class="buttons-social">
            <button id="btn1"><i class="fa-brands fa-facebook-f"></i> FACEBOOK</button>
            <button id="btn2"><i class="fa-brands fa-twitter"></i> TWITTER</button>
        </div>
    </div>
    <script>
        let loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>
</body>

</html>