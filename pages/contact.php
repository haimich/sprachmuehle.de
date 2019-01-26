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

    <div class="maps-box col-12 col-md-6">
        <div style="height: 403px" id="google-maps-canvas"></div>
    </div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAeIbdV0NH4vwSyZl57mEohSAuA6R2vCQ"></script>

<script>
    let gmegMap, gmegMarker, gmegInfoWindow, latLng;
    
    function initMap() {
        latLng = new google.maps.LatLng(48.97294, 8.30632);

        gmegMap = new google.maps.Map(document.getElementById("google-maps-canvas"), {
            zoom: 11,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
        });

        gmegMarker = new google.maps.Marker({
            map: gmegMap,
            position: latLng,
        });
        gmegInfoWindow = new google.maps.InfoWindow({
            content: "<b>Sprachmühle</b><br>Adlerstraße 4a<br>76287 Rheinstetten",
        });

        gmegInfoWindow.open(gmegMap, gmegMarker);
    }
    
    google.maps.event.addDomListener(window, "load", initMap);
</script>