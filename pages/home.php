<!-- Willkommensbild -->
<div class="row justify-content-center">
    <div class="hero-image-container">
        <picture>
            <source srcset="/static/images/cristina_mueller_willkommen-xs.jpg" media="(max-width: 745px)">
            <source srcset="/static/images/cristina_mueller_willkommen-sm.jpg" media="(max-width: 900px)">
            <img
                src="/static/images/cristina_mueller_willkommen.jpg"
                class="img-fluid"
                alt="<?=t('home.welcome-alt')?>"
            >
        </picture>

        <div class="welcome-image-text">
            <h1>
                <?=t('home.welcome-header')?>
            </h1>

            <h4>
                <?=t('home.welcome-subtitle')?>
            </h4>
        </div>
    </div>
</div>

<!-- Intro text -->
<div class="row justify-content-center">
    <p class="centered-text-box col-10 col-md-8">
        <?=t('home.intro')?>
    </p>
</div>

<div class="row ">
    <div class="col-12" style="display: flex; justify-content: center;">
        <hr class="purple-line">
    </div>
</div>

<!-- Arbeitssprachen -->
<div class="row justify-content-center arbeitssprachen-box">
    <div class="d-none d-md-block col-md-6">
        <img src="/static/images/cristina_mueller_dolmetschen1.jpg" style="width: 100%" alt="<?=t('home.languages-alt')?>" />
    </div>

    <div class="arbeitssprachen-box-text col-12 col-md-5">
        <p>
            <?=t('home.languages')?>
        </p>
    </div>
</div>

<!-- Leistungen -->
<div class="row services-box">
    <h2 class="col-12">
        <?=t('home.services-header')?>
    </h2>

    <div class="col-12" style="margin-top: 20px; margin-bottom: 24px;">
        <?=t('home.services-text')?>
    </div>

    <div class="col-12">
        <hr class="purple-line">
    </div>

    <div class="col-12 row" style="margin-top: 40px; margin-left: 10px; display: flex; justify-content: space-between">
        <a href="/dolmetschen" class="col-12 col-md-4 call-to-action call-to-action-wide row justify-content-between">
            <div class="col-8" style="padding-left: 0">
                <?=t('home.services-cta1')?>
            </div>

            <div class="col-4 text-right" style="padding-right: 0">
                &gt;
            </div>
        </a>
        
        <a href="/dolmetschen#konferenzberatung" class="col-12 col-md-4 call-to-action call-to-action-wide row justify-content-between">
            <div class="col-8" style="padding-left: 0">
                <?=t('home.services-cta2')?>
            </div>

            <div class="col-4 text-right" style="padding-right: 0">
               &gt;
            </div>
        </a>

        <a href="/uebersetzen" class="col-12 col-md-4 call-to-action call-to-action-wide row justify-content-between">
            <div class="col-8" style="padding-left: 0">
                <?=t('home.services-cta3')?>
            </div>

            <div class="col-4 text-right" style="padding-right: 0">
                &gt;
            </div>
        </a>
    </div>
</div>

<!-- Über mich -->
<div class="row aboutme-box-sm d-sm-none"> <!-- Small screen: text above image -->
    <h2 class="col-12">
        Cristina M&uuml;ller
    </h2>

    <h4 class="aboutme-text-sm col-12">
        <?=t('home.aboutme-text')?>
    </h4>

    <a href="/profil" class="call-to-action col-10 offset-1" style="width: 162px; background-color: white; margin-top: 18px; font-size: .87rem;">
        <div class="col-8" style="padding-left: 0">
            <?=t('home.aboutme-button')?>
        </div>

        <div class="col-4 text-right" style="padding-right: 0">
            &gt;
        </div>
    </a>

</div>

<div class="row aboutme-box"> <!-- Big screen: text within image -->
    <div class="col-10 offset-1 col-sm-12 offset-sm-0 hero-image-container">
        <picture>
            <source srcset="/static/images/cristina_mueller_sitzend-xs.jpg" media="(max-width: 576px)">
            <source srcset="/static/images/cristina_mueller_sitzend-sm.jpg" media="(max-width: 1000px)">
            <img
                src="/static/images/cristina_mueller_sitzend.jpg"
                class="img-fluid"
                alt="<?=t('home.aboutme-alt')?>"
            >
        </picture>

        <div class="aboutme-image-text d-none d-sm-block">
            <h2>
                Cristina M&uuml;ller
            </h2>

            <h4 class="aboutme-text">
                <?=t('home.aboutme-text')?>
            </h4>

            <a href="/profil" class="call-to-action" style="width: 162px; background-color: white; margin-top: 18px; font-size: .87rem;">
                <div class="col-8" style="padding-left: 0">
                    <?=t('home.aboutme-button')?>
                </div>

                <div class="col-4 text-right" style="padding-right: 0">
                    &gt;
                </div>

                <a href="https://mitglieder.bdue.de/CristinaMueller" target="_blank" rel="noopener" style="margin-left: 40px;">
                    <img src="/static/images/logos/bdue_vkd_logo.svg" alt="<?=t('footer.logo.title')?>" style="height: 38px;" />
                </a>
            </a>
        </div>
    </div>
</div>

<!-- Kontakt -->
<div class="row justify-content-center home-contact-box last-item-on-page">
    <div class="col-sm-9">
        <h2>
            <?=t('home.contact-heading')?>
        </h2>

        <p style="margin-top: 16px">
            <?=t('home.contact-text')?>
        </p>

        <address class="home-contact-box-addresss">
            Cristina Müller<br />
            <?=t('home.contact-mobile')?>: <a href="tel:‭+4915202312427‬">+49 (0) 1520 231 24 27‬</a><br />
            <?=t('home.contact-mail')?>: <a href="mailto:mail@sprachmuehle.de">mail@sprachmuehle.de</a>
        </address>
    </div>
</div>