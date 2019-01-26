<!-- Hero image -->
<div class="row justify-content-around" style="position: relative"> <!-- Big Screen: Image with text -->
    <div class="hero-gray-bg hero-gray-bg-translating">&nbsp;</div>

    <div class="hero-image-text col-12 col-md-6">
        <h1 style="margin-bottom: 83px;">
            <?=t('translating.welcome-header1')?>
        </h1>

        <h4 style="color: #194d60; margin-bottom: 12px; line-height: 1.8rem;">
            <?=t('translating.welcome-header2')?>
        </h4>

        <p style="margin-top: 15px;"><?=t('translating.welcome-header2-sub1')?></p>
    </div>

    <div class="hero-image col-md-6 d-none d-md-block" >
        <img
            src="/static/images/cristina_mueller_uebersetzen.jpg"
            class="img-fluid"
            style="max-width: 456px;"
            alt="<?=t('translating.welcome-alt')?>"
        />
    </div>
</div>

<div class="row justify-content-center d-md-none" style="margin-top: 45px;"> <!-- Small Screen: Image separate -->
    <img
        src="/static/images/cristina_mueller_uebersetzen.jpg"
        class="hero-image-sm col-8"
        style="max-width: 1000px; max-height: 1359px;"
        alt="<?=t('interpreting.welcome-alt')?>"
    />
</div>

<!-- Intro text -->
<div class="row justify-content-center">
    <p class="centered-text-box col-8">
        <?=t('translating.intro')?>:
    </p>
</div>

<!-- Sprachkombinationen -->
<div class="row d-md-none"> <!-- Small screen: text above image -->
    <div class="languages-image-text-sm col-12">
        <h2 style="margin-bottom: 30px;">
            <?=t('translating.languages-heading')?>
        </h2>

        <ul class="languages-list-sm text-uppercase" style="color: #161616;">
            <li><?=t('translating.languages-list1')?></li>
            <li><?=t('translating.languages-list2')?></li>
            <li><?=t('translating.languages-list3')?></li>
        </ul>
    </div>
</div>

<div class="row justify-content-center d-none d-md-block"> <!-- Big screen: text within image -->
    <div class="col-12 hero-image-container" style="padding-left: 65px; padding-right: 65px;">
        <img
            src="/static/images/cristina_mueller_uebersetzen2.jpg"
            class="img-fluid"
            alt="<?=t('translating.languages-alt')?>"
        />

        <div class="languages-image-text-translating text-over-image">
            <div> <!-- needed for positioning -->
              <h4 class="languages-text" style="color: #161616">
                  <?=t('translating.languages-heading')?>
              </h4>
  
              <hr class="purple-line" style="background-color: #161616; margin-top: 26px;">
              
              <ul class="languages-list languages-text text-uppercase" style="color: #161616;">
                  <li><?=t('translating.languages-list1')?></li>
                  <li><?=t('translating.languages-list2')?></li>
                  <li><?=t('translating.languages-list3')?></li>
              </ul>
            </div>
        </div>
    </div>
</div>

<!-- Arten von Dokumenten -->
<div class="row documents-box">
    <div class="col-12 col-md-10 offset-md-1">
        <h4 style="color: #194d60; margin-bottom: 20px;">
            <?=t('translating.types-heading')?>
        </h4>
        
        <p><?=t('translating.types-sub')?>:</p>

        <div class="row highlighted-box" style="margin-top: 25px;">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.types-list1')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.types-list2')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.types-list3')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.types-list4')?>
            </div>
        </div>
    </div>
</div>

<!-- Zitat -->
<blockquote class="blockquote text-center">
    <p class="mb-0">„Wenn etwas leicht zu lesen ist, dann war es schwer zu schreiben.“</p>
    <footer class="blockquote-footer">
      <cite title="Source Title">Enrique Jardiel Poncela</cite>
    </footer>
</blockquote>

<!-- Branchenerfahrung -->
<div class="row" style="margin-top: 45px">
    <div class="col-12 col-md-10 offset-md-1">
        <h4 style="color: #194d60; margin-bottom: 20px;">
            <?=t('translating.industries-heading')?>
        </h4>
        
        <p><?=t('translating.industries-sub')?></p>

        <div class="row highlighted-box" style="margin-top: 25px;">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.industries-list1')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.industries-list2')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.industries-list3')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.industries-list4')?>
            </div>
        </div>

        <div class="row highlighted-box">
            <div class="col-12" style="border-color: #4BBAD4">
                <?=t('translating.industries-list5')?>
            </div>
        </div>
    </div>
</div>

<!-- Beglaubigungen -->
<div class="row last-item-on-page" style="margin-top: 45px;">
    <div class="col-12 col-md-10 offset-md-1">
        <h4 style="color: #194d60; margin-bottom: 20px;">
            <?=t('translating.documents-heading')?>
        </h4>
        
        <p><?=t('translating.documents-sub1')?></p>
        <p><?=t('translating.documents-sub2')?></p>
        <p><?=t('translating.documents-sub3')?></p>
    </div>
</div>