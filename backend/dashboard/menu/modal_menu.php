<!-- Update Majalah Modal -->
<div class="modal fade" id="modal_maj<?php echo $mj['id_maj']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Majalah Imigrasi Rancak</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="up_majalah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_maj" value="<?php echo $mj['id_maj']?>">
                    <div class="form-group">
                        <label>Edisi :</label>
                        <input type="text" class="form-control" placeholder="Masukkan Edisi" name="namamajalah" required="required" value="<?php echo $mj['nama_maj'];?>">
                    </div>
                    <div class="form-grup">
                        <label>File Majalah (PDF)</label>
                        <input type="file" class="form-control" name="filemajalah" required>
                    </div>
                    <div class="form-group">
                        <label>Cover Majalah (PNG, JPG, JPEG)</label>
                        <input type="file" class="form-control" name="covermajalah" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Update"></input>
                </form>
            </div>
        </div>
    </div>
</div>
