<div class="accordion" id="accordionAgb" style="margin-top: 45px; margin-bottom: 90px;">

    <div class="card">
        <div class="card-header" id="headingInterpreting" style="padding: 2px 9px;">
            <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInterpreting" aria-expanded="true" aria-controls="collapseInterpreting">
                <h2>
                    <?=t('agb.interpreting.heading')?> >
                </h2>
            </button>
            </h2>
        </div>

        <div id="collapseInterpreting" class="collapse show" aria-labelledby="headingInterpreting" data-parent="#accordionAgb">
            <div class="card-body">
                <?php include "./pages/agb-interpreting.php"; ?>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingTranslating" style="padding: 2px 9px;">
            <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTranslating" aria-expanded="false" aria-controls="collapseTranslating">
                <h2>
                    <?=t('agb.translating.heading')?> >
                </h2>
            </button>
            </h2>
        </div>
        <div id="collapseTranslating" class="collapse" aria-labelledby="headingTranslating" data-parent="#accordionAgb">
            <div class="card-body">
                <?php include "./pages/agb-translating.php"; ?>
            </div>
        </div>
    </div>
</div>