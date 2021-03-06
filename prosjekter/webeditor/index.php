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
    <title>The best IDE.</title>
    <link rel="icon" href="images/icon.png">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.0/script/monochrome/bundle.js"></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/pace-theme-minimal.tmpl.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

    <!-- Loading - Pace -->
    <div class="pace">
        <div class="pace-progress"></div>
    </div>

    <!-- Noise -->
    <div class="noise z-noise">
        <div class="gif-noise"></div>
    </div>

    <!-- Main Page -->
    <main id="main">

        <nav id="navbar" class="flexbox">
            <div id="nav-button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav-items-wrapper flexbox-right">
                <!--<ul class="nav-items flexbox">
                    <li class="nav-item"><a class="nav-item-inner">PhpStorm</a></li>
                    <li class="nav-item"><a class="nav-item-inner">Atom</a></li>
                    <li class="nav-item"><a class="nav-item-inner">Brackets</a></li>
                </ul>-->
            </div>
        </nav>

        <!-- header -->
        <header id="header" class="flexbox">
            <div class="header-content flexbox">
                <h1 class="header-title">The <span>b</span><span>e</span><span>s</span><span>t</span> IDE.</h1>
            </div>
            <div class="header-overlay"></div>
            <img class="header-img" src="https://images.unsplash.com/photo-1468436139062-f60a71c5c892?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
        </header>

        <!-- Page -->
        <div id="page" class="flexbox">

            <div class="page-inner">
                <div id="phpstorm">
                    <div class="image-wrapper">
                        <div class="title-wrapper flexbox">
                            <div class="image-logo-wrapper">
                                <img class="image-logo" src="images/phpstorm/phpstorm-logo.png" alt="">
                            </div>
                            <h1 class="title">Php Storm</h1>
                        </div>
                        <div class="image-overlay"></div>
                        <img class="image" src="images/phpstorm/img.png" alt="">
                    </div>
                    <div class="info">
                        <h3>PhpStorm <span>$199</span></h3>
                        <p>PhpStorm er en premium web-editor</p>
                        <div class="content">
                            <p>Dette er min favoritt web-editor. Det er flere grunner til dette,
                                men her er hovedgrunnene til at jeg velger denne editoren over de andre jeg har listet nedenfor.</p>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
                <div id="atom">
                    <div class="image-wrapper">
                        <div class="title-wrapper flexbox">
                            <div class="image-logo-wrapper">
                                <img class="image-logo" src="images/atom/atom-logo-w.png" alt="">
                            </div>
                            <h1 class="title">Atom</h1>
                        </div>
                        <div class="image-overlay"></div>
                        <img class="image" src="images/atom/img.png" alt="">
                    </div>
                    <div class="info">
                        <h3>Atom <span>Gratis</span></h3>
                        <p>PhpStorm er en gratis web-editor</p>
                        <div class="content">
                            <p>Denne web-editoren pleide å favoritten. Det var nok vel og merke fordi jeg ikke hadde mye kunnskap innenfor koding.</p>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
                <div id="brackets">
                    <div class="image-wrapper">
                        <div class="title-wrapper flexbox">
                            <div class="image-logo-wrapper">
                                <img class="image-logo" src="images/brackets/brackets-logo.png" alt="">
                            </div>
                            <h1 class="title">Brackets</h1>
                        </div>
                        <div class="image-overlay"></div>
                        <img class="image" src="images/brackets/img.png" alt="">
                    </div>
                    <div class="info">
                        <h3>Brackets <span>Gratis</span></h3>
                        <p>PhpStorm er en gratis web-editor</p>
                        <div class="content">
                            <p>Brackets er en flott editor med mange gode funksjoner.</p>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer id="footer">

        </footer>

    </main>

</body>
<script>
    paceOptions = {
        elements: true
    };
</script>
<script src="javascript/pace.js"></script>
<script src="javascript/script.js"></script>
</html>