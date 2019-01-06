<!-- Hero image -->
<div class="row justify-content-around" style="position: relative"> <!-- Big Screen: Image with text -->
    <div class="hero-gray-bg" style="height: 62%;">&nbsp;</div>

    <div class="hero-image-text col-12 col-md-6">
        <h1 style="margin-bottom: 95px;">
            <?=t('profile.welcome-header')?>
        </h1>

        <p style="margin-top: 15px;"><?=t('profile.welcome-sub')?></p>
    </div>

    <div class="hero-image col-md-6 d-none d-md-block">
        <img
            src="/static/images/cristina_mueller_stehend.jpg"
            class="img-fluid"
            style="max-width: 456px;"
            alt="<?=t('profile.welcome-alt')?>"
        />
    </div>
</div>

<div class="row justify-content-center d-md-none" style="margin-top: 45px;"> <!-- Small Screen: Image separate -->
    <img
        src="/static/images/cristina_mueller_stehend-sm.jpg"
        class="hero-image-sm col-8"
        style="max-width: 933px; max-height: 1246px;"
        alt="<?=t('interpreting.welcome-alt')?>"
    />
</div>

<!-- Intro text -->
<div class="row profile-intro-box">
    <div class="col-12 col-md-10 offset-md-1">
        <p><?=t('profile.intro1')?></p>
        <p><?=t('profile.intro2')?></p>
    </div>
</div>

<!-- Werdegang -->
<div class="row werdegang-container last-item-on-page">
    <div class="col-12 col-sm-10 offset-sm-1 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" width="15%"></th> <!-- empty -->
                    <th scope="col">
                        <h2>
                            <?=t('profile.cv-header')?>
                        </h2>
                        
                        <p><?=t('profile.cv-sub')?></p>
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row" class="cv-year" style="border-top: none;">
                        <?=t('profile.cv-year1')?>
                    </th>
                    <td style="border-top: none;">
                        <?=t('profile.cv-text1')?>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year"><?=t('profile.cv-year2')?></th>
                    <td><?=t('profile.cv-text2')?></td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year"><?=t('profile.cv-year3')?></th>
                    <td><?=t('profile.cv-text3')?></td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year"><?=t('profile.cv-year4')?></th>
                    <td><?=t('profile.cv-text4')?></td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year"><?=t('profile.cv-year5')?></th>
                    <td><?=t('profile.cv-text5')?></td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year" style="border-top: none;"></th>
                    <td style="border-top: none;">
                        <!-- New Heading -->
                        <h4 style="color: #194d60; margin-bottom: -5px;">
                            <?=t('profile.cv-interns-heading')?>
                        </h4>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year"><?=t('profile.cv-year6')?></th>
                    <td><?=t('profile.cv-text6')?></td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year"><?=t('profile.cv-year7')?></th>
                    <td><?=t('profile.cv-text7')?></td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year"><?=t('profile.cv-year8')?></th>
                    <td><?=t('profile.cv-text8')?></td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year"><?=t('profile.cv-year9')?></th>
                    <td><?=t('profile.cv-text9')?></td>
                </tr>

                <tr>
                    <th scope="row" class="cv-year" style="border-top: none; padding-bottom: 0;"></th>
                    <td style="border-top: none; padding-top: 1.5rem; padding-bottom: 0;">
                        <!-- New Heading -->
                        <h4 style="color: #194d60; margin-bottom: 17px;">
                            <?=t('profile.cv-memberships-heading')?>
                        </h4>

                        <ul>
                            <li><?=t('profile.cv-memberships-list1')?></li>
                            <li><?=t('profile.cv-memberships-list2')?></li>
                        </ul>
                        
                        <?=t('profile.cv-memberships-list3')?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>