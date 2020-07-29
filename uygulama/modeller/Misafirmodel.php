<?php
class Misafirmodel
{
    protected $db = [];
    public $veri = [];
    public function __construct()
    {
        $this->db = new DB();
        $this->db_uzak = new DB_UZAK();
        // echo "Misafir modeli çağırdırlar<br>";
    }

    public function index($parametre_bir = "")
    {
        $deger = $this->db->query("Select mail,sifre,yetki from kontrol where yetki = :yetki", ["yetki" => $parametre_bir]);
        echo "<pre>";
        print_r($deger);
        echo "Modelin indexi geldi<br>";
    }
    public function yukselenler($parametre_bir = "")
    {
        $deger = $this->db->query("Select mail,sifre,yetki from kontrol where yetki = :yetki", ["yetki" => $parametre_bir]);
        echo "<pre>";
        print_r($deger);
        echo "Modelin indexi geldi<br>";
    }
    public function sehir($id = "*")
    {
        if ($id == "*") {
            $deger = $this->db->query("Select sehir_title,sehir_key from sehir");
        } else {
            $deger = $this->db->single("Select sehir_title from sehir where sehir_key = :il", ["il" => $id]);
        }
        return $deger;
    }
    public function incele($parametre_bir = "", $parametre_iki = "")
    {
        $cek_tpl = [];
        $cek_tpl_r = [];
        if ($parametre_bir == "id") {
            $limit = " limit 1";
            $this->veri["veribir"] = $this->db->query("Select *,il.sehir_title as il , concat(k.adi,' ',k.sadi) as kisi   , ie.id as id from ilan_ekle ie , sehir il , kisiler k  where k.id = ie.ekleyen and ie.id = :id  and ie.il = il.sehir_key $limit", ["id" => $parametre_iki]);
        } else {
            $this->veri["veribir"] = $this->db->query("Select *,il.sehir_title as il , concat(k.adi,' ',k.sadi) as kisi  , ie.id as id from ilan_ekle ie , sehir il , kisiler k where k.id = ie.ekleyen and ie.ilan_no = :id  and ie.il = il.sehir_key ", ["id" => $parametre_iki]);
            $cek = $this->db_uzak->query("Select createDate,Fiyat,Baslik from ilan where IlanNo = :ilanno limit 1", ["ilanno" => $parametre_iki]);
            if (!empty($cek)) {
                foreach ($cek as  $value) {
                    $cek_tpl_r[0] = FONK::sayi_yap($value["Fiyat"]);
                    $cek_tpl_r[1] = FONK::sayi_yap($value["Fiyat"]);
                    $cek_tpl[] = [FONK::tarih("bas", strtotime(FONK::tarih("donustur", $value["createDate"]))), FONK::sayi_yap($value["Fiyat"]), $value["Baslik"]];
                }
            }
            $cek = $this->db_uzak->query("Select Tarih,Fiyat from gecmis where IlanNo = :ilanno", ["ilanno" => $parametre_iki]);
            if (!empty($cek)) {
                foreach ($cek as  $value) {
                    $cek_tpl[] = [FONK::tarih("bas", strtotime(FONK::tarih("donustur", $value["Tarih"]))), FONK::sayi_yap($value["Fiyat"])];
                }
                $cek_tpl_r[1] = FONK::sayi_yap($value["Fiyat"]);
            }
        }
        $this->veri["veriuc"] = $cek_tpl_r;
        $this->veri["veriiki"] = $cek_tpl;
    }
    public function ilanlarim()
    {
        $kontrol = FONK::kontrol_id();
        return $this->db->query("Select *,il.sehir_title as il , concat(k.adi,' ',k.sadi) as kisi  , ie.id as id from ilan_ekle ie , sehir il , kisiler k where k.id=:id and k.id = ie.ekleyen   and ie.il = il.sehir_key ", ["id" => $kontrol]);
    }
    public function admin_ilanlarim()
    {
        return $this->db->query("Select *,il.sehir_title as il , concat(k.adi,' ',k.sadi) as kisi , ie.id as id from ilan_ekle ie , sehir il , kisiler k where k.id = ie.ekleyen   and ie.il = il.sehir_key and ie.goster=0 limit 10");
    }
    public function admin_ilanlarim_tumu()
    {
        return $this->db->query("Select *,il.sehir_title as il , concat(k.adi,' ',k.sadi) as kisi , ie.id as id from ilan_ekle ie , sehir il , kisiler k where k.id = ie.ekleyen   and ie.il = il.sehir_key and ie.goster=1");
    }
    public function adi_getir($parametre_bir = "")
    {
        echo "Modelin Ad geldi<br>" . $parametre_bir . "<br>";
    }
}
