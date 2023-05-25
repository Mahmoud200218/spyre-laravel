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
            <a href="index.html"><img src="img/logo-01.svg" alt=""></a>
        </div>
        <div class="sign-up-left">
            <img src="https://morb3.com/wp-content/uploads/2020/02/122-desktop-wallpapers-hd-4k-%D8%B5%D9%88%D8%B1-%D8%AE%D9%84%D9%81%D9%8A%D8%A7%D8%AA-%D9%83%D9%85%D8%A8%D9%8A%D9%88%D8%AA%D8%B1-%D8%B3%D8%B7%D8%AD-%D8%A7%D9%84%D9%85%D9%83%D8%AA%D8%A8-1024x576.jpg" alt="">
        </div>

        <div class="sign-up-right">
            <div class="sign-up-right-title">
                <h1> Please sign up</h1>
                <p>Sign in to manage your account</p>
            </div>

            <div class="sign-up-right-inputs">
                <input id="x" type="email" placeholder="Email adress">
                <input type="password" placeholder="Password">
                <div class="input-between">
                    <input type="checkbox"> <span class="span">Remember Me</span>
                    <a href="recover-account.html">Forgot password?</a>
                </div>
                <button style="background-color: rgb(255, 30, 30);">SIGN IN</button>
                <h3> Do not have account? <a href="sign-up.html"> Sign UP </a> </h3>
            </div>

        </div>
        <div class="buttons-social">
            <button id="btn1"><i class="fa-brands fa-facebook-f"></i> FACEBOOK</button>
            <button id="btn2"><i class="fa-brands fa-twitter"></i> TWITTER </button>
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