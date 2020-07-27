<?php
class FONK
{
    public function __construct()
    {
    }
    public static function js_css_getir($deger, $nerde)
    {
        $link_tpl = "";
        foreach ($deger as $key => $value) {
            if ($key == "css" && $nerde == "ust") {
                foreach ($value as  $css) {
                    switch ($css) {
                        case '1': // giriş sayfasındaki form 6 nın dosyaları
                            $link_tpl .= '<link href="' . KAYNAK . 'assets/css/pages/login/login-6.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '2': // global ayarları içeren css
                            $link_tpl .= '<link href="' . KAYNAK . 'assets/plugins/global/plugins.bundle.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '3': // global ayarları içeren css
                            $link_tpl .= '<link href="' . KAYNAK . 'assets/css/style.bundle.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '4': // global ayarları içeren css
                            $link_tpl .= '<link href="' . KAYNAK . 'assets/css/skins/header/base/light.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '5': // global ayarları içeren css
                            $link_tpl .= '<link href="' . KAYNAK . 'assets/css/skins/header/menu/light.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '6': // global ayarları içeren css
                            $link_tpl .= '<link href="' . KAYNAK . 'assets/css/skins/brand/dark.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '7': // global ayarları içeren css
                            $link_tpl .= '<link href="' . KAYNAK . 'assets/css/skins/aside/dark.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '8': // phpden js ye akratmak istediğimiz değişkenler
                            $link_tpl .= '<script src="' . ANA_DIZIN . 'baslik" type="text/javascript"></script>';
                            break;
                        case '9': // özel js kalıplarını içerir
                            $link_tpl .= '<script src="' . JSLER . 'form_islem/ozel.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '10': // datatable
                            $link_tpl .= '<link href="' . KAYNAK . 'assets/plugins/custom/datatables/datatables.bundle.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '11': // resim yükleme için
                            $link_tpl .= '<link href="' . JSLER . 'css/knockout-file-bindings.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '12': // harita için
                            $link_tpl .= '<link href="' . JSLER . 'css/harita/leaflet.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        case '13': //harita için
                            $link_tpl .= '<link href="' . JSLER . 'css/harita/leaflet-search.css?a=' . JSDEGIS . '" rel="stylesheet" type="text/css" />';
                            break;
                        default:
                            # code...
                            break;
                    }
                    $link_tpl .= "\n";
                }
            } else if ($key == "js" && $nerde == "alt") {
                foreach ($value as  $js) {
                    switch ($js) {
                        case '1': // giriş sayfasındaki form 6 nın dosyaları
                            $link_tpl .= '<script src="' . JSLER . 'form_islem/KTAppOptions_ayar.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '2': // global ayarları içeren css
                            $link_tpl .= '<script src="' . KAYNAK . 'assets/plugins/global/plugins.bundle.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '3': // global ayarları içeren css
                            $link_tpl .= '<script src="' . KAYNAK . 'assets/js/scripts.bundle.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '4': // global ayarları içeren css
                            $link_tpl .= '<script src="' . JSLER . 'form_islem/form_kontrol.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '5': // global ayarları içeren css
                            $link_tpl .= '<script src="' . JSLER . 'form_islem/alt.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '6': //datatable nin global js ayarları
                            $link_tpl .= '<script src="' . KAYNAK . 'assets/plugins/custom/datatables/datatables.bundle.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '7': // datatablenin kişisel tablo ayarları
                            $link_tpl .= '<script src="' . JSLER . 'datatable/datatable_format.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '8': // selected
                            $link_tpl .= '<script src="' . KAYNAK . 'assets/js/pages/crud/forms/widgets/bootstrap-select.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '9': // aranarkıen gelen select
                            $link_tpl .= '<script src="' . JSLER . 'form_islem/bitki_ekle_doldur.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '10': // resim yüleme
                            $link_tpl .= '<script src="' . JSLER . 'resim_yukle/knockout-min.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '11': // resim yüleme
                            $link_tpl .= '<script src="' . JSLER . 'resim_yukle/knockout-file-bindings.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '12': // resim yüleme
                            $link_tpl .= '<script src="' . JSLER . 'resim_yukle/dosyayukle.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '13': // harita
                            $link_tpl .= '<script src="' . JSLER . 'harita/leaflet.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '14': // harita
                            $link_tpl .= '<script src="' . JSLER . 'harita/leaflet-search.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '15': // çekmeli butonun altı
                            $link_tpl .= '<script src="' . KAYNAK . 'assets/js/pages/crud/forms/widgets/bootstrap-switch.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;
                        case '16': // summer note
                            $link_tpl .= '<script src="' . KAYNAK . 'assets/js/pages/crud/forms/editors/summernote.js?a=' . JSDEGIS . '" type="text/javascript"></script>';
                            break;


                        default:
                            # code...
                            break;
                    }
                    $link_tpl .= "\n";
                }
            }
        }
        return $link_tpl;
    }
    public static function body_getir($deger)
    {
        $link_tpl = "";
        switch ($deger["body"]) {
            case '1': // giriş sayfasındaki boşluksuz sayflamayı ifade eden body
                $link_tpl = '<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">';
                break;
            case '2': // 
                $link_tpl = '<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
                ';
                break;
            default:
                # code...
                break;
        }
        return $link_tpl;
    }
    public static function resim_kucult($source, $destination, $quality, $w = 0, $h = 0)
    {

        $info = getimagesize($source);

        if ($info['mime'] == 'image/jpeg') {
            $image = imagecreatefromjpeg($source);
            if ($w != 0 && $h != 0) {
                $target_width = $w;
                $target_height = $h;
                $target_layer = imagecreatetruecolor($target_width, $target_height);
                imagecopyresampled($target_layer, $image, 0, 0, 0, 0, $target_width, $target_height, $info[0], $info[1]);
            } else {
                $target_layer = $image;
            }
            imagejpeg($target_layer, $destination, $quality);
        } elseif ($info['mime'] == 'image/gif') {
            $image = imagecreatefromgif($source);
            if ($w != 0 && $h != 0) {
                $target_width = $w;
                $target_height = $h;
                $target_layer = imagecreatetruecolor($target_width, $target_height);
                imagecopyresampled($target_layer, $image, 0, 0, 0, 0, $target_width, $target_height, $info[0], $info[1]);
            } else {
                $target_layer = $image;
            }
            imagejpeg($target_layer, $destination, $quality);
        } elseif ($info['mime'] == 'image/png') {
            $image = imagecreatefrompng($source);
            if ($w != 0 && $h != 0) {
                $target_width = $w;
                $target_height = $h;
                $target_layer = imagecreatetruecolor($target_width, $target_height);
                imagecopyresampled($target_layer, $image, 0, 0, 0, 0, $target_width, $target_height, $info[0], $info[1]);
            } else {
                $target_layer = $image;
            }

            imagepng($target_layer, $destination, ($quality / 10));
        }
    }
    public static function tarih($deger, $val = "")
    {
        setlocale(LC_TIME, 'tr_TR.UTF-8');
        $fazlalik = 3600;
        switch ($deger) {
            case "donustur":
                $valx = explode("-", explode(" ", $val)[0]);
                return $valx[2] . "." . $valx[1] . "." . $valx[0];
                break;
            case "int":
                return strtotime(date("d.m.Y")) + $fazlalik;
                break;
            case "düz":
                return date("d.m.Y", strtotime(date("d.m.Y H:i:s")) + $fazlalik);
                break;
            case "yoklama":
                return intval(date("Hi", strtotime(date("d.m.Y H:i:s")) + $fazlalik));
                break;
            case "tersdüz":
                return date("Y-m-d", strtotime(date("d.m.Y H:i:s")) + $fazlalik);
                break;
            case "tersdüzbas":
                return date("Y-m-d", $val);
                break;
            case "intsaat":
                return strtotime(date("d.m.Y H:i:s")) + $fazlalik;
                break;
            case "duzsaat":
                return date("d.m.Y H:i:s", strtotime(date("d.m.Y H:i:s")) + $fazlalik);
                break;
            case "yaziaz":
                return strftime("%e %B %Y %A %R", $val);
                break;
            case "bas":
                return strftime("%e %B %Y ", $val);
                break;
            case "biryilsonra":
                return strtotime("+1 year") + $fazlalik;
                break;
            case "fazlalik":
                return $fazlalik;
                break;
            case "ayint":
                return date("n");
                break;
            case "tersten_int":
                $son_tarih = explode("-", $val);
                $son_tarih = $son_tarih[2] . "." . $son_tarih[1] . "." . $son_tarih[0];
                return strtotime($son_tarih) + FONK::tarih("fazlalik");
                break;
            default:
                break;
        }
    }
    public static function sayi_yap($deger)
    {
        return number_format($deger, 0, ',', '.');
    }

