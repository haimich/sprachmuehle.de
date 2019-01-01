<!-- Hero image -->
<div class="row">
    <div class="col-12 welcome-image-container">
        <img
            src="/static/images/cristina_mueller_welcome.jpg"
            class="welcome-image img-fluid"
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
    <div class="col-sm-4 offset-sm-1 profile-box">
        <h4 style="margin-bottom: 30px">Cristina Müller</h4>

        <p style="font-size: 17px">
            Konferenzdolmetscherin (M. A.) und Übersetzerin für Rumänisch, Französisch, und Italienisch mit Standort in Rheinstetten (Berufswohnsitz Karlsruhe).
        </p>

        <div class="call-to-action" style="width: 162px; background-color: white; margin-top: 15px;">
            <span style="color: #020202">ÜBER MICH</span>
            <i class="fas fa-angle-right" style="margin-left: 10px; margin-top: 3px; font-size: 18px; font-weight: normal; color: #484848"></i>
        </div>
    </div>

    <div class="col-sm-1 profile-box">
        &nbsp; <!-- just for the color -->
    </div>

    <div class="col-sm-6" style="margin-left: -15px;">
        <img src="./img/Cristina_027.jpg" alt="Kunde" style="max-width: 500px;" />
    </div>
</div>

<!-- Any questions? -->
<div class="row justify-content-center" style="text-align: center; margin-top: 120px; margin-bottom: 100px">
    <div class="col-sm-9">
    <h3 style="font-weight: normal">Sie haben noch Fragen?</h3>

    <p style="margin-top: 16px">
        Ganz gleich, welche Art von Veranstaltung Sie planen: Örtlich ungebunden, stehe ich Ihnen beratend zur Seite und übernehme freundlich und zuverlässig die sprachliche Betreuung Ihres Projektes. Ich freue mich darauf, Ihre Botschaft authentisch und wirkungsvoll zu vermitteln.
    </p>

    <p style="margin-top: 75px; font-size: 16px; display: none">
        Cristina Müller<br />
        Mobil: +49 (0) 152 / 02312427<br />
        <a href="mailto:mail@sprachmuehle.de">mail@sprachmuehle.de</a>
    </p>

    </div>
</div>