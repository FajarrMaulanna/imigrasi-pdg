<!-- Update Slider Modal -->
<div class="modal fade" id="modal_slide<?php echo $slide['id_slide']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Slider</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="up_slider.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_slide" value="<?php echo $slide['id_slide']?>"/>
                        <div class="form-grup">
                            <label>Masukkan Slider(PNG, JPEG, JPG, GIF)</label>
                            <input type="file" class="form-control" name="fileslide" required>
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