    public static function gorebilirmi($alan, $kim = "html")
    {
        $kisitla = FONK::kisitlamalar();
        $deger = "";
        $degerb = 0;
        if (in_array($alan, $kisitla["ust"]) || in_array($alan, $kisitla["alt"])) {
            $deger = "style='display:none'";
            $degerb = 1;
        }
        if ($kim == "html") {
            return $deger;
        } else if ($kim == "php") {
            if ($degerb == 1) {
                $getirilecekler = ["css" => [2, 3, 4, 5, 6, 7, 8, 9], "js" => [1, 2, 3], "body" => 2];
                Kontroller::goruntu('hoca/yetkisiz', ["getir" => $getirilecekler], "ana");
                exit;
            }
        }
    }
    public static function il_isim($il_kod)
    {
        $il_isim = "";
        switch ($il_kod) {
            case '34':
                $il_isim = "istanbul";
                break;
            case '35':
                $il_isim = "izmir";
                break;
            case '16':
                $il_isim = "bursa";
                break;
            case '6':
                $il_isim = "ankara";
                break;
        }
        return $il_isim;
    }
    public static function hangi_site($site)
    {
        $deger = ["", "", ""];
        switch ($site) {
            case '1':
                $deger = ["Sahibinden", "https://www.sahibinden.com/ilan/", "/detay"];
                break;

            default:
                # code...
                break;
        }
        return $deger;
    }
    public static function kisitlamalar()
    {
        $yetki = FONK::islem_onay();
        if ($yetki == 1) {
            $kisitla = ["ust" => [], "alt" => []];
        } else if ($yetki == 0) {
            $kisitla = ["ust" => ["Hesaplar"], "alt" => ["kullanicilar", "guncelle"]];
        } else if ($yetki == 2) {
            $kisitla = ["ust" => ["Hesaplar", "Arazi Defteri", "MOBİS"], "alt" => ["alan1", "alan2", "import", "ekle", "listele", "yazdir", "guncelle", "kullanicilar", "slider"]];
        }
        return $kisitla;
    }
    public static function menu_bas()
    {
        $kisitla = FONK::kisitlamalar();
        $menu = [
            "" =>
            [
                "Arazi Defteri" => [
                    ["Bitki Ekle", "ekle"], ["Listele", "listele"], ["Yazdır", "yazdir"], ["Güncelle", "guncelle"]
                ],
                "MOBİS" => [
                    ["DNA Bankası", "alan1"], ["Akış Sitometri", "alan2"], ["Excel Import", "import"]
                ],
                "Blog" => [
                    ["Yazılar", "blog"], ["Slider", "slider"]
                ],
                "Hesaplar" => [
                    ["Kullanıcılar", "kullanicilar"]
                ]
            ]
        ];
        $tpl = "";
        foreach ($menu as $key => $val) {
            $tpl .= '<li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">' . $key . '</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>';
            foreach ($val as $keyx => $valx) {
                if (!in_array($keyx, $kisitla["ust"])) {
                    $tpl .= '
                <li class="kt-menu__item  kt-menu__item--submenu menu_alan_adisi" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                </g>
            </svg></span><span class="kt-menu__link-text font-weight-bold">' . $keyx . '</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
        <ul class="kt-menu__subnav">
            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">' . $keyx . '</span></span></li>
                ';
                    foreach ($valx as $keyy => $valy) {
                        if (!in_array($valy[1], $kisitla["alt"])) {
                            $tpl .= '<li class="kt-menu__item" aria-haspopup="true"><a href="' . ANA_DIZIN . $valy[1] . '" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text font-weight-bold">' . $valy[0] . '</span><span class="kt-menu__link-badge"></span></a></li>';
                        }
                    }
                    $tpl .= '</ul>
                </div>
            </li>';
                }
            }
        }
        echo $tpl;
    }
    public static function baslik_getir()
    {
        Header("content-type: application/x-javascript");
        return 'var anadizin = "' . ANA_DIZIN . '"; 
                var kaynak = "' . KAYNAK . '"; 
                var url = window.location.href;
                function bekleyen_fonksiyon(n, i, a, b, c, d) {document.addEventListener("DOMContentLoaded", function () {window[n](i, a, b, c, d)})}
                console.log("en üst");
                ';
    }
    public static function yetki_ver($deger)
    {
        switch ($deger) {
            case "0":
                return "ev";
                break;
            case "1":
                return "admin";
                break;
            case "2":
                return "hoca";
                break;
            default:
                break;
        }
    }
    public static function durum($deger)
    {
        switch ($deger) {
            case "0":
                return "İncelemede";
                break;
            case "1":
                return "Onaylandın";
                break;
            case "2":
                return "İptal Edildi";
                break;
            default:
                break;
        }
    }
    public static function cikis_yap()
    {
        if (isset($_SESSION["token_tut"])) {
            $token_tut = $_SESSION["token_tut"];
        }
        session_destroy();
        session_start();
        if (isset($token_tut)) {
            $_SESSION["token_tut"] = $token_tut;
        }
        header('Location: ' . ANA_DIZIN);
        return;
    }
    public static function post_coz($deger)
    {
        parse_str($deger, $output);
        return $output;
    }
    public static function kontrol_id()
    {
        if (isset($_SESSION["oturum"]["id"])) {
            return $_SESSION["oturum"]["id"];
        } else {
            return 0;
        }
    }
    public static function islem_onay()
    {
        if (isset($_SESSION["oturum"]["islem_onay"])) {
            return $_SESSION["oturum"]["islem_onay"];
        } else {
            return 2;
        }
    }

    public static function timestamp_to_tarih2($timestamp)
    {
        return date('d.m.Y', $timestamp);
    }
    public static function enlem_hesap($deger)
    {
        if ($deger == "" || $deger == "---D" || $deger == "---K") {
            return 1;
        } else {
            $deger = explode("-", $deger);
            if (count($deger) > 2) {
                $bir = $deger[0];
                $iki = $deger[1];
                $iki = round($iki / 60, 6);
                $uc = $deger[2];
                $uc = round($uc / 3600, 6);
                $sonuc = $bir + $iki + $uc;
                return $sonuc;
            } else {
                return 0;
            }
        }
    }

    public static function enlem_yaz($enlem)
    {
        $value = '';
        if ($enlem != '') {
            $enlem = explode('-', $enlem);
            $value = trim($enlem[0]) . '&#176;' . trim($enlem[1]) . '\'' . trim($enlem[2]) . '"';
            if (isset($enlem[3]) and $enlem[3] != '') {
                $value .= trim($enlem[3]);
            }
        }
        return $value;
    }
}
