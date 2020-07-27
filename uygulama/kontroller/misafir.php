<?php
class Misafir extends Kontroller
{
    protected $model = [];
    public function __construct()
    {
        $this->model = $this->model("Misafirmodel");
    }

    public function index($parametre_bir = "")
    {
        $sehir = $this->model->sehir();
        $this->goruntu("misafir/ilk", ["sehir" => $sehir], "giris");
    }
    public function incele($parametre_bir = "", $parametre_iki = "")
    {
        $this->model->incele($parametre_bir, $parametre_iki);
        $veri = $this->model->veri["veribir"];
        $veriiki = $this->model->veri["veriiki"];
        $veriuc = $this->model->veri["veriuc"];
        $this->goruntu("misafir/incele", ["benim" => "hayir", "veri" => $veri, "veriiki" => $veriiki,"veriuc"=>$veriuc, "kod" => $parametre_bir, "deger" => $parametre_iki], "giris");
    }

    public function ilan_ekle($parametre_bir = "")
    {
        $sehir = $this->model->sehir();
        $this->goruntu("misafir/simdi_ifsala", ["sehir" => $sehir], "giris");
    }
    public function giris_yap($parametre_bir = "")
    {
        $sehir = $this->model->sehir();
        $this->goruntu("misafir/giris_yap", ["sehir" => $sehir], "giris");
    }
    public function kayit_ol($parametre_bir = "")
    {
        $sehir = $this->model->sehir();
        $this->goruntu("misafir/kayit_ol", ["sehir" => $sehir], "giris");
    }
    public function hesabim($parametre_bir = "")
    {
        if (FONK::kontrol_id() != 0) {
            $this->goruntu("misafir/hesabim", [], "giris");
        }
    }
    public function ilanlarim($parametre_bir = "")
    {
        if (FONK::kontrol_id() != 0) {
            $veri = $this->model->ilanlarim();
            $this->goruntu("misafir/incele", ["benim" => "evet", "veri" => $veri], "giris");
        }
    }
    public function postlar($altmetod = "", $parametre = "", $parametrea = "", $parametreb = "", $parametrec = "")
    {
        $kullanici = $this->model('Misafirpostmodel');
        $kullanici->$altmetod($parametre, $parametrea, $parametreb, $parametrec);
    }
    public function baslik()
    {
        echo FONK::baslik_getir();
    }
    public function cik()
    {
        FONK::cikis_yap();
    }
}
