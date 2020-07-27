<style>
    .golgeli-kutu {
        box-shadow: 0 0 0.2em #000;
        border-style: solid;
        border-color: yellow;
        border-width: thin;
    }
</style>
<main class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-xl-12 col-12" style="margin-bottom:60px;">
        <a href="<?= ANA_DIZIN ?>" class="btn btn-success">İncele</a>
            <a href="<?= ANA_DIZIN ?>tumu" class="btn btn-success">Tüm Kayıtlar</a>
            <table class="table">

                <td>ID</td>
                <td>Resim</td>
                <td>Kisi</td>
                <td>Şehir</td>
                <td>ilan No</td>
                <td>Site</td>
                <td>Link</td>
                <td>Gösteri</td>
                <td>İşlem</td>
                <tb>
                    <?php
                    $veri = $veri["veri"];
                    foreach ($veri as $key => $value) {
                        $cek = '
                        <a onclick="gosterim_artir(' . $value["id"] . ')" href="#galleryModalx" data-url-src="' . $value["id"] . '" data-large-src="' . RESIM . 'ilan/' . $value["resim_id"] . '" data-toggle="modal">
                            <img style="height:150px;width:150px;" src="' . RESIM . 'ilan/' . $value["resim_id"] . '" class="img-fluid img-thumbnail">
                           
                        </a>
                    ';
                        $stesi = FONK::hangi_site($value["sitesi"]);
                        echo "<tr>";
                        echo "<td>" . $value["id"] . "</td>";
                        echo "<td style='width:150px'>" . $cek . "</td>";
                        echo "<td>" . $value["kisi"] . "</td>";
                        echo "<td>" . $value["il"] . "</td>";
                        echo "<td>" . $value["ilan_no"] . "</td>";
                        echo "<td>" . $stesi[0] . "</td>";
                        echo "<td><a target='_blank' href='" . $stesi[1] . $value["ilan_no"] . $stesi[2] . "'>Link</a></td>";
                        echo "<td>" . $value["goruntulenme"] . "</td>";
                        echo "<td style='width:1%;'><a class='btn btn-success text-white' onclick='yayinla(" . $value["id"] . ")'>Yayınla</a><a class='btn btn-danger text-white' onclick='pasif(" . $value["id"] . ")'>Pasif</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tb>
            </table>
        </div>
    </div>
</main>

<div id="galleryModalx" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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
            <div class="modal-footer">
                <a href="#" class="btn btn-success" target="_blank" id="detayli_btn">Detaylı</a>
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Kapat</button>
            </div>
        </div>
    </div>
</div>

<div id="ozel_ara" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center mb-0">Özel Arama Alanı</h3>
                <button type="button" class="close float-right" aria-label="Close" data-dismiss="modal">
                    <span aria-hidden="true">&#xD7;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="text" id="ilan" placeholder="İlan No" />
                    </div>
                    <div class="col-6">
                        <a class="btn btn-warning" onclick="ozel_ilan_ara(1)"><b>Ara</b></a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Kapat</button>
            </div>
        </div>
    </div>
</div>