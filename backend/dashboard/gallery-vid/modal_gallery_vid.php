    <!-- Update Gallery Video Modal -->
    <div class="modal fade" id="modal_gallery<?php echo $vid['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Gallery Video Youtube</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="up_gallery_vid.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_vid" value="<?php echo $vid['id']?>"/>
                        <div class="form-grup">
                            <label>Kode Video Youtube:</label>
                            <input type="text" class="form-control" placeholder="Masukkan Kode" name="kode_vid" required value="<?php echo $vid['kode_vid'];?>">
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