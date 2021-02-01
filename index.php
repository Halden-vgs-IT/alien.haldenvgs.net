<!DOCTYPE html>
<html lang="no">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Alien">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======= -->
    <!-- General -->
    <title>Alien</title>
    <link rel="icon" href="images/favicon.png">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.6/script/monochrome/bundle.js"></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/cursor.css">
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/solid.css">
</head>
<body>

<!-- #Cursor -->
<div class="cursor"></div>
<div id="cursor">
    <div class="cursor-circle"></div>
</div>

<!-- Menu Images -->
<div id="m-img-1" class="menu-image-wrapper">
    <img class="menu-image" src="images/menu-1.gif" alt="">
    <img class="menu-image-back" src="images/menu-1.gif" alt="">
</div>
<div id="m-img-2" class="menu-image-wrapper">
    <img class="menu-image" src="images/menu-2.gif" alt="">
</div>
<div id="m-img-3" class="menu-image-wrapper">
    <img class="menu-image" src="images/menu-3.jpg" alt="">
    <img class="menu-image-back" src="images/menu-3.jpg" alt="">
</div>
<div id="m-img-4" class="menu-image-wrapper">
    <img class="menu-image" src="images/menu-4.jpg" alt="">
    <img class="menu-image-back" src="images/menu-4.jpg" alt="">
</div>

<!-- #Navbar -->
<nav id="navbar" class="flexbox">
    <div class="navbar-inner">
        <div class="navbar-left flexbox">
            <div id="nav-button" cursor-class="arrow">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbar-center"></div>
        <div class="navbar-right"></div>
    </div>
</nav>

<!-- #Menu -->
<div class="menu-wrapper flexbox">

    <!-- Menu Right -->
    <ul class="menu flexbox-col-left-start">
        <li id="m-item-w-1" class="menu-item flexbox">
            <h1 id="m-item-1" class="menu-item-inner" cursor-class="arrow">Hjem</h1>
        </li>
        <li id="m-item-w-2" class="menu-item flexbox">
            <a href="pages/prosjekter.php"><h1 id="m-item-2" class="menu-item-inner" cursor-class="arrow">Prosjekter</h1></a>
        </li>
        <li id="m-item-w-3" class="menu-item flexbox">
            <h1 id="m-item-3" class="menu-item-inner" cursor-class="arrow">Oppgaver</h1>
        </li>
        <li id="m-item-w-4" class="menu-item flexbox">
            <h1 id="m-item-4" class="menu-item-inner" cursor-class="arrow">Ting & Tang</h1>
        </li>
    </ul>

    <div class="menu-background"></div>

</div>

<!-- #Header -->
<header id="header" class="flexbox">

    <!-- Header Inner -->
    <div class="header-wrapper flexbox">
        <h1 class="header-title">Alien ♡</h1>
        <div class="header-overlay"></div>
        <img class="header-image" src="images/menu-1.gif" alt="">
    </div>

    <!-- Header Blur -->
    <img class="header-image-blur" src="images/menu-1.gif" alt="">

</header>

<!-- #Main -->
<main class="flexbox-col">



</main>
</body>
<script src="javascript/script.js"></script>
<script src="javascript/cursor.js"></script>
</html>