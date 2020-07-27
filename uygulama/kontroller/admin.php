<?php
class Admin extends Kontroller
{
    protected $model = [];
    public function __construct()
    {
        $this->model = $this->model("Misafirmodel");
    }

    public function index($parametre_bir = "")
    {
        $veri = $this->model->admin_ilanlarim();
        $this->goruntu("admin/index", ["veri" => $veri], "giris");
    }
    public function tumu($parametre_bir = "")
    {
        $veri = $this->model->admin_ilanlarim_tumu();
        $this->goruntu("admin/tumu", ["veri" => $veri], "giris");
    }
    public function incele($parametre_bir = "", $parametre_iki = "")
    {
        $veri = $this->model->incele($parametre_bir, $parametre_iki);
        $this->goruntu("misafir/incele", ["benim" => "hayir", "veri" => $veri], "giris");
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
