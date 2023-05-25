<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/recover-account.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-website1.jpg') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>


    <div id="preloader"></div>

    <div class="recover">
        <div class="recover-content">
            <div class="recover-title">
                <h1>Recover account</h1>
                <p>Enter your email address</p>
            </div>
            <div class="recover-inputs">
                <input type="email" placeholder="Email address">
                <button>RECOVER</button>
                <span>Already have account ? <a href="sign-in.html">Sign In</a></span>
            </div>
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