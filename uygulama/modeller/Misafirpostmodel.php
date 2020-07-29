<?php
class Misafirpostmodel
{
    protected $db = [];
    public $veri = [];

    public function __construct()
    {
        $this->db = new DB();
        $this->db_uzak = new DB_UZAK();
    }
    public function  ilan_getir_yeni()
    {
        $kacinci = $_POST["kacincida"];
        $limit = $_POST["limit"];
        $il = $_POST["il"];
        $fonk_topla = [];
        $il = FONK::il_isim($il);
        $kategori = "satilik-daire";
        //ORDER BY RAND() 
        $cek = $this->db_uzak->query("Select DISTINCT ii.IlanNo, ii.createDate,ii.Fiyat,ii.Baslik from ilan ii  where ii.Il=:il and ii.Kategori=:kategori and ii.Updated = 1 limit $limit offset $kacinci ", ["kategori" => $kategori, "il" => $il]);
        if (!empty($cek)) {
            foreach ($cek as  $value) {
                $cek_tpl_r[0] = FONK::sayi_yap($value["Fiyat"]);
                $cek_tpl_r[1] = FONK::sayi_yap($value["Fiyat"]);
                $cek_tpl = [];
                $cek_tpl[] = [FONK::tarih("bas", strtotime(FONK::tarih("donustur", $value["createDate"]))), FONK::sayi_yap($value["Fiyat"]), $value["Baslik"]];
                $parametre_iki = $value["IlanNo"];
                $cek = $this->db_uzak->query("Select Tarih,Fiyat from gecmis where IlanNo = :ilanno", ["ilanno" => $parametre_iki]);
                if (!empty($cek)) {
                    foreach ($cek as  $value) {
                        $cek_tpl[] = [FONK::tarih("bas", strtotime(FONK::tarih("donustur", $value["Tarih"]))), FONK::sayi_yap($value["Fiyat"])];
                    }
                    $cek_tpl_r[1] = FONK::sayi_yap($value["Fiyat"]);
                }
                $fonk_topla[] = [$parametre_iki, $cek_tpl, $cek_tpl_r];
            }
        }
        require_once 'uygulama/goruntuler/misafir/tek_tablo_getir.php';
    }

    public function  ilan_getir_yukselenler()
    {
        $kacinci = $_POST["kacincida"];
        $limit = $_POST["limit"];
        $il = $_POST["il"];
        $fonk_topla = [];
        $il = FONK::il_isim($il);
        $kategori = "satilik-daire";
        //ORDER BY RAND() 
        $cek = $this->db_uzak->query("Select DISTINCT ii.IlanNo, ii.createDate,ii.Fiyat,ii.Baslik from ilan ii ,gecmis g  where  ii.IlanNo = g.IlanNo and ii.Il=:il and ii.Kategori=:kategori limit $limit offset $kacinci ", ["kategori" => $kategori, "il" => $il]);
        if (!empty($cek)) {
            foreach ($cek as  $value) {
                $cek_tpl_r[0] = FONK::sayi_yap($value["Fiyat"]);
                $cek_tpl_r[1] = FONK::sayi_yap($value["Fiyat"]);
                $cek_tpl = [];
                $cek_tpl[] = [FONK::tarih("bas", strtotime(FONK::tarih("donustur", $value["createDate"]))), FONK::sayi_yap($value["Fiyat"]), $value["Baslik"]];
                $parametre_iki = $value["IlanNo"];
                $cek = $this->db_uzak->query("Select Tarih,Fiyat from gecmis where IlanNo = :ilanno", ["ilanno" => $parametre_iki]);
                if (!empty($cek)) {
                    foreach ($cek as  $value) {
                        $cek_tpl[] = [FONK::tarih("bas", strtotime(FONK::tarih("donustur", $value["Tarih"]))), FONK::sayi_yap($value["Fiyat"])];
                    }
                    $cek_tpl_r[1] = FONK::sayi_yap($value["Fiyat"]);
                }
                $fonk_topla[] = [$parametre_iki, $cek_tpl, $cek_tpl_r];
            }
        }
        require_once 'uygulama/goruntuler/misafir/tek_tablo_getir.php';
    }

