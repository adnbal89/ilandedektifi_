<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>İlan Dedektifi</title>
    <link rel="icon" type="image/png" href="<?= RESIM ?>sabit/5.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="<?= ANA_DIZIN ?>baslik" type="text/javascript"></script>'
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126973368-9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-126973368-9');
    </script>
    <script data-ad-client="ca-pub-7166084200998558" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
        @media (min-width:650px) {
            .ust_nav {
                padding-left: 180px;
                padding-right: 180px;
            }
        }

        @media (max-width:650px) {
            .ust-div {
                margin-top: 20px;
            }
        }
    </style>
</head>

<body id="content">
    <header>
        <nav class="navbar navbar-dark bg-dark ust_nav">
            <div>
                <a href="<?= ANA_DIZIN ?>"><img height="40" src="<?= RESIM ?>sabit/minilogoyeni.png" /></a>
                <a  class="text-white btn btn-secondary btn-sm" href="<?= ANA_DIZIN ?>yukselenler">Yükselenler</a>
                <a class="text-white btn btn-secondary btn-sm" href="<?= ANA_DIZIN ?>dusenler">Düşenler</a>
            </div>
                       
            <div class="d-none d-sm-block">
                <input style="padding:4px; width:600px;" type="text" id="ilan" placeholder="İlan No ile arama yapabilirsiniz..." />
                <a class="btn btn-warning" onclick="ozel_ilan_ara(1)"><b>Ara</b></a>
            </div>
            <div>
                <img style="padding-right:40px" href="#ozel_ara" data-toggle="modal" height="30" width="70" src="<?= RESIM ?>sabit/ara3.png" />
                <?php
                if (FONK::kontrol_id() == 0) {
                ?>
                    <a class="text-white" href="<?= ANA_DIZIN ?>giris_yap"><b>Giriş Yap</b></a>
                <?php
                } else {
                ?>
                    <a class=" text-white" href="<?= ANA_DIZIN ?>hesabim"><b>Hesabım</b></a>
                <?php
                } ?>
            </div>
        </nav>
        <nav class="navbar  navbar-dark fixed-bottom bg-dark ust_nav">
            <?php
            if (FONK::kontrol_id() != 1) {
            ?>
                <div>
                    <a target="_blank" href="http://facebook.com/ilandedektificom"> <img height="40" src="<?= RESIM ?>sabit/fb1.png" />
                    </a>
                    <a target="_blank" href="http://instagram.com/ilandedektifi">
                        <img height="40" src="<?= RESIM ?>sabit/ins1.png" />
                    </a>
                    <a target="_blank" href="http://twitter.com/ilandedektifi">
                        <img height="40" src="<?= RESIM ?>sabit/tw1.png" />
                    </a>
                </div>
                
                <div>
                <a target="_blank" href="mailto:info@ilandedektifi.com"> <img height="40" src="<?= RESIM ?>sabit/mail.png" />
                </a>
                </div>
                <!--<a class="btn btn-warning" href="<?= ANA_DIZIN ?>"><b>Tüm İlanlar</b></a>-->
                <a class="btn btn-warning" href="<?= ANA_DIZIN ?>ilan_ekle"><b>İlan Geçmişi Yükle</b></a>
            <?php
            } ?>
        </nav>
    </header>