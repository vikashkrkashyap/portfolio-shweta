<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shweta Akki | Amazon development center, bangalore, dharwad">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

    @section('page-title')
    <title>Shweta Akki</title>
    @show

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/bootstrap-3.3.6.min.css') }}">
    <link href="{{ url("css/home.css") }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('js/dimsemenov-popup/dist/magnific-popup.css') }}">
    <link rel="shortcut icon" href="{{ url('image/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('image/favicon.ico') }}" type="image/x-icon">
    <style></style>
</head>
<body id="app-layout" data-spy="scroll" data-target="#course-track-nav" data-offset="200">
<nav class="navbar navbar-default navbar-home header navbar-transparent topnav mobile"
     role="navigation">
    <div class="container topnav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="/"> <img src="{{ url('image/logo_main.png') }}" class="logo img-responsive" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a class=" nav-link" href="">Home</a></li>
                <li class=""><a class="page-scroll nav-link" href="#about">About</a></li>
                <li class=""><a class="page-scroll nav-link" href="#gallery"> Gallery </a></li>
                <li class=""><a class="page-scroll nav-link" href="#contact"> Contact </a></li>
                <li class=""><a class="page-scroll nav-link" href="#review"> Review </a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')

<!-- JavaScripts -->
<script src="{{ url('js/jquery-2.2.3.js') }}"></script>
<script src="{{ url('js/bootstrap-3.3.6.min.js') }}"></script>
<script src="{{ url('js/dimsemenov-popup/dist/jquery.magnific-popup.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $("a.page-scroll").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                });
            } // End if
        });

        $('.nav a').on('click', function(){
            $('.navbar-collapse').removeClass('in');
        });
    });
</script>
@yield('script')
</body>
</html>