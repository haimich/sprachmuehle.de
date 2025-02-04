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
                <?=t('contact-mobile-heading')?>: <a href="tel:‭+4915202312427‬">+49 (0) 1520 231 24 27‬</a><br />
                <?=t('contact-email-heading')?>: <a href="mailto:mail@sprachmuehle.de">mail@sprachmuehle.de</a>
            </p>
        </address>

    </div>

    <div id="maps" class="maps-box col-12 col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2600.9421777763987!2d8.391424676368077!3d49.31537867139777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797b46df0f6fd09%3A0x6f4a0ea1003ebebc!2sFrankenstra%C3%9Fe%207%2C%2067373%20Dudenhofen!5e0!3m2!1sde!2sde!4v1738650305694!5m2!1sde!2sde" width="85%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
