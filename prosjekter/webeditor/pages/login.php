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
    <title>Areal Alien</title>
    <link rel="icon" href="../images/icon.png">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.1.3/pixi.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.0/script/monochrome/bundle.js"></script>
    <!-- ====== -->
    <!-- DINPro -->
    <link href="../fonts/DINPro.otf">
    <link href="../fonts/DINPro-Black%20tr.ttf">
    <link href="../fonts/DINPro-Black.otf">
    <link href="../fonts/DINPro-BlackItalic.otf">
    <link href="../fonts/DINPro-Bold%20tr.ttf">
    <link href="../fonts/DINPro-Bold.otf">
    <link href="../fonts/DINPro-BoldItalic.otf">
    <link href="../fonts/DINPro-Medium%20tr.ttf">
    <link href="../fonts/DINPro-Medium.otf">
    <link href="../fonts/DINPro-MediumItalic.otf">
    <link href="../fonts/DINPro-Italic.otf">
    <link href="../fonts/DINPro-Light%20tr.ttf">
    <link href="../fonts/DINPro-Light.otf">
    <link href="../fonts/DINPro-LightItalic.otf">
    <!-- =========== -->
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <link type="text/css" rel="stylesheet" href="../css/buttons.css">
    <link rel="stylesheet" href="../css/pace-theme-minimal.tmpl.css">
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

    <!-- Smooth Scroll Wrapper -->
    <div class="smooth-scroll-wrapper index">

        <!-- # Content Inside Scroll Wrapper -->
        <div class="content flexbox-col">

            <!-- # Skewed Section -->
            <section class="skewed-section ind-sec flexbox-col">

                <div class="login-wrapper flexbox">
                    <div id="form">
                        <div class="form-left">
                            <form class="form flexbox" method="post" action="../backend/ProfileSystem/login.php" autocomplete="off">
                                <div class="form-inner">
                                    <div class="form-title">Welcome back</div>
                                    <div class="fii-wrapper">
                                        <?php
                                        if(isset($_GET["NF"])){
                                            echo "<p class='login-error'>Wrong username or password.</p>";
                                        }
                                        ?>
                                        <div class="form-input-wrapper">
                                            <input class="form-input" id="name" type="text" name="navn" value="" placeholder="Username" autocomplete="off" aria-label="" required>
                                        </div>
                                        <div class="form-input-wrapper">
                                            <input class="form-input" type="password" id="password" name="passord" value="" placeholder="Password" aria-label="" required>
                                        </div>
                                        <div class="btn-wrapper">
                                            <button type="submit" value="submit" class="button3 btn-primary3"><i class="uil uil-lock"></i> Login<div class="btn-secondary3"></div></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-right">
                            <div class="right-top">
                                <h1>Want access to this site?</h1>
                                <p>Contact the admin to get your username and password set up</p>
                            </div>
                            <div class="right-bottom">
                                <div class="btn-wrapper2">
                                    <a href=""><button type="submit" value="submit" class="button4 btn-primary4"><i class="uil uil-chat"></i> Contact<div class="btn-secondary4"></div></button></a>
                                </div>
                            </div>
                            <div class="fbb-right-overlay"></div>
                        </div>
                        <div class="form-glow"></div>
                    </div>

                </div>

            </section>

        </div>

    </div>

</main>
</body>
<script>
    paceOptions = {
        elements: true
    };
</script>
<script src="../javascript/pace.js"></script>
<script src="../javascript/script.js"></script>
<script src="../javascript/project.js"></script>
</html>