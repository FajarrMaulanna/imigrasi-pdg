<!-- Modal Update -->
<div class="modal fade" id="modalproduk<?php echo $d['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Undang-Undang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="up_uu.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Undang-Undang</label>
                    <input type="text" class="form-control" name="nama_uu" required>
                </div>
                <div class="form-group">
                    <label>File Undang-Undang</label>
                    <input type="file" class="form-control" name="file_uu" required>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Tambah">
            </form>
        </div>
        </div>
    </div>
    </div>