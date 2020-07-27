<?php
$bilgi["resim"] = "";
if ($bilgi["resim"] == "") {
    $bilgi["resim"] = "1.jpg";
}
?>
<main class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-xl-4 col-12">

            <div class="col-xl-12 col-12" style="margin-top: 10px; ">
                <span>Mail</span>
                <input class="form-control" type="text" id="mail" placeholder="Mail" />
            </div>
            <div class="col-xl-12 col-12" style="margin-top: 10px; ">
                <span>Şifre</span>
                <input class="form-control" type="password" id="sifre" placeholder="Şifre" />
            </div>
            <div class="col-xl-12 col-12" style="margin-top: 30px;">
                <a class="btn btn-warning btn-block" id="simdi_ifsa_btn" onclick="giris_yap()"><b>Giriş Yap</b></a>
            </div>
            <div class="col-xl-12 col-12" style="margin-top: 30px;margin-bottom: 100px;">
                <a class="btn btn-info btn-block" href="<?= ANA_DIZIN ?>kayit_ol"><b>Kayıt Ol</b></a>
            </div>

        </div>
    </div>
</main>