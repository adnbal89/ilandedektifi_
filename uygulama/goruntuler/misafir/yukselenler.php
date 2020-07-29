<style>
    .golgeli-kutu {
        box-shadow: 0 0 5px #000;
        padding: 10px;
    }

    .ust-div {
        padding: 10px;
    }
</style>
<main class="" style="margin-top:30px;">
    <div class="row " style="margin:0px;">
        <div class="col-xl-1 col-lg-2 d-none d-lg-block">
        </div>
        <div class="col-xl-10 col-lg-8 col-12 ">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-6 " style="margin-bottom:5px;">
                    <select class="form-control selectpicker" id="sehir" style="text-transform: uppercase;position:absolute; " data-live-search="true">
                        <?php foreach ($veri["sehir"] as $key => $value) {
                            echo '<option value="' . $value["sehir_key"] . '">' . $value["sehir_title"] . '</option>';
                        } ?>
                    </select>
                    <a class="btn btn-warning" style=" position:absolute;" onclick="ilan_getir_yeni()"><b>Getir-YUKSELENLER</b></a>
                </div>
            </div>
            <div class="col-xl-12 col-12" style="margin-bottom:60px;">
                <div class="row" id="icerik_yukle">
                    
                </div>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-6t+ed+2i-1n-4w" data-ad-client="ca-pub-7166084200998558" data-ad-slot="3718194755"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <!--<a class="btn btn-warning font-weight-bold" id="daha_fazla_btn" style="display:none;" onclick="daha_fazla()">Daha Fazla</a>-->
            </div>
        </div>
        <div class="col-xl-1 col-lg-2 d-none d-lg-block">
        </div>
    </div>
</main>

<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center mb-0">İlan Detayı</h3>
                <button type="button" class="close float-right" aria-label="Close" data-dismiss="modal">
                    <span aria-hidden="true">&#xD7;</span>
                </button>
            </div>
            <div class="modal-body p-0 text-center bg-alt">
                <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="loaded-image mx-auto img-fluid">
            </div>
            <div class="" style="padding:10px;">
                <a href="#" class="btn" id="paylat_what" target="_blank"><img height="30" src="<?= RESIM ?>sabit/wht.png" /></a>
                <a href="#" class="btn" id="paylat_twt" target="_blank"><img height="30" src="<?= RESIM ?>sabit/twt.png" /></a>
                <a href="#" class="btn btn-success" style="float:right;" id="detayli_btn">Detaylı</a>
                <button class="btn btn-primary" style="float:right;" data-dismiss="modal" aria-hidden="true">Kapat</button>
            </div>
        </div>
    </div>
</div>
<script>
    //bekleyen_fonksiyon("ilan_getir");
    bekleyen_fonksiyon("ilan_getir_yeni");
</script>