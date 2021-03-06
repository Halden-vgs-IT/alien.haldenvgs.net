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
    <title>FastProd. - Design</title>
    <link rel="icon" href="images/icon.png">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
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

    <!-- Loading Page -->
    <!--<div class="loading-page flexbox">
        <svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 623.6 620.41" width="623.5999755859375" height="620.4099731445312"><defs><style>.cls-3{fill:none;stroke-miterlimit:10;stroke-width:25px;stroke:url(#linear-gradient2);}</style><linearGradient id="linear-gradient2" x1="708.78" y1="1019.69" x2="1332.38" y2="1019.69" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ea3f2a"></stop><stop offset="1" stop-color="#fcd21d"></stop></linearGradient></defs><path class="cls-3 svg-elem-1" d="M733.7,1273.91S790.22,1013,881.52,889.13c-29.38-3.84-40.15-3.32-73.91-6.52,98-57.44,282.61-145.65,458.69-156.52-80.43,36.95-239.13,93.48-343.47,243.48,114.15-18.07,123.52-18.33,234.78-26.09C1106.2,970.28,918.48,1017.39,733.7,1273.91Z" transform="translate(-708.78 -709.48)"></path></svg>
    </div>-->

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
            <li class="menu-list-item"><a class="menu-list-item-inner mii-4"><i class="uil uil-pen"></i><span> Design</span></a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header" class="flexbox-col">
        <div class="header-title flexbox-col">
            <h1>Vårt</h1>
            <h3>Design</h3>
        </div>
        <div id="darker" class="header-overlay"></div>
        <img data-rellax-speed="-7" class="header-img rellax" src="https://images.unsplash.com/photo-1534670007418-fbb7f6cf32c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2134&q=80" alt="">
    </header>

    <!-- Main -->
    <main class="flexbox">

        <div class="design">

            <div class="divider">
                <div></div>
            </div>

            <div class="colors">
                <h3 class="design-title whitespace">Palette</h3>
                <div class="palettes">
                    <div class="palette-wrapper flexbox-col-left">
                        <h3 class="design-title-small">Primær</h3>
                        <div class="pal-top flexbox">
                            <div class="palette-large primary"></div>
                        </div>
                        <div class="pal-bottom flexbox">
                            <div class="palette primary"></div>
                            <div class="palette primary"></div>
                            <div class="palette primary"></div>
                            <div class="palette primary"></div>
                        </div>
                    </div>
                    <div class="palette-wrapper flexbox-col-left">
                        <h3 class="design-title-small">Sekundær</h3>
                        <div class="pal-top flexbox">
                            <div class="palette-large brown"></div>
                        </div>
                        <div class="pal-bottom flexbox">
                            <div class="palette brown"></div>
                            <div class="palette brown"></div>
                            <div class="palette brown"></div>
                            <div class="palette brown"></div>
                        </div>
                    </div>
                    <div class="palette-wrapper flexbox-col-left">
                        <h3 class="design-title-small">Aksentfarge #1</h3>
                        <div class="pal-top flexbox">
                            <div class="palette-large red"></div>
                        </div>
                        <div class="pal-bottom flexbox">
                            <div class="palette red"></div>
                            <div class="palette red"></div>
                            <div class="palette red"></div>
                            <div class="palette red"></div>
                        </div>
                    </div>
                    <div class="palette-wrapper flexbox-col-left">
                        <h3 class="design-title-small">Aksentfarge #2</h3>
                        <div class="pal-top flexbox">
                            <div class="palette-large green"></div>
                        </div>
                        <div class="pal-bottom flexbox">
                            <div class="palette green"></div>
                            <div class="palette green"></div>
                            <div class="palette green"></div>
                            <div class="palette green"></div>
                        </div>
                    </div>
                    <div class="palette-wrapper flexbox-col-left">
                        <h3 class="design-title-small">Aksentfarge #3</h3>
                        <div class="pal-top flexbox">
                            <div class="palette-large blue"></div>
                        </div>
                        <div class="pal-bottom flexbox">
                            <div class="palette blue"></div>
                            <div class="palette blue"></div>
                            <div class="palette blue"></div>
                            <div class="palette blue"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider">
                <div></div>
            </div>

            <div class="typography">
                <h3 class="design-title whitespace">Typografi</h3>
                <div class="font-show">
                    <div id="fsi1" class="font-show-inner flexbox-col-left">
                        <h3>Aa</h3>
                        <p>Poppins extra bold</p>
                    </div>
                    <div id="fsi2" class="font-show-inner flexbox-col-left">
                        <h3>Aa</h3>
                        <p>Poppins bold</p>
                    </div>
                    <div id="fsi3" class="font-show-inner flexbox-col-left">
                        <h3>Aa</h3>
                        <p>Poppins medium</p>
                    </div>
                    <div id="fsi4" class="font-show-inner flexbox-col-left">
                        <h3>Aa</h3>
                        <p>Poppins light</p>
                    </div>
                    <div id="fsi5" class="font-show-inner flexbox-col-left">
                        <h3>Aa</h3>
                        <p>Poppins thin</p>
                    </div>
                </div>
                <div class="font-info">
                    <div class="font-info-left">
                        <h3 class="design-title">Overskrifter</h3>
                        <div class="headlines flexbox-col-left">
                            <h1>Headline 1</h1>
                            <h2>Headline 2</h2>
                            <h3>Headline 3</h3>
                            <h4>Headline 4</h4>
                            <h5>Headline 5</h5>
                            <h6>Headline 6</h6>
                        </div>
                    </div>
                    <div class="font-info-right">
                        <h3 class="design-title">Vanlig tekst</h3>
                        <div class="bodytext">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider">
                <div></div>
            </div>

            <div class="buttons-inputs">
                <h3 class="design-title whitespace">Buttons & Forms</h3>
                <div class="buttons">
                    <div class="button-wrapper">
                        <button id="btn1" type="submit" class="button btn-primary"><i class="uil uil-heart-break"></i> Liten Knapp<div class="btn-secondary"></div></button>
                    </div>
                    <div id="btn2-wrapper" class="button-wrapper">
                        <button id="btn2" type="submit" class="button btn-primary"><i class="uil uil-favorite"></i> Stor Knapp<div class="btn-secondary"></div></button>
                    </div>
                    <div class="button-wrapper">
                        <button id="btn3" type="submit" class="button btn-primary"><i class="uil uil-fire"></i> Liten Knapp<div class="btn-secondary"></div></button>
                    </div>
                </div>
                <div class="inputs flexbox-col">
                    <div class="form">
                        <div class="form-input-grid">
                            <div>
                                <div class="form-input-wrapper flexbox-left">
                                    <i class="uil uil-thumbs-up"></i>
                                    <input class="form-input" type="text" placeholder="Kort input" aria-label="" required>
                                </div>
                            </div>
                            <div>
                                <div class="form-input-wrapper flexbox-left">
                                    <i class="uil uil-thumbs-down"></i>
                                    <input class="form-input" type="text" placeholder="Kort input" aria-label="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-input-max">
                            <div class="form-input-wrapper flexbox-left">
                                <i class="uil uil-feedback"></i>
                                <input class="form-input" type="text" placeholder="Lang input" aria-label="" required>
                            </div>
                        </div>
                        <div class="form-input-max">
                            <div id="textarea" class="form-input-wrapper flexbox-left-start">
                                <i class="uil uil-comment-lines"></i>
                                <textarea class="form-input" placeholder="Tekstboks" maxlength="500" aria-label="" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

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
</script>
<script src="javascript/pace.js"></script>
<script src="javascript/script.js"></script>
</html>