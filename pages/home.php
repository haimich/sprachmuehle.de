<!-- Hero image -->
<div class="row">
    <span class="welcome-image-container">
        <img
            src="/static/images/cristina_mueller_welcome.jpg"
            class="welcome-image img-fluid"
            alt="<?=t('home.welcome-alt')?>"
        />

        <div class="welcome-image-text">
            <h1 style="color: #194d60;">
                <?=t('home.welcome-header')?>
            </h1>

            <h4 style="margin-top: 20px; font-size: 1.2rem; letter-spacing: .4px;">
                <?=t('home.welcome-subtitle')?>
            </h4>
        </div>
    </span>
</div>

<!-- Intro text -->
<div class="row justify-content-center">
    <p class="home-centered-text col-sm-8">
        <?=t('home.intro')?>
    </p>
</div>

<div class="row justify-content-center">
    <div class="purple-line">&nbsp;</div>
</div>

<!-- About me -->
<div class="row justify-content-center" style="padding: 90px 0 100px 0">
    <div class="col-6">
        <img src="/static/images/cristina_mueller_dolmetschen1.jpg" style="width: 100%" alt="<?=t('home.languages-alt')?>" />
    </div>

    <div class="col-5 offset-col-1">
        <p>
            <?=t('home.languages')?>
        </p>
    </div>
</div>

<!-- Leistungen -->
<div class="row" style="background-color: #F7F7F7; padding-top: 120px; padding-bottom: 100px;">
    <div class="row">
    <div class="col-sm-3 offset-sm-1">
        <h3>Leistungen</h3>

        <div class="purple-line" style="margin-top: 60px">&nbsp;</div>
    </div>

    <div class="col-sm-7">
        <p style="font-size: 18px">
        Sowohl beim Dolmetschen als auch beim Übersetzen besteht mein Anspruch darin, Botschaften immer so zu formulieren, dass sie nicht verdolmetscht oder übersetzt klingen. Erst dann gelingt die Kommunikation und die Aussage des Redners oder des Schreibenden kommt zuverlässig und unverfälscht beim Publikum an.
        </p>
    </div>
    </div>

    <div class="row justify-content-center" style="margin-top: 60px;">
    <div class="col-sm" style="margin-left: 100px">
        <div class="call-to-action call-to-action-wide" style="margin-right: 20px;">
        <span>Dolmetschen</span>
        <i class="fas fa-angle-right" style="margin-left: 10px; margin-top: 3px; font-size: 18px; font-weight: normal; color: #484848"></i>
        </div>

        <div class="call-to-action call-to-action-wide" style="margin-right: 20px;">
        <span>Konferenzberatung</span>
        <i class="fas fa-angle-right" style="margin-left: 10px; margin-top: 3px; font-size: 18px; font-weight: normal; color: #484848"></i>
        </div>

        <div class="call-to-action call-to-action-wide">
        <span>Übersetzen</span>
        <i class="fas fa-angle-right" style="margin-left: 10px; margin-top: 3px; font-size: 18px; font-weight: normal; color: #484848"></i>
        </div>
    </div>
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

<style>

.welcome-image-container {
    position: relative;
}

.welcome-image-text {
    position: absolute;
    left: 4%;
    bottom: 24%;
}

.home-centered-text {
    text-align: center;
    font-size: 1.12rem;
    color: #121212;
    padding: 90px 0 60px 0;
}

.profile-box {
    background-color: #9B225F;
    color: white;
    padding: 60px 30px 9px 30px;
    opacity: 0.85;
    font-size: 0.65rem;
}


</style>