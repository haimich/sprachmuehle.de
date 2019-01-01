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
            $content = "pages/home.php";
            break;
        }
        case PAGE_INTERPRETING: {
            $title = t("interpreting.title");
            $description = t("interpreting.description");
            $content = "pages/interpreting.php";
            break;
        }
        case PAGE_TRANSLATING: {
            $title = t("translating.title");
            $description = t("translating.description");
            $content = "pages/translating.php";
            break;
        }
        case PAGE_PROFILE: {
            $title = t("profile.title");
            $description = t("profile.description");
            $content = "pages/profile.php";
            break;
        }
        case PAGE_CONTACT: {
            $title = t("contact.title");
            $description = t("contact.description");
            $content = "pages/contact.php";
            break;
        }
        case PAGE_IMPRINT: {
            $title = t("imprint.title");
            $description = t("imprint.description");
            $content = "pages/imprint.php";
            break;
        }
        case PAGE_DATA_PRIVACY: {
            $title = t("privacy.title");
            $description = t("privacy.description");
            $content = "pages/privacy.php";
            break;
        }
        case PAGE_AGB: {
            $title = t("agb.title");
            $description = t("agb.description");
            $content = "pages/agb.php";
            break;
        }
        case PAGE_404: {
            $title = t("404.title");
            $description = t("404.description");
            $content = "pages/404.php";
            break;
        }

        default: {
            $title = t("home.title");
            $description = t("home.description");
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

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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
        <header class="row">
            <!-- Logo -->
            <div class="col-sm-2">
                <a href="/" title="<?=t("logo.title")?>">
                    <img class="logo" src="/static/images/logos/sprachmuehle.png" alt='<?=t("logo.alt")?>' />
                </a>
            </div>
            
            <!-- Menü -->
            <div class="col-sm menu-container">
                <ul class="menu">
                    <li>
                        <? if ($GLOBALS["page"] === PAGE_HOME): ?>
                            <a href="/" class="menu-active"><?=t("menu.home")?></a>
                        <? else: ?>
                            <a href="/"><?=t("menu.home")?></a>
                        <? endif; ?>
                    </li>

                    <li>
                        <? if ($GLOBALS["page"] === PAGE_INTERPRETING): ?>
                            <a href="/dolmetschen" class="menu-active"><?=t("menu.interpreting")?></a>
                        <? else: ?>
                            <a href="/dolmetschen"><?=t("menu.interpreting")?></a>
                        <? endif; ?>
                    </li>
                    
                    <li>
                        <? if ($GLOBALS["page"] === PAGE_TRANSLATING): ?>
                            <a href="/uebersetzen" class="menu-active"><?=t("menu.translating")?></a>
                        <? else: ?>
                            <a href="/uebersetzen"><?=t("menu.translating")?></a>
                        <? endif; ?>
                    </li>

                    <li>
                        <? if ($GLOBALS["page"] === PAGE_PROFILE): ?>
                            <a href="/profil" class="menu-active"><?=t("menu.profile")?></a>
                        <? else: ?>
                            <a href="/profil"><?=t("menu.profile")?></a>
                        <? endif; ?>
                    </li>

                    <li>
                        <? if ($GLOBALS["page"] === PAGE_CONTACT): ?>
                            <a href="/kontakt" class="menu-active"><?=t("menu.contact")?></a>
                        <? else: ?>
                            <a href="/kontakt"><?=t("menu.contact")?></a>
                        <? endif; ?>
                    </li>
                </ul>
        
                <!-- Telefonnummer-->
                <a href="tel:‭+4915202312427‬" class="header-phone-link" title="<?=t('tel.title')?>">
                    <div class="header-phone">
                        <i class="header-phone-icon fas fa-phone fa-flip-horizontal"></i>
                        01520 231 24 27‬
                    </div>
                </a>
            </div>
        </header>

        <!-- MAIN -->
        <div class="row main">
            <div class="col-lg-10 offset-lg-1" style="background-color: white">
            
                <?php include $content; ?>

            </div>
        </div>

        <!-- FOOTER -->
        <div class="row footer">
            <div class="col-lg-10 offset-lg-1" style="background-color: white;">
                <div class="row justify-content-center">
                    <!-- Top border -->
                    <div class="col-lg-11" style="border-top: 1px solid #dadada;"></div>
                </div>

                <div class="row align-self-center" style="margin-top: 50px;">
                    <!-- Copyright -->
                    <div class="col-lg-2 offset-lg-1" style="padding-left: 0">
                        <span style="font-size: 18px">&copy;</span>
                        <span>
                            <script>document.write((new Date()).getFullYear());</script> Cristina Müller
                        </span>
                    </div>

                    <!-- Links -->
                    <div class="col-lg-4 offset-lg-1" style="display: flex; justify-content: center; letter-spacing: .9px;">
                        <a href="/impressum" style="color: #000000"><?=t('footer.imprint')?></a>
                        <span style="padding: 0 4px;"> - </span>

                        <a href="/agb" style="color: #000000"><?=t('footer.agb')?></a>
                        <span style="padding: 0 4px;"> - </span>

                        <a href="/datenschutz" style="color: #000000"><?=t('footer.privacy')?></a>
                    </div>

                    <!-- Mitgliedschaften -->
                    <div class="col-lg" style="display: flex; justify-content: flex-end;">
                        <a href="http://mitglieder.bdue.de/CristinaMueller" target="_blank">
                            <img src="/static/images/logos/vkd_small.svg" title="<?=t('footer.logo.title')?>" style="height: 30px;" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end main-container -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="/static/js/main.js"></script>
    
</body>
</html>