    public function  ilan_getir()
    {
        $kacinci = $_POST["kacincida"];
        $limit = $_POST["limit"];
        $il = $_POST["il"];
        $parametre_iki = 3;
        $cek =  $this->db->query("Select *,il.sehir_title as il from ilan_ekle ie , sehir il  where ie.il = :il  and ie.il = il.sehir_key and goster = 1 limit $limit offset $kacinci ", ["il" => $il]);
        $kare_getir_metin = "";
        foreach ($cek as $key => $veri) {
            $hangisi = FONK::hangi_site($veri["sitesi"]);
            $kare_getir_metin .= '<div class="col-md-4 col-sm-4 col-12 ust-div" > <div class=" golgeli-kutu">
        <a onclick="gosterim_artir(' . $veri["id"] . ')" href="#galleryModal" data-url-src="' . $veri["ilan_no"] . '" data-url-kod="ilan" data-url-detay="' . $veri["ilan_no"] . '" data-large-src="' . RESIM . 'ilan/' . $veri["resim_id"] . '" data-toggle="modal">
            <img style="width:100%;" src="' . RESIM . 'ilan/' . $veri["resim_id"] . '" class="img-fluid img-thumbnail">
            <stt style="margin-left:10px;"><a href="' . $hangisi[1] . $veri["ilan_no"] . $hangisi[2] . '" target="_blank">İlan:<b>' . $veri["ilan_no"] . '</b></a>  </stt ><stt style="float:right; margin-right:10px;">  Görüntü: <b>' . $veri["goruntulenme"] . '</b> </stt>
        </a>
        </div>
    </div>
    
    ';
        }

        $json["obje"] = $kare_getir_metin;
        echo json_encode($json);
    }
    public function gosterim_artir()
    {
        $id = $_POST["id"];
        $this->db->query("UPDATE ilan_ekle SET goruntulenme = goruntulenme + 1 WHERE id = :4 limit 1", array("4" => $id));
    }
    public function  giris_yap()
    {
        $mail = $_POST["mail"];
        $sifre = $_POST["sifre"];
        $cek =  $this->db->query("Select * from kisiler where mail=:mail limit 1", ["mail" => $mail]);
        if (empty($cek)) {
            $json["islem"] = "hata";
        } else {
            if ($cek[0]["sifre"] == $sifre) {
                $json["islem"] = "basarili";
                $_SESSION["oturum"]["yetki"] = $cek[0]["yetki"];
                $_SESSION["oturum"]["id"] = $cek[0]["id"];
            } else {
                $json["islem"] = "hata";
            }
        }
        echo json_encode($json);
    }
    public function yayinla()
    {
        if (FONK::kontrol_id() == 1) {
            $id = $_POST["id"];
            $this->db->query("UPDATE ilan_ekle SET goster = 1 WHERE id = :4 limit 1", array("4" => $id));
        }
    }
    public function kaldir()
    {
        if (FONK::kontrol_id() == 1) {
            $id = $_POST["id"];
            $this->db->query("UPDATE ilan_ekle SET goster = 2 WHERE id = :4 limit 1", array("4" => $id));
        }
    }
    public function pasif()
    {
        if (FONK::kontrol_id() == 1) {
            $id = $_POST["id"];
            $this->db->query("UPDATE ilan_ekle SET goster = 0 WHERE id = :4 limit 1", array("4" => $id));
        }
    }
    public function kayit_ol()
    {
        $ad = $_POST["ad"];
        $sad = $_POST["sad"];
        $mail = $_POST["mail"];
        $sifre = $_POST["sifre"];
        $sehir = $_POST["sehir"];
        $cek =  $this->db->query("Select * from kisiler where mail=:mail limit 1", ["mail" => $mail]);
        if (empty($cek)) {
            $json["islem"] = "basarili";
            $this->db->query(
                "INSERT INTO kisiler(`adi`, `sadi`, `il`, `kayit_tarih`, `mail`, `sifre`, `yetki`) VALUES(:1,:2,:3,:4,:5,:6,:7)",
                array("1" => $ad, "2" => $sad, "3" => $sehir, "4" => FONK::tarih("intsaat"), "5" => $mail, "6" => $sifre, "7" => 2)
            );
            $id = $this->db->lastInsertId();
            $_SESSION["oturum"]["yetki"] = 2;
            $_SESSION["oturum"]["id"] = $id;
        } else {
            $json["islem"] = "hata";
        }
        echo json_encode($json);
    }


    public function ilan_ekle()
    {
        $kontrol = FONK::kontrol_id();
        $resim = $_POST["resim"];
        $fav_tarih = $_POST["tarih"];
        $sehir = $_POST["sehir"];
        $fav_tarih = FONK::tarih("tersten_int", $fav_tarih);
        $ilan = $_POST["ilan"];
        $ilan_link = $_POST["ilan_link"];
        $sitesi = $_POST["sitesi"];
        $ilan_link_tut = $ilan_link;
        if ($ilan_link != "") {
            $ilan_link = explode("/", $ilan_link);
            if (count($ilan_link) > 2) {
                $ilan_link = $ilan_link[count($ilan_link) - 2];
                $ilan_link = explode("-", $ilan_link);
                $ilan_link = $ilan_link[count($ilan_link) - 1];
                $ilan = $ilan_link;
            }
        }
        $tarih = FONK::tarih("intsaat");
        preg_match('/^data:image\/(\w+);base64,/', $resim, $typex);
        $typex = strtolower($typex[1]);
        if ($typex == "jpg" || $typex == "jpeg") {
            $img_orig = imagecreatefromjpeg($resim);
        } else if ($typex == "png") {
            $img_orig = imagecreatefrompng($resim);
        }
        $soru_adi = uniqid() . '.jpeg';
        imagejpeg($img_orig,  'uygulama/resimler/ilan/' . $soru_adi);

        $this->db->query(
            "INSERT INTO ilan_ekle(`sistem_tarih`, `fav_tarih`, `resim_id`, `ilan_no`, `ekleyen`, `goruntulenme`, `il`, sitesi , link,goster) VALUES(:1,:2,:3,:4,:5,:6,:7,:8,:9,:10)",
            array("1" => $tarih, "2" => $fav_tarih, "3" => $soru_adi, "4" => $ilan, "5" => $kontrol, "6" => 0, "7" => $sehir, "8" => $sitesi, "9" => $ilan_link_tut, "10" => 0)
        );
        $id = $this->db->lastInsertId();
        $json["id"] = $id;
        echo json_encode($json);
    }
}
