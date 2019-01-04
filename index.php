<?php
    include_once "translations.php";
    include_once "lib/lang.php";
    include_once "lib/t.php";
    include_once "lib/page.php";

    // set page variables
    switch ($GLOBALS["page"]) {
        case PAGE_HOME: {
            $title = t("home.title");
            $description = t("home.description");
            $keywords = t("home.keywords");
            $content = "pages/home.php";
            break;
        }
        case PAGE_INTERPRETING: {
            $title = t("interpreting.title");
            $description = t("interpreting.description");
            $keywords = t("interpreting.keywords");
            $content = "pages/interpreting.php";
            break;
        }
        case PAGE_TRANSLATING: {
            $title = t("translating.title");
            $description = t("translating.description");
            $keywords = t("translating.keywords");
            $content = "pages/translating.php";
            break;
        }
        case PAGE_PROFILE: {
            $title = t("profile.title");
            $description = t("profile.description");
            $keywords = t("profile.keywords");
            $content = "pages/profile.php";
            break;
        }
        case PAGE_CONTACT: {
            $title = t("contact.title");
            $description = t("contact.description");
            $keywords = t("contact.keywords");
            $content = "pages/contact.php";
            break;
        }
        case PAGE_IMPRINT: {
            $title = t("imprint.title");
            $description = t("imprint.description");
            $keywords = t("imprint.keywords");
            $content = "pages/imprint.php";
            break;
        }
        case PAGE_DATA_PRIVACY: {
            $title = t("privacy.title");
            $description = t("privacy.description");
            $keywords = t("privacy.keywords");
            $content = "pages/privacy.php";
            break;
        }
        case PAGE_AGB: {
            $title = t("agb.title");
            $description = t("agb.description");
            $keywords = t("agb.keywords");
            $content = "pages/agb.php";
            break;
        }
        case PAGE_404: {
            $title = t("404.title");
            $description = t("404.description");
            $keywords = t("404.keywords");
            $content = "pages/404.php";
            break;
        }

        default: {
            $title = t("home.title");
            $description = t("home.description");
            $keywords = t("home.keywords");
            $content = "pages/home.php";
        }
    }
?>
<!doctype html>
<html lang='<?=$GLOBALS["lang"]?>'>

<head>
    <!-- Title & Description -->
    <title><?=$title?></title>
    <meta name="description" content='<?=$description?>'>
    <meta name="keywords" content='<?=$keywords?>' />

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <link rel="stylesheet" href="/static/css/main.css">

    <!-- Icons -->
    <link rel="manifest" href="/site.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/static/images/icons//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/images/icons//favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
</head>

