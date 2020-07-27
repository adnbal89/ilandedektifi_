<?php
$value = ($veri["veri"]);
$girdix = 0;
?>
<main class="container" style="margin-top:40px;">


    <?php if (!empty($veri["veriiki"])) { ?>



        <div class="row">
            <div class="col-xl-12 col-12" style="margin-bottom:10px;">
                <h2>Fiyat Geçmişi</h2>
                <?php $degeri_f = FONK::hangi_site(1); ?>
                <b>İlan:</b> <a href="<?= $degeri_f[1] . $veri["deger"] . $degeri_f[2]; ?>" target="_blank"> #<?= $veri["deger"]  ?></a>
                <br>
                <!--<b>Başlık:</b> <?= $veri["veriiki"][0][2] ?>
                <br>-->
                <?php
                echo '<a target="_blank" href="whatsapp://send?text=İlan Dedektifi: ' . ANA_DIZIN . 'incele/' . $veri["kod"] . '/' . $veri["deger"] . '">
             <img height="40" src="' . RESIM . 'sabit/wht.png" />
             </a>
             
             <a target="_blank" href="http://twitter.com/intent/tweet?text=İlan Dedektifi&url=' . ANA_DIZIN . 'incele/' . $veri["kod"] . '/' . $veri["deger"] . '&via=IlanDedektifi">
             <img height="40" src="' . RESIM . 'sabit/twt.png" />
             </a><br>
             ';
                $girdix = 1;
                ?>
            </div>
            <div class="col-xl-6 col-12" style="margin-bottom:10px;">
                <table>
                    <tr>
                        <td style="text-align: center; ">Favoriye <br>Eklendiğindeki Fiyat <br><b><?= $veri["veriuc"][0] ?> TL</b></td>
                        <td style="text-align: center;"><img style=" margin-left:10px;  margin-right:10px;" height="50" width="50" src="<?= RESIM ?>sabit/ileri.png" /></td>
                        <td style="text-align: center; ">İlanın Şu Anki <br>Fiyatı<br><b><?= $veri["veriuc"][1] ?> TL</b></td>
                    </tr>
                </table>
                <br>
                <?php
                if (!empty($veri["veriiki"])) {
                    echo '
                <table style="width:100%;">
                ';
                    foreach ($veri["veriiki"] as $key => $valuemix) {
                        echo "<tr>";
                        if ($key == 0) {
                            //  echo "İlan: " . $veri["deger"] . "<br>";
                            // echo "Başlık: " . $valuemix[2] . "<br>";

                            //echo $valuemix[0] . " -> " . $valuemix[1] . "<br>";
                            echo '<td><b>Favoriye Eklendiğindeki Fiyat</b><br><h7>Favoriye Ekleme Tarihi: ' . $valuemix[0] . '</h7></td>
            <td style="text-align: right; ">' . $valuemix[1] . ' TL</td>';
                        } else {
                            echo '<td>' . $valuemix[0] . '</td>
                        <td style="text-align: right; ">' . $valuemix[1] . ' TL</td>';
                        }
                        echo "</tr><tr><td colspan=2><hr></td></tr>";
                    }

                    echo "</table>
            <br>";
                } ?>
            </div>
        </div>

    <?php } ?>
    <?php
    if (count($value) == 0) {
        if ($girdix == 0) {
            echo "Aradığınız kriterde üyelerden gönderilen hiçbir kayıt bulunamadı. Sizlere daha fazla içerik sunabilmek için sitemizi olabildiğince çok paylaşırsanız seviniriz.";
        }
    } else if (count($value) > 1) {
        if ($veri["benim"] == "evet") {
            echo "<b>Toplam " . count($value) . " ilan eklediniz</b>";
        } else {
            echo "<b>Bu ilan için toplam " . count($value) . " kayıt açılmış</b>";
        }
    }
    if (count($value) > 0) {
        if ($girdix == 0) {

            echo "<br>";
            echo '<a target="_blank" href="whatsapp://send?text=İlan Dedektifi: ' . ANA_DIZIN . 'incele/' . $veri["kod"] . '/' . $veri["deger"] . '">
        <img height="50" src="' . RESIM . 'sabit/wht.png" />
        </a>
        
        <a target="_blank" href="http://twitter.com/intent/tweet?text=İlan Dedektifi&url=' . ANA_DIZIN . 'incele/' . $veri["kod"] . '/' . $veri["deger"] . '&via=IlanDedektifi">
        <img height="50" src="' . RESIM . 'sabit/twt.png" />
        </a>
        ';
        }
    }

    foreach ($value as $key => $veri) {
        $hangisi = FONK::hangi_site($veri["sitesi"]);
    ?>
        <div class="row">
            <div class="col-xl-6 col-12" style="margin-bottom:10px;">
                <div class="col-md-12 col-sm-4 col-12" style="padding:0">
                    <a href="#galleryModal" data-large-src="<?php echo RESIM ?>ilan/<?= $veri["resim_id"]; ?>" data-toggle="modal">
                        <img style="width:100%;" id="resim_kendi" src="<?php echo RESIM ?>ilan/<?= $veri["resim_id"]; ?>" class="img-fluid img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-12" style="margin-bottom:10px;">
                <div class="col-xl-6 col-6">
                    <label>İlan No:</label><br>
                    <b> #<?= $veri["ilan_no"]; ?></b>
                </div>
                <div class="col-xl-6 col-6">
                    <label>Şehir:</label><br>
                    <b> <?= $veri["il"]; ?></b>
                </div>

                <div class="col-xl-6 col-6" style="margin-top: 10px;">
                    <label>Favori Tarih:</label><br>
                    <b> <?= FONK::tarih("bas", $veri["fav_tarih"]); ?></b>
                </div>
                <div class="col-xl-6 col-6" style="margin-top: 10px;">
                    <label>Eklenme Tarih:</label><br>
                    <b> <?= FONK::tarih("bas", $veri["sistem_tarih"]); ?></b>
                </div>
                <div class="col-xl-6 col-6" style="margin-top: 10px;">
                    <label>Görüntülenme:</label><br>
                    <b> <?= $veri["goruntulenme"]; ?></b>
                </div>
                <div class="col-xl-6 col-6" style="margin-top: 10px;">
                    <label>Site:</label><br>
                    <b> <?= $hangisi[0]; ?></b>
                </div>
                <div class="col-xl-6 col-6" style="margin-top: 10px;">
                    <label>Link:</label><br>
                    <b><a target="_blank" href="<?= $hangisi[1] . $veri["ilan_no"] . $hangisi[2];  ?>">Sayfaya Git</a></b>
                </div>
                <div class="col-xl-6 col-6" style="margin-top: 10px;">
                    <label>Durum:</label><br>
                    <b><?= FONK::durum($veri["goster"]) ?></b>
                </div>
                <div class="col-xl-6 col-6" style="margin-top: 10px;margin-bottom: 100px;">
                    <label>İlanı Ekleyen:</label><br>
                    <b><?= $veri["kisi"]; ?></b>
                </div>

            </div>

        </div>
        <hr style="border: 10px solid #ffc107; border-radius: 5px;">
        <script>
            bekleyen_fonksiyon("gosterim_artir", "15");
        </script>
    <?php }  ?>
</main>