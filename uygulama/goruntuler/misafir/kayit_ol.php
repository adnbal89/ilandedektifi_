<?php
$bilgi["resim"] = "";
if ($bilgi["resim"] == "") {
    $bilgi["resim"] = "1.jpg";
}
?>
<main class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>İsim</span>
            <input class="form-control" type="text" id="ad" placeholder="İsim" />
        </div>
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>Soyisim</span>
            <input class="form-control" type="text" id="sad" placeholder="Soyisim" />
        </div>
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>Mail</span>
            <input class="form-control" type="text" id="mail" placeholder="Mail" />
        </div>
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>Şifre</span>
            <input class="form-control" type="password" id="sifre" placeholder="Şifre" />
        </div>
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>Şehir<span>
                    <select class="form-control selectpicker" id="sehir" data-live-search="true">
                        <?php foreach ($veri["sehir"] as $key => $value) {
                            echo '<option value="' . $value["sehir_key"] . '">' . $value["sehir_title"] . '</option>';
                        } ?>
                    </select>
        </div>
        <div class="col-xl-6 col-12" style="margin-top: 30px;margin-bottom: 100px;">
            <a class="btn btn-warning btn-block" id="simdi_ifsa_btn" onclick="kayit_ol()"><b>Kayıt Ol</b></a>
        </div>
    </div>
</main>