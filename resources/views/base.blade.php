<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>IPT102 Prelim Project</title>
</head>
<style>

nav a {
    text-decoration: none;
    letter-spacing: 2px;
    font-size: 15px;
    margin: 0 10px;
    color: #fff;
}

.banner-area {
    width: 100%;
    height: 500px;
    position: fixed;
    top: 65px;
    background-image: url("/images/jumbotron2.png");
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
}

.banner-area h1 {
    padding-top: 12%;
    font-size: 50px;
    font-family: poppins;
    text-transform: uppercase;
    color: #C1FFD7;
}

body {
    text-align: center;
}

.wrapper {
    width: 1170px;
    margin: 0 auto;
}

.content-area {
    width: 100%;
    position: relative;
    top: 450px;
    background: #ebebeb;
    height: 1500px;
}

.content-area h2 {
    font-family: poppins;
    letter-spacing: 3px;
    padding-top: 30px;
    font-size: 40px;
    margin: 0;
}

.content-area p {
    padding: 2% 0px;
    font-family: poppins;
    line-height: 25px;
}

.bg {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: -510px;
}

.dash {
    background-color: black;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.box {
    position: relative;
    padding-bottom: 8px;
    cursor: pointer;
}

.box::after {
    position: absolute;
    bottom: 0;
    left: 0;
    content: "";
    width: 0%;
    height: 3px;
    background-color: red;
    transition: width 0.4s ease-out;
}

.box:hover.box::after {
    width: 100%;
}
.dropdown {
    color:white; 
    top: 5px;
}
.dropdown-menu {
    padding:3px 2px;
    background: transparent;
    width: auto;
}
.dropdown-item.box {
    background: transparent;
    text-decoration: none;
    width: auto;
}

/**.box{
    text-decoration:none;
    color:#fff;
    background:transparent;
    padding:8px 25px;
    border-radius:15px;
    transition:all 0.3s ease-in-out;
    margin:0 5px;
}
.box:hover{
    border:0;
    box-shadow:0 0 3px #C2F784, 0 0 7px #C2F784, 0 0 20px #edd205;
}

.dropdown {
    position: relative;
    padding-bottom: 8px;
    cursor: pointer;
    top: 5px;
    text-decoration: none;
    color: #fff;
    background: transparent;
    padding: 2px 1px;
    border-radius: 15px;
    transition: all 0.3s ease-in-out;
    margin: 0 5px;
}

.dropdown::after {
    position: absolute;
    bottom: 0;
    left: 0;
    content: "";
    width: 0%;
    height: 3px;
    background-color: red;
    transition: width 0.4s ease-out;
}

.dropdown:hover.dropdown::after {
    width: 100%;
    background: transparent;
    text-decoration: none;
}

.dropdown-menu {
    background: transparent;
    width: 100%;
}

.dropdown-item {
    position: relative;
    padding-bottom: 8px;
    cursor: pointer;
    top: 5px;
    text-decoration: none;
    color: #fff;
    background: transparent;
    padding: 2px 1px;
    border-radius: 15px;
    transition: all 0.3s ease-in-out;
    margin: 0 5px;
}

.dropdown-item::after {
    position: absolute;
    bottom: 0;
    left: 0;
    content: "";
    width: 0%;
    height: 3px;
    background-color: red;
    transition: width 0.4s ease-out;
}

.dropdown-item:hover.dropdown-item::after {
    background: transparent;
    text-decoration: none;
    width: 100%;
}**/

</style>

<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
    } else {
        nav.classList.remove('bg-dark', 'shadow');
    }
    });
</script>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<body>
    @if(session('Error'))
        <div class="alert alert-danger fixed-bottom d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div class="container">
                {{ session('Error') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('Message'))
        <div class="alert alert-success fixed-bottom d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div class="container">
                {{ session('Message') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('errors'))
        <div class="alert alert-warning fixed-bottom d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div class="container">
                Please input the following fields:
                <ul>
                    @foreach(session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-2">
        <div class="container">
            <a class="navbar-brand" style="color:yellow; font-size:22px;">IPT102 Prelim Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link box text-white" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link box text-white" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link box text-white" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link box text-white" href="/logout">Logout</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item nav-link box" href="/login">Login</a></li>
                                    <li><a class="dropdown-item nav-link box" href="/register">Register</a></li>
                                </ul>
                            </li>
                            
                        @endif
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    <div class="dash">
        <div class="">
            @yield('contentdash')
        </div>
    </div>

    <div class="bg">
        <div class="container">
            @yield('content')
        </div>
    </div>
    
</body>
</html>