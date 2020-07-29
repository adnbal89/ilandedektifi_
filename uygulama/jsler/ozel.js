var kacincida = 0;
var limit = 12;
function ilan_getir() {
    il = $("#sehir").val();
    $.post(anadizin + "postlar/ilan_getir", { kacincida: kacincida, il: il, limit: limit }, function (data) {
        kaydirma_aktif = true;
        if (data.obje == "") {
            $("#daha_fazla_btn").html("Hepsi Bu..");
            kaydirma_aktif = false;
        }
        $("#daha_fazla_btn").show();
        $("#icerik_yukle").append(data.obje);
        kacincida += limit;
    }, "json");
}
function ilan_getir_yeni() {
    il = $("#sehir").val();
    $.post(anadizin + "postlar/ilan_getir_yeni", { kacincida: kacincida, il: il, limit: limit }, function (data) {
        kaydirma_aktif = true;
        if (data == "") {
            $("#daha_fazla_btn").html("Hepsi Bu..");
            kaydirma_aktif = false;
        }
        $("#daha_fazla_btn").show();
        $("#icerik_yukle").append(data);
        kacincida += limit;
    });
}
function giris_yap() {
    mail = $("#mail").val();
    sifre = $("#sifre").val();
    if (mail == "" || sifre == "") {
        alert("Tüm alanları doldurun");
        return false;
    }
    $.post(anadizin + "postlar/giris_yap", { mail: mail, sifre: sifre }, function (data) {
        if (data.islem == "basarili") {
            location.href = anadizin;
        } else {
            alert("Hesap Bulunamadı");
        }
    }, "json");
}
function yayinla(id) {
    $.post(anadizin + "postlar/yayinla", { id: id }, function (data) {
        alert("Yayınladı");
    });
}
function kaldir(id) {
    $.post(anadizin + "postlar/kaldir", { id: id }, function (data) {
        alert("Kaldırıldı");
    });
}
function pasif(id) {
    $.post(anadizin + "postlar/pasif", { id: id }, function (data) {
        alert("Pasif Edildi");
    });
}
function kayit_ol() {
    ad = $("#ad").val();
    sad = $("#sad").val();
    mail = $("#mail").val();
    sehir = $("#sehir").val();
    sifre = $("#sifre").val();
    if (ad == "" || sad == "" || mail == "" || sehir == "" || sifre == "") {
        alert("Tüm alanları doldurun");
        return false;
    }
    $.post(anadizin + "postlar/kayit_ol", { ad: ad, sad: sad, mail: mail, sehir: sehir, sifre: sifre }, function (data) {
        if (data.islem == "basarili") {
            location.href = anadizin;
        } else {
            alert("Bu mail daha önce kullanılmış");
        }
    }, "json");
}

function daha_fazla() {
    //ilan_getir();
    ilan_getir_yeni();
}
function gosterim_artir(id) {
    $.post(anadizin + "postlar/gosterim_artir", { id: id }, function (data) {

    }, "json");
}
$("#sehir").change(function () {
    $("#daha_fazla_btn").hide();
    kacincida = 0;
    kaydirma_aktif = true;
    $("#icerik_yukle").html("");
    $("#daha_fazla_btn").html("Daha Fazla");
});

$('#galleryModal').on('show.bs.modal', function (e) {
    $('#galleryImage').attr("src", $(e.relatedTarget).data("large-src"));
    $('#detayli_btn').attr("href", anadizin + "incele/ilan/" + $(e.relatedTarget).data("url-src"));
    $('#paylat_what').attr("href", "whatsapp://send?text=İlan Dedektifi: " + anadizin + "incele/" + $(e.relatedTarget).data("url-kod") + "/" + $(e.relatedTarget).data("url-detay"));
    $('#paylat_twt').attr("href", "http://twitter.com/intent/tweet?text=İlan Dedektifi&url=" + anadizin + "incele/" + $(e.relatedTarget).data("url-kod") + "/" + $(e.relatedTarget).data("url-detay") + "&via=IlanDedektifi");

});

$('#galleryModalx').on('show.bs.modal', function (e) {
    $('#galleryImage').attr("src", $(e.relatedTarget).data("large-src"));
    $('#detayli_btn').attr("href", anadizin + "incele/id/" + $(e.relatedTarget).data("url-src"));

});
function ozel_ilan_ara(durum) {
    if (durum == 1) {
        ilan_no = $("#ilan").val();
    } else if (durum == 2) {
        ilan_no = $("#ilan_mix").val();
    }

    location.href = anadizin + "incele/ilan/" + ilan_no;

}

resim_degistimi = "bos";

$('#resimli').change(function () {
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#resim_kendi').attr("src", e.target.result);
            resim_degistimi = e.target.result;

        }
        reader.readAsDataURL(input.files[0]);
    }
    else {
        swal_sure("warning", "Uygun formatta resim seçin");
    }
});
function ilan_ekle() {
    tarih = $("#tarih").val();
    ilan = $("#ilan_ara").val();
    ilan_link = $("#ilan_link").val();
    sehir = $("#sehir").val();
    sitesi = $("#sitesi").val();
    if (ilan == "" && ilan_link == "") {
        alert("İlan No veya İlan Linkinden en az bir tanesini doldurun");
        return false;
    }
    if (tarih == "" || sehir == "" || resim_degistimi == "bos") {
        alert("Lütfen tüm alanları doldurun");
    } else {
        $("#simdi_ifsa_btn").attr("onclick", "");
        $("#simdi_ifsa_btn").html("Ekleniyor.. İşlem Uzun Sürebilir.");
        $.post(anadizin + "postlar/ilan_ekle", { resim: resim_degistimi, tarih: tarih, ilan: ilan, sehir: sehir, ilan_link: ilan_link, sitesi: sitesi }, function (data) {

            Swal.fire({
                title: 'Başarılı',
                text: "İlanınız başarılı bir şekilde sisteme eklenmiştir. İlan yönetici tarafından onaylandıktan sonra herkes tarafından görülür hale gelecektir.",
                type: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Tamam',
            }).then((result) => {
                if (result.value) {
                    location.href = anadizin + "incele/id/" + data.id;
                }
            })
        }, "json");
    }

}
kaydirma_aktif = false;
$(window).scroll(function () {
    toplam_yukseklik = $("html").prop("scrollHeight");
    anlik = $(window).scrollTop();
    alan = $(window).height();
    fazlalik = 1400;
    if (anlik + alan + fazlalik > toplam_yukseklik) {
        if (kaydirma_aktif) {
            kaydirma_aktif = false;
            //ilan_getir();
            ilan_getir_yeni();
        }
    }

});
