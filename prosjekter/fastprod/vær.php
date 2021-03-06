<!DOCTYPE html>
<html lang="no">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======= -->
    <!-- General -->
    <title>FastProd. - Vær</title>
    <link rel="icon" href="images/icon.png">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
    <script src="javascript/rellax.min.js"></script>
    <script src="javascript/rellax.js"></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/pace-theme-minimal.tmpl.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

    <!-- Loading - Pace -->
    <div class="pace">
        <div class="pace-progress"></div>
    </div>

    <!-- Navbar -->
    <nav id="navbar" class="flexbox">
        <div class="navbar-inner">
            <div class="navbar-left flexbox">
                <a href="index.php"><?php include "structure/logo.php" ?></a>
            </div>
            <div class="navbar-right flexbox-right">
                <ul class="navbar-items flexbox-right">
                    <li class="navbar-item flexbox"><a class="navbar-item-inner" href="index.php"><i class="uil uil-estate"></i><span> Hjem</span></a></li>
                    <li class="navbar-item flexbox"><a class="navbar-item-inner" href="eventer.php"><i class="uil uil-calender"></i><span> Eventer</span></a></li>
                    <li class="navbar-item nb-item-last flexbox"><a class="navbar-item-inner" href="kontakt.php"><i class="uil uil-envelope-heart"></i><span> Kontakt oss</span></a></li>
                    <li class="navbar-item nb-item-button flexbox">
                        <a class="navbar-item-inner" href="design.php">
                            <button id="button" type="button" class="button btn-primary">
                                <i class="uil uil-pen"></i> Design
                                <div id="note" class="link-note flexbox">
                                    <p>Se designvalg</p>
                                </div>
                                <div class="btn-secondary"></div>
                            </button>
                        </a>
                    </li>
                </ul>
                <div id="nav-button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu -->
    <div id="menu">
        <ul class="menu-list">
            <li class="menu-list-item"><a class="menu-list-item-inner mii-1" href="index.php"><i class="uil uil-estate"></i><span> Hjem</span></a></li>
            <li class="menu-list-item"><a class="menu-list-item-inner mii-2" href="eventer.php"><i class="uil uil-calender"></i><span> Eventer</span></a></li>
            <li class="menu-list-item"><a class="menu-list-item-inner mii-3" href="kontakt.php"><i class="uil uil-envelope-heart"></i><span> Kontakt oss</span></a></li>
            <li class="menu-list-item"><a class="menu-list-item-inner mii-4" href="design.php"><i class="uil uil-pen"></i><span> Design</span></a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header" class="flexbox-col">
        <div class="header-title flexbox-col">
            <h1>Hvordan</h1>
            <h3>er været?</h3>
        </div>
        <div id="darker" class="header-overlay"></div>
        <img data-rellax-speed="-7" class="header-img rellax" src="https://images.unsplash.com/photo-1500835176302-48dbd01f6437?ixlib=rb-1.2.1&auto=format&fit=crop&w=1978&q=80" alt="">
    </header>

    <!-- Main -->
    <main class="flexbox-col">

        <script>
            paceOptions = {
                elements: true
            };

            // Accepts any class name
            var rellax = new Rellax('.rellax');

            //  map
            var map = L.map('map').setView([59.119549, 11.387536], 13.3);
            L.tileLayer('https://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=topo4&zoom={z}&x={x}&y={y}', {
                attribution: '<a href="http://www.kartverket.no/">Kartverket</a>'
            }).addTo(map);
            var marker = L.marker([59.119549, 11.387536]).addTo(map);
            marker.bindPopup("<b>Torget</b><br>Halden").openPopup();
        </script>
        <script src="javascript/pace.js"></script>
        <script src="javascript/script.js"></script>

        <?php include "yr.php"; ?>

        <div class="space"></div>

    </main>

    <!-- Footer -->
    <footer id="footer" class="flexbox">
        <h1 class="footer-bef-text">Connect</h1>
        <div class="footer-inner">
            <div class="footer-left">
                <?php include "structure/logo.php" ?>
            </div>
            <div class="footer-right">
                <div class="col">
                    <h3>Info</h3>
                    <ul class="links">
                        <li class="link"><a class="link-inner" href="https://www.unsplash.com" target="_blank">Images - unsplash</a></li>
                        <li class="link"><a class="link-inner">Eventer</a></li>
                        <li class="link"><a class="link-inner">Om oss</a></li>
                        <li class="link"><a class="link-inner">Info</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Legal</h3>
                    <ul class="links">
                        <li class="link"><a class="link-inner">Terms & Conditions</a></li>
                        <li class="link"><a class="link-inner">Privacy Policy</a></li>
                        <li class="link"><a class="link-inner">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="col flexbox-col-left">
                    <h3>Abonner</h3>
                    <div class="input-field">
                        <input type="email" placeholder="Din epost" aria-label=""/>
                    </div>
                    <div class="button-wrapper">
                        <button type="button" class="button btn-primary"><i class="uil uil-envelope-check"></i> Abonner<div class="btn-secondary"></div></button>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-left flexbox-left">
                <p>FastProd. &copy 2020</p>
            </div>
            <div class="footer-bottom-right flexbox-right">
                <a class="social-link"><i class="uil uil-twitter"></i></a>
                <a class="social-link"><i class="uil uil-facebook-f"></i></a>
                <a class="social-link"><i class="uil uil-dribbble"></i></a>
            </div>
        </div>
    </footer>

</body>
<script>
    paceOptions = {
        elements: true
    };

    // Accepts any class name
    var rellax = new Rellax('.rellax');

    //  map
    var map = L.map('map').setView([59.119549, 11.387536], 13.3);
    L.tileLayer('https://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=topo4&zoom={z}&x={x}&y={y}', {
        attribution: '<a href="http://www.kartverket.no/">Kartverket</a>'
    }).addTo(map);
    var marker = L.marker([59.119549, 11.387536]).addTo(map);
    marker.bindPopup("<b>Torget</b><br>Halden").openPopup();
</script>
<script src="javascript/pace.js"></script>
<script src="javascript/script.js"></script>
</html>