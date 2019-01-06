<div class="accordion last-item-on-page row" id="accordionAgb">
    <div class="col-12">
        <div class="card">
            <div class="card-header" id="headingInterpreting">
                <a
                    class="row"
                    data-toggle="collapse"
                    data-target="#collapseInterpreting"
                    aria-expanded="true"
                    aria-controls="collapseInterpreting"
                    title="<?=t('agb.toggleVisibility')?>"
                >
                    <div class="col-10">
                        <?=t('agb.interpreting.heading')?>
                    </div>
                    <div class="col-2 text-right">
                        &gt;
                    </div>
                </a>
            </div>

            <div id="collapseInterpreting" class="collapse show" aria-labelledby="headingInterpreting" data-parent="#accordionAgb">
                <div class="card-body">
                    <?php include "./pages/agb-interpreting.php"; ?>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTranslating">
                <a
                    class="row"
                    data-toggle="collapse"
                    data-target="#collapseTranslating"
                    aria-expanded="true"
                    aria-controls="collapseTranslating"
                    title="<?=t('agb.toggleVisibility')?>"
                >
                    <div class="col-10">
                        <?=t('agb.translating.heading')?>
                    </div>
                    <div class="col-2 text-right">
                        &gt;
                    </div>
                </a>
            </div>
            <div id="collapseTranslating" class="collapse" aria-labelledby="headingTranslating" data-parent="#accordionAgb">
                <div class="card-body">
                    <?php include "./pages/agb-translating.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>