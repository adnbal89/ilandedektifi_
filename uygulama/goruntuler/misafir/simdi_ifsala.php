<?php
$bilgi["resim"] = "";
if ($bilgi["resim"] == "") {
    $bilgi["resim"] = "1.jpg";
}
?>
<main class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-xl-4 col-12" style="margin-bottom:10px;">
            <div class="col-md-12 col-sm-4 col-12" style="padding:0">
                <img style="width:100%;" id="resim_kendi" src="" class="img-fluid img-thumbnail">
            </div>
            <input type="file" name="profile_avatar" id="resimli" accept=".png, .jpg, .jpeg" />
        </div>
        <div class="col-xl-12">
        </div>
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>İlan Numarası</span>
            <input class="form-control" type="text" id="ilan_ara" placeholder="İlan No" />
        </div>
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>İlan Web Adresi</span>
            <input class="form-control" type="text" id="ilan_link" placeholder="İlan Web Link" />
        </div>
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>İlan Şehir<span>
                    <select class="form-control selectpicker" id="sehir" data-live-search="true">
                        <?php foreach ($veri["sehir"] as $key => $value) {
                            echo '<option value="' . $value["sehir_key"] . '">' . $value["sehir_title"] . '</option>';
                        } ?>
                    </select>
        </div>
        <div class="col-xl-6 col-6" style="margin-top: 10px; ">
            <span>Favoriye Eklenme Tarihi<span>
                    <input class="form-control" id="tarih" type="date" style="padding-right:0;" />
        </div>
        <div class="col-xl-12">
        </div>
        <input type="hidden" id="sitesi" value="1">
        <div class="col-xl-6 col-12" style="margin-top: 10px;margin-bottom: 100px;">
            <a class="btn btn-warning btn-block" id="simdi_ifsa_btn" onclick="ilan_ekle()"><b>İlan Ekle</b></a>
        </div>
    </div>
</main>