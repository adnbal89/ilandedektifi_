<?php
session_start();
$isim = "http://localhost:8080";
$on_ek = "ifsa/";

define("ANA_DIZIN", "$isim/" . $on_ek);
define("KAYNAK", "$isim/" . $on_ek . "uygulama/kaynak/");
define("JSLER", "$isim/" . $on_ek . "uygulama/jsler/");
define("RESIM", "$isim/" . $on_ek . "uygulama/resimler/");
define("DOSYAYOL", $_SERVER['DOCUMENT_ROOT'] . "/" . $on_ek);
define("JSDEGIS", time());

require_once 'uygulama/init.php';
$uygulama = new Uygulamalar;