<body>
    
    <div class="container-fluid main-container">

        <!-- HEADER -->
        <nav class="menu navbar fixed-top navbar-expand-md navbar-light">
            <!-- Logo -->
            <a lass="navbar-brand" href="/" title="<?=t("logo.title")?>">
                <img class="logo" src="/static/images/logos/sprachmuehle_logo.png" alt='<?=t("logo.alt")?>' />
            </a>

            <!-- Burger Button -->
            <button
                class="navbar-toggler"
                type="button"
                title="<?=t('menu.toggle-title')?>"
                data-toggle="collapse"
                data-target="#navbarContent"
                aria-controls="navbarContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menü -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav text-uppercase">
                    <?php
                        $classes = "nav-item";
                        if ($GLOBALS["page"] === PAGE_HOME) $classes .= " active";

                        echo '<li class="' . $classes . '"><a class="nav-link" href="/">' . t("menu.home") . ' <span class="sr-only">(current)</span></a></li>' . "\n";
                    ?>
                    
                    <?php
                        $classes = "nav-item";
                        if ($GLOBALS["page"] === PAGE_INTERPRETING) $classes .= " active";

                        echo '<li class="' . $classes . '"><a class="nav-link" href="/dolmetschen">' . t("menu.interpreting") . ' <span class="sr-only">(current)</span></a></li>' . "\n";
                    ?>

                    <?php
                        $classes = "nav-item";
                        if ($GLOBALS["page"] === PAGE_TRANSLATING) $classes .= " active";

                        echo '<li class="' . $classes . '"><a class="nav-link" href="/uebersetzen">' . t("menu.translating") . ' <span class="sr-only">(current)</span></a></li>' . "\n";
                    ?>

                    <?php
                        $classes = "nav-item";
                        if ($GLOBALS["page"] === PAGE_PROFILE) $classes .= " active";

                        echo '<li class="' . $classes . '"><a class="nav-link" href="/profil">' . t("menu.profile") . ' <span class="sr-only">(current)</span></a></li>' . "\n";
                    ?>

                    <?php
                        $classes = "nav-item";
                        if ($GLOBALS["page"] === PAGE_CONTACT) $classes .= " active";

                        echo '<li class="' . $classes . '"><a class="nav-link" href="/kontakt">' . t("menu.contact") . ' <span class="sr-only">(current)</span></a></li>' . "\n";
                    ?>

                    <!-- Telefonnummer-->
                    <a href="tel:‭+4915202312427‬" class="header-phone-link" style="margin-left: 25px;" title="<?=t('tel.title')?>">
                        <div class="header-phone">
                            <img src="/static/images/icons/phone.svg" class="header-phone-icon" alt="<?=t('phone.alt')?>" />01520 231 24 27‬
                        </div>
                    </a>
                </ul>
            </div>
        </nav>

        <!-- LOGO for PRINT -->
        <div class="row d-none d-print-block">
            <div class="col-2">
                <a href="/" title="<?=t("logo.title")?>">
                    <img class="logo" src="/static/images/logos/sprachmuehle_logo.png" alt='<?=t("logo.alt")?>' />
                </a>
            </div>
        </div>

        <!-- MAIN -->
        <div class="row main">
            <div class="col-12 col-xl-10 offset-xl-1" style="background-color: white">
            
                <?php include $content; ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Line divider -->
            <div class="col-lg-11" style="border-bottom: 1px solid #dadada;"></div>
        </div>
        
        <!-- FOOTER -->
        <footer class="row footer align-items-center">
            <!-- Copyright -->
            <div class="footer-copyright col-12 col-sm-6 col-md-3 order-12 order-sm-1">
                <span style="font-size: 18px;">&copy;</span>
                <span>
                    <script>document.write((new Date()).getFullYear());</script> Cristina Müller
                </span>
            </div>

            <!-- Links -->
            <div class="footer-links col-12 col-sm-6 col-md-6 d-print-none order-1">
                <a href="/impressum"><?=t('footer.imprint')?></a>
                
                <span class="footer-link-separator"> - </span>

                <a href="/agb"><?=t('footer.agb')?></a>

                <span class="footer-link-separator"> - </span>

                <a href="/datenschutz"><?=t('footer.privacy')?></a>
            </div>

            <!-- Mitgliedschaften -->
            <div class="footer-memberships col-3 d-print-none d-none d-sm-none d-md-flex order-md-12">
                <a href="http://mitglieder.bdue.de/CristinaMueller" target="_blank">
                    <img src="/static/images/logos/bdue_vkd_logo.svg" alt="<?=t('footer.logo.title')?>" style="height: 30px;" />
                </a>
            </div>
        </footer>

    </div> <!-- end main-container -->

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>

    <script src="/static/js/main.js"></script>
    
    <!-- COOKIE CONSENT -->
    <script>
        window.addEventListener("load", function() {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#1d8a8a",
                    },
                    "button": {
                        "background": "#194d60",
                    }
                },
                "theme": "classic",
                "content": {
                    "message": "<?=t('cookies.text')?>",
                    "dismiss": "<?=t('cookies.accept')?>",
                    "link": "<?=t('cookies.moreInfo')?>",
                    "href": "/datenschutz"
                },
            });
        });
    </script>
    
</body>
</html>