<div class="modal fade" id="view_cp<?php echo $eazy['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Profile</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="foto_cp" src="../../files/eazy_foto/<?php echo $eazy['file_foto']; ?>" alt="">
                    <hr>
                    <div class="form-group">
                        <label for="#">Nama :</label>
                        <p><?php echo $eazy['name']; ?></p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="#">NIK :</label>
                        <p><?php echo $eazy['nik']; ?></p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="#">No HP :</label>
                        <p><?php echo $eazy['nohp']; ?></p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="#">Email :</label>
                        <p><?php echo $eazy['email']; ?></p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="#">Alamat :</label>
                        <p><?php echo $eazy['address']; ?></p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="#">Instansi :</label>
                        <p><?php echo $eazy['instansi']; ?></p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="#">Status :</label>
                        <p><?php echo $eazy['statusnya']; ?></p>
                        <hr>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
</div>