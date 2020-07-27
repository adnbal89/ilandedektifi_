<main class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-xl-6 col-12" style="margin-bottom:10px;">
            <div class="col-xl-6 col-6">
                <?php
                if (FONK::kontrol_id() != 1) {
                ?>
                    <a href="<?= ANA_DIZIN ?>ilanlarim" class="btn btn-success text-white">İlanlarım</a>
                <?php
                } ?>
                <a href="<?= ANA_DIZIN ?>cik" class="btn btn-success text-white">Çıkış Yap</a>
            </div>
        </div>
    </div>
</main>