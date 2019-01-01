<!-- Hero image -->
<div class="row">
    <div class="hero-image-container">
        <img
            src="/static/images/cristina_mueller_welcome.jpg"
            class="img-fluid"
            alt="<?=t('home.welcome-alt')?>"
        />

        <div class="welcome-image-text">
            <h1>
                <?=t('home.welcome-header')?>
            </h1>

            <h4 style="margin-top: 20px; font-size: 1.2rem; letter-spacing: .4px;">
                <?=t('home.welcome-subtitle')?>
            </h4>
        </div>
    </div>
</div>

<!-- Intro text -->
<div class="row justify-content-center">
    <p class="home-centered-text col-sm-8">
        <?=t('home.intro')?>
    </p>
</div>

<div class="row ">
    <div class="col-12" style="display: flex; justify-content: center;">
        <hr class="purple-line">
    </div>
</div>

<!-- About me -->
<div class="row justify-content-center" style="padding: 90px 0 100px 0">
    <div class="col-6">
        <img src="/static/images/cristina_mueller_dolmetschen1.jpg" style="width: 100%" alt="<?=t('home.languages-alt')?>" />
    </div>

    <div class="col-5" style="padding-left: 60px">
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

    <div class="col-12" style="margin-top: 40px; margin-left: 10px; display: flex; justify-content: space-between">
        <a href="/dolmetschen" class="call-to-action call-to-action-wide row justify-content-between">
            <div class="col-8" style="padding-left: 0">
                <?=t('home.services-cta1')?>
            </div>

            <div class="col-4 text-right" style="padding-right: 0">
                <i class="fas fa-angle-right call-to-action-icon"></i>
            </div>
        </a>
        
        <a href="/dolmetschen#konferenzberatung" class="call-to-action call-to-action-wide row justify-content-between">
            <div class="col-8" style="padding-left: 0">
                <?=t('home.services-cta2')?>
            </div>

            <div class="col-4 text-right" style="padding-right: 0">
                <i class="fas fa-angle-right call-to-action-icon"></i>
            </div>
        </a>

        <a href="/uebersetzen" class="call-to-action call-to-action-wide row justify-content-between">
            <div class="col-8" style="padding-left: 0">
                <?=t('home.services-cta3')?>
            </div>

            <div class="col-4 text-right" style="padding-right: 0">
                <i class="fas fa-angle-right call-to-action-icon"></i>
            </div>
        </a>
    </div>
</div>

<!-- About me -->
<div class="row" style="margin-top: 100px;">
    <div class="col-12 hero-image-container" style="padding-left: 65px; padding-right: 65px;">
        <img
            src="/static/images/cristina_mueller_sitzend.jpg"
            class="img-fluid"
            alt="<?=t('home.aboutme-alt')?>"
        />

        <div class="aboutme-image-text">
            <h2>
                Cristina Müller
            </h2>

            <h4 class="aboutme-text">
                <?=t('home.aboutme-text')?>
            </h4>

            <a href="/profil" class="call-to-action" style="width: 162px; background-color: white; margin-top: 18px; font-size: .87rem;">
                <div class="col-8" style="padding-left: 0">
                    <?=t('home.aboutme-button')?>
                </div>

                <div class="col-4 text-right" style="padding-right: 0">
                    <i class="fas fa-angle-right call-to-action-icon"></i>
                </div>

                <a href="http://mitglieder.bdue.de/CristinaMueller" target="_blank" style="margin-left: 20px;">
                    <img src="/static/images/logos/bdue_vkd_logo.svg" title="<?=t('footer.logo.title')?>" style="height: 38px;" />
                </a>
            </a>
        </div>
    </div>
</div>

<!-- Contact -->
<div class="row justify-content-center" style="text-align: center; margin-top: 120px; margin-bottom: 100px">
    <div class="col-sm-9">
        <h2>
            <?=t('home.contact-heading')?>
        </h2>

        <p style="margin-top: 16px">
            <?=t('home.contact-text')?>
        </p>

        <p style="margin-top: 72px;">
            Cristina Müller<br />
            Mobil: +49 (0) 152 / 02312427<br />
            <a href="mailto:mail@sprachmuehle.de">mail@sprachmuehle.de</a>
        </p>
    </div>
</div>