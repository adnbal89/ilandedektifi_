<?php

class Uygulamalar
{

    protected $kontroller = 'misafir';
    protected $metod = 'index';
    protected $parametre = [];

    public function __construct()
    {
        if (isset($_SESSION["oturum"])) {
            if ($_SESSION["oturum"]["yetki"] != 2) {
                $this->kontroller = FONK::yetki_ver($_SESSION["oturum"]["yetki"]);
            }
        }

        require_once 'uygulama/kontroller/' . $this->kontroller . '.php';
        $this->kontroller = new $this->kontroller;

        $url = $this->parseUrl();
        if (isset($url[0])) {
            if (method_exists($this->kontroller, $url[0])) {
                $this->metod = $url[0];
                unset($url[0]);
            }
        }
        $this->parametre = $url ? array_values($url) : [];
        call_user_func_array([$this->kontroller, $this->metod], $this->parametre);
    }

    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            return $url = explode('/', filter_var(rtrim($_GET["url"], '/'), FILTER_SANITIZE_URL));
        }
    }
}
