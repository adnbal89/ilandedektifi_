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
                    <div class="col-9">
                        <input class="form-control" type="text" id="ilan_mix" placeholder="İlan No ile arama yapabilirsiniz..." />
                    </div>
                    <div class="col-2">
                        <a class="btn btn-warning" onclick="ozel_ilan_ara(2)"><b>Ara</b></a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Kapat</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo JSLER ?>ozel.js?a=<?= JSDEGIS ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


</body>

</html>