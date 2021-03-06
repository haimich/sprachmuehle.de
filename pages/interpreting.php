<!-- Hero image -->
<div class="row justify-content-around" style="position: relative"> <!-- Big Screen: Image with text -->
    <div class="hero-gray-bg hero-gray-bg-interpreting">&nbsp;</div>

    <div class="hero-image-text col-12 col-md-6">
        <h1 style="margin-bottom: 68px;">
            <?=t('interpreting.welcome-header1')?>
        </h1>

        <h4 style="color: #194d60; margin-bottom: 12px;">
            <?=t('interpreting.welcome-header2')?>
        </h4>

        <p><?=t('interpreting.welcome-header2-sub1')?></p>
        <p><?=t('interpreting.welcome-header2-sub2')?></p>
    </div>

    <div class="hero-image col-md-6 d-none d-md-block">
        <img
            src="/static/images/cristina_mueller_mikrofon.jpg"
            class="img-fluid"
            style="max-width: 456px;"
            alt="<?=t('interpreting.welcome-alt')?>"
        />
    </div>
</div>

<div class="row justify-content-center d-md-none" style="margin-top: 45px;"> <!-- Small Screen: Image separate -->
    <img
        src="/static/images/cristina_mueller_mikrofon-sm.jpg"
        class="hero-image-sm col-8"
        style="max-width: 1000px; max-height: 1350px;"
        alt="<?=t('interpreting.welcome-alt')?>"
    />
</div>

<!-- Intro text -->
<div class="row justify-content-center">
    <p class="centered-text-box col-10 col-md-8">
        <?=t('interpreting.intro')?>
    </p>
</div>

<!-- Sprachkombinationen -->
<div class="row d-md-none"> <!-- Small screen: text without image -->
    <div class="languages-image-text-sm col-12">
        <h2 style="margin-bottom: 30px;">
            <?=t('interpreting.languages-heading')?>
        </h2>

        <ul class="languages-list-sm text-uppercase">
            <li><?=t('interpreting.languages-list1')?></li>
            <li><?=t('interpreting.languages-list2')?></li>
            <li><?=t('interpreting.languages-list3')?></li>
        </ul>
    </div>
</div>

<div class="row justify-content-center d-none d-md-block"> <!-- Big screen: text within image -->
    <div class="col-12 hero-image-container" style="padding-left: 65px; padding-right: 65px;">
        <img
            src="/static/images/cristina_mueller_dolmetschen2.jpg"
            class="img-fluid"
            alt="<?=t('interpreting.languages-alt')?>"
        />

        <div class="languages-image-text text-over-image" style="text-shadow: 1px 1px #737373">
            <h4 class="languages-text">
                <?=t('interpreting.languages-heading')?>
            </h4>

            <hr class="purple-line" style="background-color: white; margin-top: 26px;">
            
            <ul class="languages-list languages-text text-uppercase">
                <li><?=t('interpreting.languages-list1')?></li>
                <li><?=t('interpreting.languages-list2')?></li>
                <li><?=t('interpreting.languages-list3')?></li>
            </ul>
        </div>
    </div>
</div>

<!-- Veranstaltungen & Dolmetscharten -->
<div class="row events-box">
    <div class="col-12 col-md-10 offset-md-1">
        <h4 style="color: #194d60; margin-bottom: 20px;">
            <?=t('interpreting.events-heading1')?>
        </h4>
        
        <p><?=t('interpreting.events-heading1-sub')?></p>

        <div class="row highlighted-box" style="margin-top: 25px;">
            <div class="col-12">
                <?=t('interpreting.events-heading1-list1')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.events-heading1-list2')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.events-heading1-list3')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.events-heading1-list4')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.events-heading1-list5')?>
            </div>
        </div>
        
        <h4 class="event-teaser">
            <?=t('interpreting.events-heading2')?>
        </h4>
        
        <p><?=t('interpreting.events-heading2-sub1')?></p>
        <p><?=t('interpreting.events-heading2-sub2')?></p>

        <h4 style="color: #194d60; margin-top: 45px; margin-bottom: 20px;">
            <?=t('interpreting.types-heading3')?>
        </h4>
        
        <div class="interpreting-types">
            <p>
                <strong><?=t('interpreting.types-heading3-simultan')?></strong> – <?=t('interpreting.types-heading3-simultan-sub')?>
                <a
                    href="#"
                    onclick="openInterpretingTypesModal(event, 0)"
                    role="button"
                ><?=t('interpreting.types-showmore')?></a>
            </p>
            <p>
                <strong><?=t('interpreting.types-heading3-whisper')?></strong> – <?=t('interpreting.types-heading3-whisper-sub')?>
                <a
                    href="#"
                    onclick="openInterpretingTypesModal(event, 1)"
                    role="button"
                ><?=t('interpreting.types-showmore')?></a>
            </p>
            <p>
                <strong><?=t('interpreting.types-heading3-kon')?></strong> – <?=t('interpreting.types-heading3-kon-sub')?>
                <a
                    href="#"
                    onclick="openInterpretingTypesModal(event, 2)"
                    role="button"
                ><?=t('interpreting.types-showmore')?></a>
            </p>
            <p>
                <strong><?=t('interpreting.types-heading3-negotiate')?></strong> – <?=t('interpreting.types-heading3-negotiate-sub')?>
                <a
                    href="#"
                    onclick="openInterpretingTypesModal(event, 3)"
                    role="button"
                ><?=t('interpreting.types-showmore')?></a>
            </p>
        </div>
    </div>
