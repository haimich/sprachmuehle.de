<!-- Willkommensbild -->
<div class="row justify-content-center">
    <div class="hero-image-container">
        <picture>
            <source srcset="/static/images/cristina_mueller_kontakt-sm.jpg" media="(max-width: 650px)">
            <img
                src="/static/images/cristina_mueller_kontakt.jpg"
                class="img-fluid"
                alt="<?=t('contact.welcome-alt')?>"
            >
        </picture>

        <div class="contact-welcome-image-text">
            <h1>
                <?=t('contact.welcome-header')?>
            </h1>

            <h4 class="contact-welcome-sub">
            <span class="contact-welcome-sub-detail"><?=t('contact.welcome-sub1')?><br /><br /></span>
                <?=t('contact.welcome-sub2')?>
            </h4>
        </div>
    </div>
</div>

<!-- Intro text -->
<div class="row justify-content-center">
    <p class="centered-text-box col-10 col-md-8">
        <?=t('contact.intro')?>
    </p>
</div>

<!-- Kontaktdaten -->
<div class="row contact-box last-item-on-page">
    <div class="col-10 offset-1 col-md-6 offset-md-0" style="padding: 6% 3% 0 7%;">
        <p style="margin-bottom: 4px;">
            <strong>Sprachmühle</strong>
        </p>

        <address>
            <p style="margin-bottom: 24px;">
                <?=t('contact-street')?>
            </p>
    
            <p style="margin-bottom: 24px;">
                Cristina Müller
            </p>
    
            <p>
                <?=t('contact-tel-heading')?>: <a href="tel:‭+4972147006487">+49 (0) 721 47 00 64 87</a><br />
                <?=t('contact-mobile-heading')?>: <a href="tel:‭+4915202312427‬">+49 (0) 1520 231 24 27‬</a><br />
                <?=t('contact-email-heading')?>: <a href="mailto:mail@sprachmuehle.de">mail@sprachmuehle.de</a>
            </p>
        </address>

    </div>

    <div id="maps" class="maps-box col-12 col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2618.980032249262!2d8.3066139!3d48.9729045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797037ed618a70b%3A0x196af9cc53043946!2sSprachm%C3%BChle%20%7C%20Cristina%20M%C3%BCller%20%7C%20Konferenzdolmetscherin%20%26%20%C3%9Cbersetzerin!5e0!3m2!1sde!2sde!4v1711316777296!5m2!1sde!2sde" width="85%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
