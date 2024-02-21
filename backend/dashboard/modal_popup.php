<!-- Update Pop Up Modal -->
    <div class="modal fade" id="modal_pop<?php echo $pop['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Pop Up</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="up_popup.php" method="post" enctype="multipart/form-data">
                        <div class="form-grup">
                            <label>File Pop Up</label>
                            <input type="hidden" name="id_pop" value="<?php echo $pop['id']?>">
                            <input type="file" class="form-control" name="filepopup" required>
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