</div>

<!-- Konferenzberatung -->
<div class="row conferenceconsulting-box" id="konferenzberatung">
    <div class="col-12 col-lg-6" style="padding: 4% 3% 0 7%">
        <h2>
            <?=t('interpreting.conferenceconsulting-heading')?>
        </h2>

        <p style="margin-top: 20px; margin-bottom: 24px;">
            <?=t('interpreting.conferenceconsulting-sub')?>
        </p>
    </div>

    <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-0" style="padding-right: 0;">
        <img
            src="/static/images/cristina_mueller_laptop.jpg"
            class="img-fluid"
            alt="<?=t('interpreting.conferenceconsulting-alt')?>"
        />
    </div>
</div>

<div class="row last-item-on-page" style="margin-top: 45px;">
    <div class="col-12 col-md-10 offset-md-1">
        <h4 style="color: #194d60; margin-bottom: 20px;">
            <?=t('interpreting.conferenceconsulting-services-heading')?>
        </h4>
        
        <p><?=t('interpreting.conferenceconsulting-services-sub')?>:</p>

        <div class="row highlighted-box" style="margin-top: 25px;">
            <div class="col-12">
                <?=t('interpreting.conferenceconsulting-services-list1')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.conferenceconsulting-services-list2')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.conferenceconsulting-services-list3')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.conferenceconsulting-services-list4')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.conferenceconsulting-services-list5')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.conferenceconsulting-services-list6')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12">
                <?=t('interpreting.conferenceconsulting-services-list7')?>
            </div>
        </div>

        <p>
            <?=t('interpreting.conferenceconsulting-services-contact1')?>: 
            <a href="tel:‭+4915202312427‬" title="<?=t('tel.title')?>">+49 (0) 1520 231 24 27‬</a>
        </p>
        <p><?=t('interpreting.conferenceconsulting-services-contact2')?></p>
    </div>
</div>

<!-- Dolmetscharten Modal -->
<div class="modal fade" id="interpretingTypesModal" tabindex="-1" role="dialog" aria-labelledby="interpretingTypesModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <!-- will be set dynamically -->
                    <h5 style="display: none;"><?=t('interpreting.types-heading3-simultan')?></h5>
                    <h5 style="display: none;"><?=t('interpreting.types-heading3-whisper')?></h5>
                    <h5 style="display: none;"><?=t('interpreting.types-heading3-kon')?></h5>
                    <h5 style="display: none;"><?=t('interpreting.types-heading3-negotiate')?></h5>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="interpretingTypesModalCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" style="padding-left: 40px; padding-right: 40px;">
                        <div class="carousel-item">
                            <div class="d-block w-100">
                               <?=t('interpreting.types-heading3-simultan-long')?>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-block w-100">
                                <?=t('interpreting.types-heading3-whisper-long')?>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-block w-100">
                                <?=t('interpreting.types-heading3-kon-long')?>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-block w-100">
                                <?=t('interpreting.types-heading3-negotiate-long')?>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#interpretingTypesModalCarousel" role="button" data-slide="prev" style="width: 3%;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"><</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#interpretingTypesModalCarousel" role="button" data-slide="next" style="width: 3%;">
                        <span class="carousel-control-next-icon" aria-hidden="true">></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>