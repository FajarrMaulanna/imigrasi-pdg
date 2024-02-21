<div class="modal fade" id="modal_news<?php echo $news['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Berita</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="up_own_news.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_news" value="<?php echo $news['id']?>"/>
                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" class="form-control" name="judul_own" placeholder="Masukkan Judul Berita" value="<?php echo $news['header'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Berita</label>
                            <textarea type="text" class="form-control" name="desc_own" placeholder="Masukkan Deskripsi Berita" value="<?php echo $news['desc_news'] ?>" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gambar Berita</label>
                            <input type="file" class="form-control" name="img_own" required>
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