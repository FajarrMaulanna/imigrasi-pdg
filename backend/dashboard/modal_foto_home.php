    <!-- Update Majalah Modal -->
    <div class="modal fade" id="modal_foto<?php echo $foto['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Foto di Homepage</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="up_foto_home.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_foto" value="<?php echo $foto['id']?>"/>
                        <div class="form-group">
                            <label>Judul Foto:</label>
                            <input type="text" class="form-control" placeholder="Masukkan Judul" name="judul_foto" required="required" value="<?php echo $foto['judul_foto'];?>">
                        </div>
                        <div class="form-grup">
                            <label>File Foto</label>
                            <input type="file" class="form-control" name="file_foto">
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