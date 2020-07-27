<?php foreach ($fonk_topla as $key => $value) : ?>
    <div class="col-xl-4 col-12 " style="margin-bottom:10px; padding:30px;">
        <div class="row golgeli-kutu">
            <div class="col-xl-12 col-12" style="margin-bottom:10px;">
                <?php $degeri_f = FONK::hangi_site(1); ?>
                <b>İlan:</b> <a href="<?= @$degeri_f[1] . $value[0] . @$degeri_f[2]; ?>" target="_blank"> #<?= $value[0]  ?></a>
                <br>
                <!--<b>Başlık:</b> <?= $value[1][0][2] ?>
                <br>-->
            </div>
            <div class="col-xl-12 col-12" style="margin-bottom:10px;">
                <table>
                    <tr>
                        <td style="text-align: center; ">Favoriye <br>Eklendiğindeki Fiyat <br><b><?= @$value[2][0] ?> TL</b></td>
                        <td style="text-align: center;"><img style=" margin-left:10px;  margin-right:10px;" height="50" width="50" src="<?= RESIM ?>sabit/ileri.png" /></td>
                        <td style="text-align: center; ">İlanın Şu Anki <br>Fiyatı<br><b><?= @$value[2][1] ?> TL</b></td>
                    </tr>
                </table>
                <br>
                <?php if (!empty($value[1])) : ?>
                    <table style="width:100%;">
                        <?php foreach ($value[1] as $key => $valuemix) : ?>
                            <tr>
                                <?php if ($key == 0) : ?>
                                    <td><b>Favoriye Eklendiğindeki Fiyat</b>
                                        <br>
                                        <h7>Favoriye Ekleme Tarihi: <?= $valuemix[0] ?></h7>
                                    </td>
                                    <td style="text-align: right; "><?= $valuemix[1] ?> TL</td>
                                <?php else : ?>
                                    <td> <?= $valuemix[0] ?> </td>
                                    <td style="text-align: right; "><?= $valuemix[1] ?> TL</td>
                                <?php endif ?>
                            </tr>
                            <tr>
                                <td colspan=2>
                                    <hr>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                    <br>
                <?php endif ?>
                <a href="<?= ANA_DIZIN ?>incele/ilan/<?= $value[0]  ?>" class="btn btn-warning text-white">İncele</a>
            </div>
        </div>
    </div>
<?php endforeach ?>